<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index()
    {
        $cart = Session::get('cart', []);
        $total = 0;

        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        return view('cart.index', compact('cart', 'total'));
    }

    public function add(Request $request, Book $book)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1|max:5'
        ]);

        $cart = Session::get('cart', []);

        if (isset($cart[$book->id])) {
            $cart[$book->id]['quantity'] += $request->quantity;
        } else {
            $cart[$book->id] = [
                'id' => $book->id,
                'title' => $book->title,
                'author' => $book->author,
                'price' => $book->price,
                'image' => $book->image,
                'quantity' => $request->quantity
            ];
        }

        Session::put('cart', $cart);

        return redirect()->back()->with('success', 'Libro añadido al carrito');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1|max:5'
        ]);

        $cart = Session::get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $request->quantity;
            Session::put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Carrito actualizado');
    }

    public function remove($id)
    {
        $cart = Session::get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            Session::put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Libro eliminado del carrito');
    }

    public function checkout()
    {
        $cart = Session::get('cart', []);

        if (empty($cart)) {
            return redirect()->route('cart.index')->with('error', 'Tu carrito está vacío');
        }

        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        return view('cart.checkout', compact('cart', 'total'));
    }

    public function processCheckout(Request $request)
    {
        $request->validate([
            'payment_method' => 'required|in:yape,plin,bank_transfer',
            'voucher' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $cart = Session::get('cart', []);

        if (empty($cart)) {
            return redirect()->route('cart.index')->with('error', 'Tu carrito está vacío');
        }

        $order = Order::create([
            'user_id' => Auth::id(),
            'order_date' => now(),
            'status' => 'pending'
        ]);

        $total = 0;

        foreach ($cart as $item) {
            $subtotal = $item['price'] * $item['quantity'];
            $total += $subtotal;

            OrderDetail::create([
                'order_id' => $order->id,
                'book_id' => $item['id'],
                'quantity' => $item['quantity'],
                'subtotal' => $subtotal
            ]);
        }

        $voucherPath = $request->file('voucher')->store('vouchers', 'public');

        Payment::create([
            'order_id' => $order->id,
            'payment_method' => $request->payment_method,
            'amount' => $total,
            'payment_date' => now(),
            'voucher_image' => $voucherPath,
            'status' => 'pending'
        ]);

        Session::forget('cart');

        return redirect()->route('orders.show', $order->id)
            ->with('success', '¡Pedido realizado con éxito! Espera la confirmación de tu pago.');
    }
}
