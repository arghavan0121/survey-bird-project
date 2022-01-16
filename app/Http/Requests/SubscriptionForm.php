<?php

namespace App\Http\Requests;

use Auth;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Hekmatinasser\Verta\Verta;
class SubscriptionForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $user = Auth::user();

        $gregorianDate= Verta::parse(Request::all()['starts_at'])->formatGregorian('m/d/Y');
        $starts_at = Carbon::parse($gregorianDate);

        dd(Request::all());

        if ('PUT' == Request::method()) {
            return [
                'plan_id' => ['required', 'string'],
                'starts_at' => ['nullable', 'date', 'after:yesterday'],
                'ends_at' => ['nullable', 'date', 'after:starts_at'],
            ];
        }

        if ('POST' == Request::method()) {
            return [
                'plan_id' => ['required', 'string', 'exists:plans,id'],
                'starts_at' => ['required', 'date', 'after:yesterday'],
                'ends_at' => ['required', 'date', 'after:starts_at'],
                'user_id' => ['required', 'exists:users,id']
            ];
        }
    }
}
