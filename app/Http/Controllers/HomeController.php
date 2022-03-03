<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller {

    public function _construct(){
        $this->middleware('auth');
    }
    public function index(){
        return redirect()->to('/');
    }
    public function userProfile(){
        return.view('usermanagment.user')
    }
}