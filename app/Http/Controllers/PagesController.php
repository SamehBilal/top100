<?php

namespace App\Http\Controllers;

use App\apps;
use App\books;
use App\cafes;
use App\drinks;
use App\mobiles;
use App\music;
use App\places;
use App\restaurants;
use App\series;
use App\movies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;


class PagesController extends Controller
{
    public function index(){
        return view('index');
    }
    public function categories(){
        return view('categories');
    }
    public function aboutUs(){
        return view('about');
    }
    public function howItWorks(){
        return view('how');
    }
    public function signUp(){
        return view('auth/register');
    }
    public function myLists(){
        return view('lists');
    }
    public function adminPanel(){
        return view('admin');
    }

    public function mobiles(){
        $mobiles = DB::table('mobiles')->orderBy('average', 'desc')->get();
            return view('categories/mobiles', compact('mobiles'));
        }

    public function books(){
        $books = DB::table('books')->orderBy('average', 'desc')->get();
        return view('categories/books', compact('books'));
        }

    public function series(){
        $series = DB::table('series')->orderBy('average', 'desc')->get();
            return view::make('categories/series', compact('series'));
        }

    public function movies(){
      $movies = DB::table('movies')->orderBy('average', 'desc')->get();
        return view('categories.movies', compact('movies'));
        }

    public function cafés(){
        $cafes = DB::table('cafes')->orderBy('average', 'desc')->get();
            return view::make('categories/cafes', compact('cafes'));
        }

    public function drinks(){
        $drinks = DB::table('drinks')->orderBy('average', 'desc')->get();
            return view::make('categories/drinks', compact('drinks'));
        }

    public function apps(){
        $apps = DB::table('apps')->orderBy('average', 'desc')->get();
        return view('categories/apps', compact('apps'));
        }

    public function places(){
        $places = DB::table('places')->orderBy('average', 'desc')->get();;
            return view::make('categories.places', compact('places'));
        }

    public function restaurants(){
$restaurants = DB::table('restaurants')->orderBy('average', 'desc')->get();
            return view::make('categories/restaurants', compact('restaurants'));
        }

    public function music(){
$music = DB::table('music')->orderBy('average', 'desc')->get();
            return view::make('categories/music' , compact('music'));
        }
    protected function storemovies(){
        movies::create([
            'name' => request('name'),
            'description' => request('description'),
            'position' => request('position'),
            'rate' => request('rate'),
            'numofrates' => request('numofrates'),
            'average' => request('average'),
            'image_path' => request('image_path'),
        ]);
        return redirect('/admin-panel');
    }
    protected function storemusic(){
        music::create([
            'name' => request('name'),
            'description' => request('description'),
            'position' => request('position'),
            'rate' => request('rate'),
            'numofrates' => request('numofrates'),
            'average' => request('average'),
            'image_path' => request('image_path')
        ]);
        return redirect('/admin-panel');
    }
    protected function storeseries(){
        series::create([
            'name' => request('name'),
            'description' => request('description'),
            'position' => request('position'),
            'rate' => request('rate'),
            'numofrates' => request('numofrates'),
            'average' => request('average'),
            'image_path' => request('image_path')
        ]);
        return redirect('/admin-panel');
    }
    protected function storebooks(){
        books::create([
            'name' => request('name'),
            'description' => request('description'),
            'position' => request('position'),
            'rate' => request('rate'),
            'numofrates' => request('numofrates'),
            'average' => request('average'),
            'image_path' => request('image_path')
        ]);
        return redirect('/admin-panel');
    }
    protected function storeplaces(){
        places::create([
            'name' => request('name'),
            'description' => request('description'),
            'position' => request('position'),
            'rate' => request('rate'),
            'numofrates' => request('numofrates'),
            'average' => request('average'),
        ]);
        return redirect('/admin-panel');
    }
    protected function storeapps(){
        apps::create([
            'name' => request('name'),
            'description' => request('description'),
            'position' => request('position'),
            'rate' => request('rate'),
            'numofrates' => request('numofrates'),
            'average' => request('average'),
        ]);
        return redirect('/admin-panel');
    }
    protected function storemobiles(){
        mobiles::create([
            'name' => request('name'),
            'description' => request('description'),
            'position' => request('position'),
            'rate' => request('rate'),
            'numofrates' => request('numofrates'),
            'average' => request('average'),
        ]);
        return redirect('/admin-panel');
    }

    protected function storerestaurants(){
        restaurants::create([
            'name' => request('name'),
            'description' => request('description'),
            'position' => request('position'),
            'rate' => request('rate'),
            'numofrates' => request('numofrates'),
            'average' => request('average'),
        ]);
        return redirect('/admin-panel');
    }
    protected function storecafes(){
        cafes::create([
            'name' => request('name'),
            'description' => request('description'),
            'position' => request('position'),
            'rate' => request('rate'),
            'numofrates' => request('numofrates'),
            'average' => request('average'),
        ]);
        return redirect('/admin-panel');
    }
    protected function storedrinks(){
        drinks::create([
            'name' => request('name'),
            'description' => request('description'),
            'position' => request('position'),
            'rate' => request('rate'),
            'numofrates' => request('numofrates'),
            'average' => request('average'),
        ]);
        return redirect('/admin-panel');
    }
    public function editmovies($id ){
       //$movies = movies::find($id);


        /*$movies->rate = request('rate');
        $movies->numofrates = request('numofrates');
        $movies->save();*/
     /*   return View::make('categories.movies')
            ->with('movies', movies::find($id));*/
      //  return redirect('/categories/movies');
        return $id;
    }
   /* public function updatemovies(){
        $position = Input::get('position');
        movies::update($position, array(
           'rate'=>Input::get('rate'),
            'numofrates' =>Input::get('numofrates') ,
        ));
        return redirect('/categories/movies');
    }*/
    public function editmobiles($id){

        return $id;
    }
    public function updatemobiles(Request $request,$id){
        $mobiles = mobiles::find($id);
        $mobiles -> rate = $mobiles->rate + $request->rate;
        $mobiles -> numofrates = $mobiles->numofrates + $request->numofrates;
        $mobiles -> average = $mobiles->rate / $mobiles->numofrates;
        $mobiles->save();
        return redirect('/categories/mobiles');
    }
    public function updatemovies(Request $request,$id){
        $movies = movies::find($id);
        $movies -> rate = $movies->rate + $request->rate;
        $movies -> numofrates = $movies->numofrates + $request->numofrates;
        $movies -> average = $movies->rate / $movies->numofrates;
        $movies->save();
        return redirect('/categories/movies');
    }
}
