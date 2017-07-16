<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
class DemoController extends Controller
{
    public function demo()
    {
        $data = Input::all();
        echo '<br>';
        var_dump($data);
        $data = Input::get('name');
        echo '<br>';
        var_dump($data);
        $data = Input::only('name','age');
        echo '<br>';
        var_dump($data);
        $data = Input::except('name');
        echo '<br>';
        var_dump($data);
    }
}
