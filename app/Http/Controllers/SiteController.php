<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

/**
 * Class SiteController
 * @package App\Http\Controllers
 */
class SiteController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showHome() {
        $posts = Post::with('author')->get();
        return view('pages.home', compact('posts'));
    }

    /**
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showPost($slug) {
        $post = Post::whereSlug($slug)->with('author')->first();
        return view('pages.post', compact('post'));
    }
}
