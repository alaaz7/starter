<?php

namespace App\Http\Controllers\Front;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class kkcontroller extends Controller
{
    public function showUserNames(){
        return 'Alaa alzoubi kkkkkkkk';
    }

    public function getIndex(){

       // return view('welcome')->with('data','alaa alzoubi'); passing data
      // return view('welcome')->with(['string' => 'alaa alzoubi', 'age'=> 27]); // passing more thane value
//another way with array
/*$data=[];
$data['id'] = 27;
$data['name']= 'alaa alzoubi';


       return view('welcome',$data); in blade.php call like this: <p>{{$name}} -- {{$id}}</p>*/
//another way with object
$obj = new \stdClass();
$obj -> name = 'alaa';
$obj -> id = 5;

$data=[];
return view('welcome',compact('data'));
    }

    public function getlanding(){

        return view('landing');
    }

    public function getabout(){

        return view('about');
    }
}
