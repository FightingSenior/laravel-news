<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function index()
    {
        $topnewslist = News::latest()->whereHas('category')->where('status', 1)->take(5)->get();
        
         $newscategory = News::latest()->whereHas('category')->where('status', 1)->take(4)->get();
        
        return view(
            'frontend.index',
            compact(
                'topnewslist',
                'newscategory'
            )
        );
    }


    public function pageCategory($slug)
    {
        $category           = Category::where('slug', $slug)->first();
        $newscategorylist   = $category->newslist()->where('status', 1)->get();

        return view('frontend.pages.category', compact('category', 'newscategorylist'));
    }

    public function pageNews($slug)
    {
        $newssingle = News::with('category')->where('slug', $slug)->first();

        $newssessionkey = 'news-' . $newssingle->id;
        if (!session()->has($newssessionkey)) {
            $newssingle->increment('view_count');
            session()->put($newssessionkey, 1);
        }

        return view('frontend.pages.single', compact('newssingle'));
    }

    public function pageSearch()
    {
        $search = request()->input('search');

        $newssearch = News::with('category')->where('title', 'like', '%' . $search . '%')->whereHas('category')->where('status', 1)->get();

        return view('frontend.pages.search', compact('newssearch'));
    }

    public function pageArchive()
    {
        $newsarchives = Category::with('newslist')->whereHas('newslist')->get();

        return view('frontend.pages.index', compact('newsarchives'));
    }
}
