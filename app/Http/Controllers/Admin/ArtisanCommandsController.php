<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class ArtisanCommandsController extends Controller
{
    public function index()
    {
        $commands = [
            [
                'title' => __('کش برنامه را شستشو دهید'),
                'command' => 'cache:clear',
            ],

            [
                'title' => __('پیوندهای نمادین پیکربندی شده برای برنامه را ایجاد کنید'),
                'command' => 'storage:link',
            ],

            [
                'title' => __('کش تنظیمات را حذف کنید'),
                'command' => 'config:clear',
            ],

            [
                'title' => __('فایل کش مسیر را حذف کنید'),
                'command' => 'route:clear',
            ],

            [
                'title' => __('پایگاه داده را عوض کنید'),
                'command' => 'migrate',
            ],
        ];

        return view('admin.commands.index', compact('commands'));
    }

    public function execute(Request $request)
    {
        $command = $request->input('command');

        Artisan::call($command);

        flash(__('دستور - php artisan را اجرا کرد').$command);

        return redirect()->back();
    }
}
