<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        // Lấy 8 sản phẩm có giá cao nhất
        $highestPriceBooks = Book::orderBy('price', 'desc')->take(8)->get();

        // Lấy 8 sản phẩm có giá thấp nhất
        $lowestPriceBooks = Book::orderBy('price', 'asc')->take(8)->get();

        // Lấy tất cả các danh mục
        $categories = Category::all();

        return view('home', compact('highestPriceBooks', 'lowestPriceBooks', 'categories'));
    }

    public function show($id)
    {
        // Lấy chi tiết sách
        $book = Book::findOrFail($id);
        return view('book.show', compact('book'));
    }

    public function categoryBooks($id)
    {
        // Lấy sách theo loại
        $category = Category::findOrFail($id);
        $books = $category->books;
        return view('category.books', compact('category', 'books'));
    }
}
