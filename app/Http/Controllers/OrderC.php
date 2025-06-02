<?php

namespace App\Http\Controllers;

use App\Repository\Product\ProductRepo;
use App\Repository\Transaction\TransactionRepo;
use Illuminate\Http\Request;

class OrderC extends Controller
{
    public function __construct(
        protected ProductRepo $__repo_product,
        protected TransactionRepo $__repo_transaction
    ) {}

    public function index(Request $req)
    {
        $products = $this->__repo_product->index(request()->all());
        return view('pages.order.tampilO', compact('products'));
    }

    public function order(Request $req)
    {
        $order = $this->__repo_transaction->order(request()->all());
        return redirect()->back();
    }

    public function history(Request $req)
    {
        $order = $this->__repo_transaction->index(request()->all());
        $orders = $order->where("student_id", auth()->user()->userReference->reference_id)->get();
        return view("pages.order.history", compact("orders"));
    }
}
