<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Survey;

class ResultController extends Controller
{
    public function index(Survey $survey)
    {
        $questions = $survey->questions()
            ->with('responses')
            ->get();

        $attendees = $survey->attendees;

        $attendees_count = $attendees->count();
        $total_completed = $attendees->where('is_finished', 1)->count();

        $responses = [];

        foreach ($questions as $question) {
            $result = [
                'type' => $question->type,
                'text' => $question->text,
                'total_responses' => $question->responses->count(),
                'responses' => [],
            ];

            foreach ($question->responses as $response) {
                $result['responses'][] = $response->response;
            }

            if (in_array($question->type, ['multiple-choices', 'yes-no', 'dropdown', 'rating', 'slider'])) {
                $result['responses_aggregate'] = $question->responses->groupBy('response')->toArray();
            }

            $responses[] = $result;
        }

        $completion_rate =  ( $attendees_count > 0 ) ? ($total_completed / $attendees_count * 100) : 0;

        return view('company.survey.result', [
            'survey' => $survey,
            'results' => $responses,
            'total_completed' => $total_completed,
            'completion_rate' => round($completion_rate, 2),
            'attendees_count' => $attendees_count
        ]);
    }
}
