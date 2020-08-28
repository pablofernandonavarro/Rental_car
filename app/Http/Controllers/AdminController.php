<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Additional;
use App\OwnerData;
use App\Brand;
use App\Pattern;
use App\Car;
use App\Faq;
use App\Requirement;
use App\Quotation;

class AdminController extends Controller
{
    public function index()
    {
        return redirect('/profile');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show()
    {
        return view('admin.profile', [
            'quotations' => Quotation::orderby('created_at', 'ASC')->paginate(5),
            'ownerdatas' => OwnerData::first(),
        ]);
    }

    public function edit($id)
    {
        //
    }

    public function ownerupdate(Request $request)
    {
        //
    }

    public function passwordupdate(Request $request)
    {
        $user = User::first();
        if (Hash::check($request->last_password, $user->password)) {
            if ($request->new_password === $request->password_verify) {
                $user->password = $request->new_password;
                $user->update();
            }else{
                return redirect()->back()->with('message', 'Las contraseñas no coinciden');
            }
        }else {
            return redirect()->back()->with('message', 'Las credenciales no son correctas');
        }
        return redirect()->back()->with('message', 'Se modificó la contraseña correctamente');
    }

    public function destroy($id)
    {
        //
    }
}
