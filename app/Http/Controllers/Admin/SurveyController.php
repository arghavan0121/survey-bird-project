<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SurveyForm;
use App\Models\Survey;
use Verta;
class SurveyController extends Controller
{
    public function index()
    {
        $surveys = Survey::orderBy('created_at', 'desc')->get();
        foreach ($surveys as $survey){
            $survey->created_at = new Verta($survey->created_at) ;
        }


        return view('admin.survey.index', compact('surveys'));
    }

    public function edit(Survey $survey)
    {
        return view('admin.survey.edit', compact('survey'));
    }

    public function update(SurveyForm $request, Survey $survey)
    {
        $survey->update($request->validated());

        flash(__('نظرسنجی با موفقیت به روز شد.'), 'success');

        return redirect()->route('admin.surveys.index');
    }

    public function destroy(Survey $survey)
    {
        $survey->delete();

        flash(__('نظرسنجی با موفقیت حذف شد.'), 'success');

        return redirect()->route('admin.surveys.index');
    }
}
