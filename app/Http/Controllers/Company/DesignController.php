<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Survey;
use Illuminate\Http\Request;

class DesignController extends Controller
{
    public function edit(Survey $survey)
    {
        return view('company.survey.design', compact('survey'));
    }

    public function update(Survey $survey, Request $request)
    {
        $validatedData = $request->validate([
            'question_color' => ['required'],
            'answer_color' => ['required'],
            'button_color' => ['required'],
            'button_text_color' => ['required'],
            'background_color' => ['required'],
            'background_image' => ['nullable'],
            ]);


        $image = '';
        if ($request->hasFile('background_image')) {

            $destination = storage_path(). config('cms-setting.url_subscription');
            if (!is_dir($destination)) {
                mkdir($destination, 0777, true);
            }
            $destination = $destination . '/';
            $file = $request->file('background_image');
            $filename = time() . $file->getClientOriginalName();
            $file->move($destination, $filename);
            $image = 'bg_image/' . $filename;
        } else {
            $image = null;
        }

        $survey->update([
            'question_color' => $request->get('question_color'),
            'answer_color' => $request->get('answer_color'),
            'button_color' => $request->get('button_color'),
            'button_text_color' => $request->get('button_text_color'),
            'background_color' => $request->get('background_color'),
            'background_image' => $image ?? $survey->background_image,

        ]);


//        $survey->forceFill($validatedData)->save();

        flash(__('طرح موردنظر شما با موفقیت به روز شد.'), 'success');

        return redirect()->back();

    }


//'background_image' => ['image|mimes:jpg,jpeg,png,svg,gif|max:2048'],
//],[
//'background_image' => 'فایل باید از نوع تصویر باشد'


}
