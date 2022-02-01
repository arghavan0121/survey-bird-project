<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Survey;

class TemplateController extends Controller
{
    public function index()
    {
        $templates = Survey::template()->get();
//        dd(Survey::all());
        return view('company.templates.index', compact('templates'));
    }

    public function updateTemplate(Survey $survey)
    {

        $survey->update([
            'is_template' =>'1',
        ]);
        return redirect()->back();
    }
}
