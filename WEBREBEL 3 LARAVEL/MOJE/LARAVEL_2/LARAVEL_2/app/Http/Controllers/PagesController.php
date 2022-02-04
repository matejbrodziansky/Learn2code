<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\DB ;


class PagesController extends Controller
{

    public function __construct()
    {
        $paths = [];

        foreach (Route::getRoutes() as $route) {
            // dd($route->getPath());
            if ($route->getActionMethod()[0] !== 'GET') continue;

            // $path = $route->getPath();
            $path = $route->uri();

            $paths[$path] = $path === '/' ? 'Home' : ucfirst($path);

            // echo '<pre>';
            // print_r($route->getActionMethod());
            // echo '</pre>';
        }

        $paths = array_unique($paths);

        // echo '<pre>';
        // print_r($paths);
        // echo '</pre>';

        view()->share('nav_links', $paths);   // bude premenna navlinks 
    }

    public function index()
    {
        return view('pages.welcome')
            ->with('title', 'Kickass Website');
    }
    public function gallery()
    {


        $images = [
            'img/01.png', 'img/02.png', 'img/03.png',
            'img/04.png', 'img/05.png', 'img/06.png',
        ];

        return view('pages.gallery')
            ->with('title', 'Sweet Gallery')
            ->with('images', $images);
    }
    public function blog()
    {
        return view('pages.blog')
            ->with('title', 'Big Words');
    }
    public function contact()
    {
        return view('pages.contact')
            ->with('title', 'Send us an email');
    }


    public function store(Request $request)
    {
        //dd($request->all());

        $validator = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        DB::table('messages')
            ->insert( $request->except('_token') );

        return redirect()->back()
            ->with('message', 'thanks!');
    }


    
}
