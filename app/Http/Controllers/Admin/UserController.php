<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function add()
    {
        return 'add';
    }
    public function index()
    {
        return 'index';
    }
    public function edit()
    {
        return 'edit';
    }
    public function del()
    {
        return 'del';
    }
}
