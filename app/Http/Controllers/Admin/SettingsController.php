<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Jackiedo\DotenvEditor\Facades\DotenvEditor;

class SettingsController extends Controller
{
    public function index()
    {
        $settings = [
            [
                'title' => __('تنظیمات حساب کاربری'),
                'description' => 'ایمیل، نام، رمز عبور و غیره خود را به روز کنید.',
                'route' => route('admin.profile.edit'),
            ],

            [
                'title' => __('عمومی'),
                'description' => 'نام برنامه، URL و غیره را به روز کنید.',
                'route' => route('admin.settings.edit', 'general'),
            ],

            [
                'title' => __('ایمیل '),
                'description' => 'تنظیمات SMTP ایمیل را به روز کنید.',
                'route' => route('admin.settings.edit', 'mail'),
            ],

            [
                'title' => __('زبان ها'),
                'description' => 'ایجاد، به روز رسانی، حذف زبان های برنامه.',
                'route' => route('admin.language.index'),
            ],

            [
                'title' => __('بومی سازی'),
                'description' => 'محلی برنامه را به روز کنید.',
                'route' => route('admin.settings.edit', 'localization'),
            ],

            [
                'title' => __('دستورات سازنده'),
                'description' => '.دستورات Artisan را اجرا کنید',
                'route' => route('admin.commands.index'),
            ],

            [
                'title' => __('ترجمه زبان'),
                'description' => 'زبان برنامه را ترجمه کنید.',
                'route' => '/admin/translations',
            ],
        ];

        return view('admin.settings.index', compact('settings'));
    }

    public function edit($sectionId)
    {
        $section = config('app_settings.sections')[$sectionId];
        return view('admin.settings.edit', [
            'section' => $section,
            'sectionId' => $sectionId,
            'settings' => $this->getKeysWithValues($section),
        ]);
    }

    public function update($sectionId, Request $request)
    {
        $section = config('app_settings.sections')[$sectionId];

        $settings = $this->getKeysWithValues($section);

        $inputs = $request->only(array_keys($settings));

        foreach ($inputs as $key => $value) {
            if ('env' == $this->getKeyType($section, $key)) {
                DotenvEditor::setKey($key, $value);
            } else {
                settings()->set($key, $value);
            }
        }

        DotenvEditor::save();

        return redirect()->back();
    }

    private function getKeysWithValues($section)
    {
        foreach ($section['inputs'] as $input) {
            if ('env' == $input['storage']) {
                $settings[$input['key']] = DotenvEditor::keyExists($input['key']) ? DotenvEditor::getValue($input['key']) : '';
            }

            if ('database' == $input['storage']) {

                $settings[$input['key']] = settings()->get($input['key']);
            }
        }

        return $settings;
    }

    private function getKeyType($section, $key)
    {
        foreach ($section['inputs'] as $input) {
            if ($key == $input['key']) {
                return $input['storage'];
            }
        }
    }
}
