<?php

namespace App\Http\Controllers\Core;

use App\Http\Controllers\Controller;
use App\Models\Blog\Blog;
use App\Models\Blog\BlogCategory;
use App\Models\Blog\BlogComment;
use App\Models\Client\Client;
use App\Models\Content\Slider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class MainController extends Controller{

    public function __construct(){
        record_visitor();
    }

    public function index(){
        return view('main.home.index');
    }
    public function underMaintenance(){
        return view('errors.maintenance');
    }
    public function event(){
        return view('main.event.index');
    }
    public function loginuser(){
        return view('main.loginuser.index');
    }
    public function registeruser(){
        return view('main.loginuser.register');
    }
    public function contact(){
        return view('main.contact.index');
    }
    public function forgetpassword(){
        return view('main.loginuser.forgotpassword');
    }

}
