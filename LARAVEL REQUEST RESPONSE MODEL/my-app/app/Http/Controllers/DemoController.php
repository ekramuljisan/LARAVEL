<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;




class DemoController extends Controller
{

    function DemoAction(Request $request):string|array|bool|null|object|int{
        //Request Model
    //Data catch from request paramater
//        $name = $request->name;
//        $age = $request->age;
//        return "My name is {$name} & my age is {$age}";

        //Data catch from json body
        //$name = $request->input("name");
        //$age = $request->input("age");
        //$mobile = $request->input("phone.mobile");
        //return $request->input();
        //return "My name is {$name} & my age is {$age} & my mobile is {$mobile}";


        //Data catch from request header
//        $name = $request->header("name");
//        $age = $request->header("age");
//        return "My name is {$name} & my age is {$age}";

        //Working with request-header,json-body,request-params
//        $name = $request->name;
//        $age = $request->age;
//        $city = $request->input("city");
//        $postcode = $request->input("postcode");
//        $user_id = $request->header("user_id");
//        return "My name is {$name} & my age is {$age} & my city is {$city} & my postcode is {$postcode} & my user_id is {$user_id}";

        //Working with multipart form data
        //$photoFile = $request->file('img');
        // $fileSize = $request->filesize($photoFile);
        // $fileType = $request->filetype($photoFile);
        //$fileOriginalName = $photoFile->getClientOriginalName();
        //$fileTempName = $photoFile->getFilename();
        //$fileExtention = $photoFile->extension();

        //return array(
            // "fileSize" => $fileSize,
            // "fileType" => $fileType,
            //"fileOriginalName" => $fileOriginalName,
            //"fileTempName" => $fileTempName,
            //"fileExtention" => $fileExtention
        //);

        //File Uploads
        //$photoFile = $request->file('img');
        //$photoFile->storeAs('upload',$photoFile->getClientOriginalName());
        //$photoFile->move(public_path('upload'),$photoFile->getClientOriginalName());
        //return true;


        //Request ip address
        //return $request->ip();

        //Content Negotiation request it means frontend theka data text/html application/json specific akare phatate pari
        //return $request->getAcceptableContentTypes();

        //Request cookie
        //return $request->cookie();

        //Response Model
        //Response different data types
//        $myArray = [
//            array(
//                'A'=>"Tomato",
//                'B'=>"Tomato",
//                'C'=>"Tomato"
//            ),
//            array(
//                'D'=>"Tomato",
//                'E'=>"Tomato",
//                'F'=>"Tomato"
//            ),
//            array(
//                'G'=>"Tomato",
//                'H'=>"Tomato",
//                'I'=>"Tomato"
//            )
//
//        ];
//        return $myArray;

        //return response("Hello World",200)->header("content-type","application/json");

        //Json response
        //$statusCode = 200;
        return response()->json([
            "status"=>"Success",
            "message" => "User Registration Successful",
        ],200);
    }


    //Response redirect
    //function Action1(){
    //    return "Hello 1";
    //}

    //function Action2(){
    //    return redirect('/action1');
    //}

    //Binary file response
    function FileBinary(){
        $filePath = "upload/aspenfogsaferoomsprayscalyanwaxc.jpg";
        return response()->file($filePath);
    }

    //File download response
    function FileDownload(){
        $filePath = "upload/aspenfogsaferoomsprayscalyanwaxc.jpg";
        return response()->download($filePath);
    }

    //Generating response cookie
    function CookieGenerate(Request $request){
        $name = "token";
        $value = "This is my data";
        $minuites = 5;
        $path = "/";
        $domain = $request->ip();
        $secure = true;
        $httpOnly = true;
        return response()->json("Success")->cookie($name,$value,$minuites,$path,$domain,$secure,$httpOnly);

    }

    //Response header
    function ResponseHeader(){
        return response()->json("Success")->header('ke1','value1');
    }

    //Response view
    function ResponseView(){
        return view('page.welcome');
    }



}
