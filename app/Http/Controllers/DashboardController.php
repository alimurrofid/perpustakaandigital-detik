<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Models\Category;

class DashboardController extends Controller
{
    public function index()
    {
        $admin = User::where('role', '1')->count();
        $user = User::where('role', '0')->count();
        $book = Book::all()->count();
        $category = Category::all()->count();
        return view('dashboard.home', compact('admin', 'user', 'book', 'category'));
    }
}
