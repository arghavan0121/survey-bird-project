<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserForm;
use App\Models\Language;
use App\User;
use Verta;
use Carbon\Carbon;

class UserController extends Controller
{
    public function index()
    {

        $users = User::role('company')->orderBy('created_at', 'desc')->get();
//        foreach ($users as $user )
//        {
//            $user->updated_at = new Verta($user->updated_at) ;
//        }
        return view('admin.user.index', compact('users'));
    }

    public function edit(User $user)
    {
        $languages = Language::all();

        return view('admin.user.edit', compact('user', 'languages'));
    }

    public function update(UserForm $request, User $user)
    {

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->language_id = $request->input('language_id');
        if (! empty($request->input('password'))) {
            $user->password = bcrypt($request->input('password'));
        }
//        $user->updated_at = Carbon::now();
        $user->update();
        flash(__('کاربر با موفقیت به روز شد.'), 'success');

        return redirect()->route('admin.users.index');
    }

    public function destroy(User $user)
    {
        $user->delete();

        flash(__('کاربر با موفقیت حذف شد.'), 'success');

        return redirect()->route('admin.users.index');
    }
}
