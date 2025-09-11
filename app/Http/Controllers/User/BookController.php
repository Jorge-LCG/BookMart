<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function index()
    {
        $purchasedItems = OrderDetail::whereHas('order', function ($query) {
            $query->where('user_id', Auth::id())
                ->where('status', 'paid');
        })->with(['book', 'order'])->get();

        return view('book.book', compact('purchasedItems'));
    }

    public function show(Book $book)
    {
        $hasPurchased = OrderDetail::whereHas('order', function ($query) {
            $query->where('user_id', Auth::id())
                ->where('status', 'paid');
        })->where('book_id', $book->id)->exists();

        if (!$hasPurchased) {
            abort(403, 'No tienes acceso a este libro');
        }

        return view('book.reader', compact('book'));
    }
}
