<?php

namespace App\Policies;

use App\Models\Survey;
use App\User;
use Illuminate\Auth\Access\Response;

class SurveyPolicy
{
    public function create(User $user)
    {
        if (! $user->subscribed()) {
            return Response::deny(__('شما اشتراک فعال ندارید'));
        }

        $planLimit = $user->subscription
            ->plan
            ->planOptions
            ->where('feature_code', 'survey_count')
            ->first()
            ->limit;

        if ($user->surveys()->count() < $planLimit) {
            return true;
        }

        return Response::deny(__('شما به سقف نظرسنجی رسیده اید! با ارتقای حساب خود قفل نظرسنجی های بیشتری را باز کنید'));
    }

    public function update(User $user, Survey $survey)
    {
        return $survey->user_id == $user->id;
    }

    public function addQuestion(User $user, Survey $survey)
    {
        if (! $user->subscribed()) {
            return Response::deny(__('شما اشتراک فعال ندارید'));
        }

        $planLimit = $user->subscription
            ->plan
            ->planOptions
            ->where('feature_code', 'question_count_per_survey')
            ->first()
            ->limit;

        if ($survey->questions()->count() < $planLimit) {
            return true;
        }

        return Response::deny(__('شما به حد مجاز سوالات رسیده اید! با ارتقای حساب خود قفل سوالات بیشتر را باز کنید'));
    }

    public function addResponse(?User $user, Survey $survey)
    {
        $planLimit = $survey->user->subscription
            ->plan
            ->planOptions
            ->where('feature_code', 'question_count_per_survey')
            ->first()
            ->limit;

        if ($survey->responses_count < $planLimit) {
            return true;
        }

        return false;
    }
}
