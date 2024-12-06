<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DemoController extends Controller
{
    function DemoAction(Request $request) {
        //laravel log
        $num1 = $request->num1;
        $num2 = $request->num2;
        $sum = $num1 + $num2;
        Log::debug($sum);
        return $sum;
    }

    //Laravel Session
    function SessionPut(Request $request) {
        $email = $request->email;
        $request->session()->put('userEmail', $email);
        return true;
    }
    function SessionPull(Request $request){
        //Data 1 bar ei pull kora jabe
        return $request->session()->pull('userEmail','Default Value');
    }
    function SessionGet(Request $request){
        //Data jotobar iccah get kora jabe
        return $request->session()->get('userEmail','Default Value');
    }
    function SessionForget(Request $request){
        $request->session()->forget('userEmail');
        return true;
    }
    function SessionFlush(Request $request){
        $request->session()->flush();
        return true;
    }
    function Hello(){
        return "My name is MD Ekramul Islam";
    }
    function WelcomePage(){
        return view('welcome');
    }

    function DemoAction1(){
        return "I am demo action 1";
    }
    function DemoAction2(){
        return "I am demo action 2";
    }
    function DemoAction3(){
        return "I am demo action 3";
    }
    function DemoAction4(){
        return "I am demo action 4";
    }

    function myHeader(Request $request){
        return $request->header();
    }

}
