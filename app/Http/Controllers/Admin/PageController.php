<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        $user = Auth::user();
        $post = Post::paginate(5);
        $category = Category::paginate(5);

        return view('admin.home', [
            'user' => $user,
            'post' => $post,
            'category' => $category,
        ]);
    }
}
