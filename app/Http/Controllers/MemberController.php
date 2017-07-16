<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//链接数据库
use DB;
class MemberController extends Controller
{
    public function add()
    {
//        $res = DB::table('member')->insertGetId([
//           'name' => '松江',
//            'age' => 16,
//            'email' => '1@163.com'
//        ]);
//        var_dump($res);
        $res = DB::table('member')->insert([
           [
               'name' =>'zhangsan',
               'age' =>18,
               'email' => '2@163.com'
           ],
           [
           'name' =>'zhangsan',
            'age' =>18,
            'email' => '2@163.com'
        ],
        [
        'name' =>'zhangsan',
               'age' =>18,
               'email' => '2@163.com'
           ]
        ]);
        var_dump($res);
    }
    public function update()
    {
//        $res = DB::table('member')->where('id','1')->update(['name'=>'xiaoqian']);
        $res = DB::table('member')->where('id','1')->increment('age',5);
        var_dump($res);
    }
    public function index()
    {
//        $data = DB::table('member')->get();
////         var_dump($data);
//        foreach($data as $v){
//            echo $v->name.'----'.$v->age.'----'.$v->email.'<br>';
//        }
//        var_dump($data->items);
//        $data = DB::table('member')->where('id','<',3)->get();
//        dd($data);
//        $data = DB::table('member')->orderBy('age','desc')->get();
//        var_dump($data);
        $data = DB::table('member')->limit(2)->offset(2)->get();
        var_dump($data);
    }
    public function del()
    {
        $res = DB::table('member')->where('id','>',3)->delete();
        var_dump($res);
    }
    public function demo()
    {
        return view('demo',['name'=>'李白','age'=>23,'time'=>time()]);
    }

}
