<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TestRequest;

#load the model

use App\Post;

class TestController extends Controller
{
    public function get_mydata () {

    	//Test::select(); //this way to get data
    }

    public function dashboard ( $name = NULL ) {

    	echo "Hello from Dashboard<br>";
    	echo "your name is ".$name;
    	$data = [

    		['name' => 'arafat'],
    		['name' => 'Jarif'],
    		['name' => 'Saibal']
    	];

    	#dd($data);
    	# 1
    	#return view('main-test-data', compact('data'));

    	# 2
    	#return view('child', compact('data'));

    	#3
    	#return view('ex-extent', compact('data'));
    	
    	#4
    	#return view('ex-each', compact('data'));

    	#5
    	return view('ex-stack', compact('data'));
    }

    public function add_data() {

    	/*$post  =  new Post;

    	$post->name 	=  'My test post Name';
    	$post->save();

    	echo "Data save checking....";*/

    	#Or Mass assignment

    	# We receive input as 

    	# $input =	Input::all();

    	/**
    	 protected $fillable = [ all the field   that are allowed to mass assignment ]

    	 protected $guarded = []
    	 Meaning all fields are allowed to insert 

    	 or

		 protected $guarded = [ some field that are disallow to insert ]
	   
    	*/

    	/*

    	$post  =  new Post([

    		'name' => 'New recipe Inserted.'
    	]);

    	$post->save();

    	echo $post->id;
        
        */

    	# or we can save in this way 

    	/*$post->fill([

    		'name'  =>  'post name here'
    	]);*/

    	# or we can save in this way 

    	#$post->save();

    	/*$post = Post::create([
    		'id'   => 6,
    		'name' => 'my given name update'
    	]);

    	echo $post->id;
        */ 


    	#update example is here

        $post = Post::find(6);

        /*
        echo "<pre>";
        print_r($post->name);  
        echo "<pre>";

        $post->name = "updated Test";

        $post->save();

        echo $post->id;

         */

    }

    public function view_data() {

    	$post = Post::all(); //fetch all data

    	# $post = Post::find($id); //search by id

    	# $post->delete();

    	# new tbl a data save then delete

    	/*$trail =  new Trail([
        	
        	'name' => $post->name  
         ]);

    	$trail->save();

    	$post->delete();*/

    	# or another option for delete

    	# Post::destroy($id);


    	
    	#$post = Post::find($id); //search by id

    	dd($post);
    }

    public function form(){

    	session()->put('data', 'my session data is here');
    	return view('child');
    }

    public function formSubmit(TestRequest $request) {

    	/*$this->validate($request, [

    		'name' => 'alpha'
    	]);*/

    	# we add the above validation in TestRequest that's why function make TestRequest

    	echo "your submitted data with validation is: ".$request->name;

    	echo  session()->get('data');
    	echo  session()->forget('data');
    	echo  session()->get('data');


    }
}
