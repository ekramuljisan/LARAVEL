<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DemoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    //Request Header
    //Request Body
    //Request Parameter
    //Request Cookie

    //Middleware
    //Controller

    //Response Header
    //Response Body
    //Response Cookie
    public function handle(Request $request, Closure $next): Response
    {
//        $email = $request->header('email');
//        if($email === "roxenjisan@gmail.com"){
//            return $next($request);
//        }else{
//            //return redirect('/welcome');
//            return response()->json('Unauthorized', 401);
//        }

        //Manupulate request header
//        $request->headers->remove('email');
//        return $next($request);


    }
}

