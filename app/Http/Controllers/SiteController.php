<?php

namespace App\Http\Controllers;

use App\Models\Produto;

use Illuminate\Http\Request;

class SiteController extends Controller
{
     public function index()
    {
        //return "index";
        //return dd($produtos);
        $produtos = Produto::paginate(3);

        return view('site/home', compact('produtos'));
    }

    public function details($slug){
        $produto = Produto::where('slug', $slug)->first();

        return view('site.details', compact('produto'));
    }
}
