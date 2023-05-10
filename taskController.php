<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;

use App\Models\taskModel;

use App\Models\SignupModel;

use App\Exports\UsersExport;
use App\Models\AdminModel;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Support\Facades\Hash;

use Session;


class taskController extends Controller
{
    public function login()
    {
        return view('Login');
    }

    public function login1(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'Password' => 'required|min:5|max:10 '
        ]);
        $taskController = SignupModel::where('email', '=', $request->email)->first();
        if ($taskController) {
            if (Hash::check($request->Password, $taskController->Password)) {
                $request->Session()->put('loginId', $taskController->id);
                return redirect('index');
            }
        } else {
            return back()->with('failed', 'This email is not Registered ');
        }
    }

    public function signup()
    {
        return view('Signup');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:_signup',
            'Password' => 'required|min:5|max:10 '
        ]);
        $taskController = new SignupModel();
        $taskController->username = $request->username;
        $taskController->email = $request->email;
        $taskController->Password = Hash::make($request->Password);
        $res = $taskController->save();
        if ($res) {
            return back()->with('success', 'You have Registered Successfully');
        } else {
            return back()->with('failed', 'Somthing wrong');
        }
    }


    public function index()
    {
        $record = taskModel::all();
        return view('layout.header') . view('index', compact('record')) . view('layout.footer');
    }

    public function uploadimage()
    {
        return view('layout.header') . view('images') . view('layout.footer');
    }

    public function show(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:6000|mimes:png,jpg',
        ]);
        $file = $request->file('image');
        $extention = $file->getClientOriginalExtension();
        $newFile = time() . '.' . $extention;
        $file->move('upload/gallery', $newFile);

        $f = new taskModel();
        $f->name = $newFile;
        $f->path = 'upload/gallery/' . $newFile;
        $f->save();
        if ($f) {
            return back()->with('message', 'Image Uploaded');
        } else {
            return back()->with('msg', 'Image Not Uploaded');
        }
    }

    public function view()
    {
        $record = taskModel::all();
        return view('layout.header') . view('allrecords', compact('record')) . view('layout.footer');
    }

    public function dashboard()
    {
        $record = taskModel::all();
        return view('dashboard', compact('record'));
    }

    public function tables()
    {
        $record1 = SignupModel::all();
        return view('tables', compact('record1'));
    }
    public function profile()
    {
        return view('profile');
    }

    public function deleteUser($id)
    {
        SignupModel::find($id)->delete();
        return redirect()->back();
    }

    public function deleteUserimage($id)
    {
        taskModel::find($id)->delete();
        return redirect()->back();
    }

    public function Admin()
    {
        return view('Admin');
    }
    public function Admin1(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'Password' => 'required'
        ]);
        $taskController = AdminModel::where('email', '=', $request->email)->first();
        if ($taskController) {
            if (Hash::check($request->Password, $taskController->Password)) {
                $request->session()->put('loginId', $taskController->id);
                return redirect('dashboard');
            }
        } else {
            return back()->with('fails', 'this email is not Registered ');
        }
    }

    public function export()
    {
        return Excel::download(new UsersExport,'_singup.xlsx');
    }
}
