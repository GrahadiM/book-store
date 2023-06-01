<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    protected $productModel;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->productModel = new Product();
    }

    public function index() {
        $data['categories'] = Product::all()->groupBy('category');
        return view('customer.index', $data);
    }

    public function category($category) {
        $data['categories'] = Product::where('category', $category)->get();
        return view('customer.category', $data);
    }

    public function allBook() {
        $data['books'] = Product::all();
        if ($data['books']->count() <= 0) {
            $json = $this->productModel->getBooksJson();
            foreach ($json as $key => $value) {
                $data['books'][] = $value;
            }
        }
        return view('customer.all-book', $data);
    }

    public function book($id) {
        $data['book'] = Product::find($id);
        if ($data['book'] == NULL) {
            $json = $this->productModel->getBooksJson();
            foreach ($json as $key => $value) {
                $data['book'] = $value;
            }
        }
        return view('customer.book', $data);
    }

    public function cart() {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        // generate a pin based on 2 * 7 digits + a random character
        $pin = mt_rand(1000000, 9999999) . mt_rand(1000000, 9999999);
        // shuffle the result
        $data['random_code'] = str_shuffle($pin);

        $data['books'] = Cart::with('book')->where('customer_id', Auth::user()->id)->get();
        $data['total'] = 0;
        foreach ($data['books'] as $value) {
            $data['total'] += $value['total_price'];
        }
        return view('customer.cart', $data);
    }

    public function cartPost(Request $request) {
        $data = Cart::where('id', $request->id)->where('customer_id', Auth::user()->id)->get();
        if ($data->count() <= 0 || empty($data)) {
            $data = new Cart;
        }
        $data->customer_id  = Auth::user()->id;
        $data->book_id      = $request->book_id;
        $data->qty          = $request->qty;
        $data->total_price  = $request->total_price;
        $data->save();

        return redirect()->route('frontend.cart');
    }

    public function cartDelete(Request $request) {
        $data = Cart::where('id', $request->id)->where('customer_id', Auth::user()->id)->first();
        if ($data->count() <= 0 || empty($data)) {
            return redirect()->route('frontend.cart');
        }
        $data->delete();

        return redirect()->route('frontend.cart');
    }

    public function checkout(Request $request) {
        $data['order'] = Order::where('customer_id', Auth::user()->id)->get();
        return view('customer.order', $data);
    }

    public function checkoutPost(Request $request) {
        $data = Order::where('code_order', $request->code_order)->where('customer_id', Auth::user()->id)->get();
        if ($data->count() <= 0 || empty($data)) {
            $data = new Order;
        }
        $data->code_order   = $request->code_order;
        $data->customer_id  = Auth::user()->id;
        $data->total_price  = $request->total_price;
        $data->save();

        $order = Order::where('code_order', $request->code_order)->where('customer_id', Auth::user()->id)->first();
        $carts = Cart::where('customer_id', Auth::user()->id)->get();
        foreach ($carts as $value) {
            $order_product = new OrderProduct();
            $order_product->order_id     = $order->id;
            $order_product->book_id      = $value->id;
            $order_product->qty          = $value->qty;
            $order_product->total_price  = $value->total_price;
            $order_product->save();

            $cart = Cart::find($value->id);
            $cart->delete();
        }
        return redirect()->route('frontend.cart');
    }

    public function checkoutBook($id) {
        $data['order'] = Order::find($id);
        $data['book'] = OrderProduct::with('book')->where('order_id', $id)->get();
        return view('customer.order-product', $data);
    }
}
