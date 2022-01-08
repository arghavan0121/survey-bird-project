<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Extension;
use App\Services\ExtensionService;
use Illuminate\Http\Request;

class ExtensionController extends Controller
{
    public function __construct(ExtensionService $extensionService)
    {
        $this->extensionService = $extensionService;
    }

    public function index()
    {
        return view('admin.extension.index', [
            'extensions' => Extension::all(),
        ]);
    }

    public function create()
    {
        return view('admin.extension.create', [
            'extensions' => $this->extensionService->allExtensions(),
            'envatoPurchaseCode' => setting()->get('envato_purchase_code'),
            'installedExtensions' => Extension::all(),
        ]);
    }

    public function updateLicense(Request $request)
    {
        $request->validate([
            'envato_purchase_code' => 'required',
        ]);

        setting()->set('envato_purchase_code', $request->input('envato_purchase_code'));

        flash(__('تغییرات با موفقیت اضافه شد.'), 'success');

        return redirect()->back();
    }

    public function download(Request $request)
    {
        if (is_null(setting()->get('envato_purchase_code'))) {
            flash(__('لطفا کد خرید خود را در کادر زیر وارد کنید.'), 'error');

            return redirect()->route('admin.extensions.create');
        }

        $request->validate([
            'extension_name' => 'required',
        ]);

        $this->extensionService->install($request->input('extension_name'));

        return redirect()->route('admin.extensions.create');
    }
}
