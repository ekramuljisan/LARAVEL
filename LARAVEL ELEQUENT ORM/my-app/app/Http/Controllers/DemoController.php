<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\User;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Profile;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function DemoAction(Request $request){
        
        //Insert data into table useing query builder
        //return Brand::create($request->input());

        //Update data into table useing query builder
       //return Brand::where('id',$request->id)
        //->update($request->input());

        //UpdateorCreate data into table using query builder
        // return Brand::UpdateorCreate(
        //      ['brandName'=>$request->bName],
        //      $request->input(),
        // );

        //Delete data into table using query builder
        // return Brand::where('id',$request->id)
        // ->delete();

        //Increment or Decrement
        // return Product::where('id',$request->id)
        // ->decrement('price');

        //Retrieving All Rows
        // return Brand::get();
        // return Brand::first();
        //return Brand::find(2);

        //Retrieving all columns
        //return Brand::pluck('brandName','id');

        //Aggregate function
        //return Product::count();//numbers of row
        //return Product::sum('price');
        //return Product::avg('price');
        //return Product::max('price');
        //return Product::min('price');

        //Select Clause
        //return Product::select('id','title')->get();
        //return Product::select('title')->distinct()->get();

        //Where clause
        //return Product::where('title','NOT LIKE','%shi%')->get();
        //return Product::whereBetween('price',[1,2000])->get();

        //Ordering Grouping & Limiting
        //return Brand::orderBy('brandName','desc')->get();
        //return Brand::inRandomOrder('brandName')->first();
        //return Brand::oldest()->first();
        //return Product::groupBy('price')->get();
        // return Product::groupBy('price')
        // ->having('price','<',2000)
        // ->get();
        //return Product::skip(10)->take(1)->get();

        //Pagination
        //return Product::simplePaginate(2);
        // return Product::paginate(
        //     $perpage = 5,
        //     $columns = ['*'],
        //     $pageName = 'pageName',
        // );

        //Orm Relationship
        //one to one-> parent to child hasOne() inverse(child to parent) belongsTo()
        //one to many-> parent to child hasMany() inverse(child to parent) belongsTo()
        //many to many-> parent to child belongsToMany() inverse(child to parent) belongsToMany()

        //One to one
            //return User::with('Profile')->get();
            //return Profile::with('user')->get();

        //One to many
            //return User::with('post')->get();
            //return Post::with('user')->get();

        //Many to many
        //return Post::with('tag')->get();
        //return Tag::with('post')->get();
    }
}

