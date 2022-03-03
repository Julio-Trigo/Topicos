<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller {

    public function create() {

        return view('auth.login');
    }

    public function userProfile(){
        return view('usermanagment.user_profile');
    }

    public function editar(){

        return view('usermanagment.edit_profile');

    }

    public function update(){
        
        $user = User::find();

        $user->save();

        return redirect()->to('/');
    }
}