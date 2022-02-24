<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $user = new User();
        $user = User::get();
        return view('admin.user', compact('user'));
    }
    public function userdelete()
    {
    }
}
