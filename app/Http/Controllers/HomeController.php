<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('profile');
    }
  

    public function indexrepassword()
    {
        return view('repassword');
    }

    public function update(Request $request)
    {
        $user = User::find(auth()->user()->id);
        $filename = $user->image;
        if ($request->hasFile('image')) {
            if ($filename) {
                File::delete(public_path() . '/img/' . $filename);
            }
            $fileName = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $file = $request->file('image');
            $destinationPath = public_path() . '/img/';
            $file->move($destinationPath, $fileName);
            $new = $fileName;
        } else {

            $new = $user->image;
        };
        user::updateOrCreate(
            [
                'id' => auth()->user()->id,
            ],
            [
                'name' => $request->name,
                'image' => $new,
                'sex' => $request->sex,
                'address' => $request->address,
                'fname' => $request->fname,
                'lname' => $request->lname,
                'idcard' => $request->idcard,
                // 'password' => Hash::make($request['password'])
            ]
        );

        return redirect("/profile");
    }

    public function repassword(Request $request)
    {

        user::updateOrCreate(
            [
                'id' => auth()->user()->id,
            ],
            [

                'password' => Hash::make($request['password'])
            ]
        );

        return redirect("/profile");
    }


}
