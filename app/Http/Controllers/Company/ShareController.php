<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Survey;

class ShareController extends Controller
{
    public function show(Survey $survey)
    {
        return view('company.survey.share', compact('survey'));
    }
}
