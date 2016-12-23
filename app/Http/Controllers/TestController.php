<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Lxu\Alipay;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class TestController extends Controller
{
    //
    public function index(){

        //原生sql
  /*      $data=DB::select('select * from desktop_users where user_id=?',[1]);
        print_r($data);die();*/

       //查询构建器
        /*$user = DB::table('desktop_users')->where('user_id', '1')->first();
        var_dump($user);die();*/
        $item=DB::table('sysitem_item')->where('item_id','<','100')->simplePaginate(5);
        var_dump($item);die();

      //  return view('test/index',$data);


    }
        public  function redis(){
            /*$redis = Redis::connection();
            var_dump($redis);*/
            $b=Redis::set('name', 'Taylor');
            $a=Redis::get('name');
            dd($b);
        }
}
