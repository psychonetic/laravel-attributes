<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        //create size attribute
         app('rinvex.attributes.attribute')->create([
                'slug' => 'size',
                'name' => 'Product Size',
                'type' => 'varchar',
                'entities' => ['App\Models\Article'],
          ]);

        //create article with size
        $art = Article::create();
        $art->size = "xl";
        $art->save();

        return Article::with(['size'])->get();
    }
}
