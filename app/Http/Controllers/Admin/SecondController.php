<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SecondController extends Controller
{
// عند وضع المدلوير في كونستركت يطبق على جميع الميثود في الكونتروللير
    public function __construct(){

        $this -> middleware ('auth')-> except('showstring2'); //عند وضع except يتم استثناء الميثود المراد استثنائها
    }

    public function showstring0(){
        return 'static string0';
    }

    public function showstring1(){
        return 'static string1';
    }

    public function showstring2(){
        return 'static string2';
    }

    public function showstring3(){
        return 'static string3';
    }
}
