<?php

namespace App\Http\Controllers;

use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DemoController extends Controller
{
    public function DemoAction(Request $request){
        //Retrieving all rows
        //return DB::table('products')->get();

        //Retrieving single row
        //return DB::table('brands')->first();
        //return DB::table('products')->find(2);

        //Retrieving list of column values
        //return DB::table('brands')->pluck('brandName','id');

        //Aggregate functions
        //return DB::table('products')->count();
        //return DB::table('products')->max('price');
        //return DB::table('products')->min('price');
        //return DB::table('products')->avg('price');
        //return DB::table('products')->sum('price');

        //Select Clause
        //return DB::table('brands')->select('id','brandName','brandImg')->get();
        //return DB::table('products')->select('title')->distinct()->get();

        //Inner join
        //$products = DB::table('products')
            //->join('categories','products.category_id','=','categories.id')
            //->join('brands','products.brand_id','=','brands.id')
            //->get();
        //return $products;

        //Left join
        //$products = DB::table('products')
            //->leftjoin('categories','products.category_id','=','categories.id')
            //->leftjoin('brands','products.brand_id','=','brands.id')
            //->get();
        //return $products;

        //Right join
        //$products = DB::table('products')
            //->rightjoin('categories','products.category_id','=','categories.id')
            //->rightjoin('brands','products.brand_id','=','brands.id')
            //->get();
        //return $products;

        //Cross join
        //$result = DB::table('products')
            //->crossJoin('categories')
            //->get();
       // return $result;

        //Advance join clause
        //$result = DB::table('products')
            //->join('categories',function(JoinClause $join){
                   // $join->on('products.category_id','=','categories.id')
                        //->where('products.price','>',2000);
            //})->get();
        //return $result;

        //Unions
        //$query1 = DB::table('products')->where('price','>',2000);
        //$query2 = DB::table('products')->where('discount','=',1);
        //return $query1->union($query2)->get();

        //Basic Where clause
        //return DB::table('products')
            //->where('title','LIKE','%Shi%')
            //->get();

        //orWhere
        //return DB::table('products')
            //->where('price','>',2000)
           // ->orWhere('price','=',40)
            //->get();

        //whereNot
        //return DB::table('products')
            //->whereNot('price','=',2000)
            //->get();

        //whereBetween
        //return DB::table('products')
            //->whereBetween('price',[40,5000])
            //->get();

        //whereNotBetween
        //return DB::table('products')
            //->whereNotBetween('price',[40,5000])
            //->get();

        //whereIn
        //return DB::table('products')
            //->whereIn('price',[40,5000])
            //->get();

        //whereNotIn
        //return DB::table('products')
            //->whereNotIn('price',[40,5000])
            //->get();

        //whereNul
        //return DB::table('brands')
            //->whereNull('brandImg')
            //->get();

        //whereNotNull
        //return DB::table('brands')
            //->whereNotNull('brandName')
           // ->get();

        //whereDate
        //return DB::table('brands')
            //->whereDate('created_at','2024-08-30')
            //->get();

        //whereMonth
        //return DB::table('brands')
            //->whereMonth('created_at','08')
            //->get();

        //whereDay
        //return DB::table('brands')
            //->whereDay('created_at','19')
            //->get();

        //whereYear
        //return DB::table('brands')
            //->whereYear('created_at','2024')
            //->get();

        //whereTime
        //return DB::table('brands')
            //->whereTime('created_at','19:19:44')
            //->get();

        //whereColumn
        //return DB::table('brands')
            //->whereColumn('created_at','<','updated_at')
            //->get();


        //Ordering Grouping & Limiting
        //orderBy
        //return DB::table('brands')
            //->orderBy('brandName','desc')
            //->get();

        //inRandomOrder
        //return DB::table('brands')
            //->inRandomOrder()
            //->first();

        //latest
        //return DB::table('brands')
            //->latest()
            //->first();

        //oldest
        //return DB::table('brands')
            //->oldest()
            //->first();

        //groupBy
        //return DB::table('products')
        //->groupBy('price')
        //->get();

        //having
        //return DB::table('products')
        //->groupBy('price')
        //->having('price','>',2000)
        //->get();



        //skip & take
        //return DB::table('products')
            //->skip(2)
            //->take(2)
            //->get();

        //Insert query
        // $result = DB::table('brands')
        // ->insert([
        //     'brandName'=>'Demo Brand',
        //     'brandImg'=>'Demo Img'
        // ]);
        // return $result;

        // return DB::table('brands')
        // ->insert([
        //     'brandName'=>$request->input('brandName'),
        //     'brandImg'=>$request->input('brandImg')
        // ]);

        //Update query
        // return DB::table('brands')
        // ->where('id','=',$request->id)
        // ->update($request->input());

        // //Update or insert
        // return DB::table('brands')
        // ->updateOrInsert(
        //     ['brandName'=>$request->bName],
        //     $request->input()
        // );

        //Delete
        // DB::table('brands')
        // ->where('id','=',$request->id)
        // ->delete();

        //Increment or Decrement
        // return DB::table('products')
        // ->where('id',$request->id)
        // ->increment('price',10);
        // ->decrement('price');
    }
}
