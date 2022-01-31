<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }
    public function cart()
    {
        return view('cart');
    }
    public function addToCart($id)
    {
        $product = Product::find($id);
        if (!$product) {
            abort(404);
        }
        $cart = session()->get('cart');
        if (!$cart) {
            $cart = [
                $id => [
                    "name" => $product->name,
                    "quantity" => 1,
                    "price" => $product->price,
                    "photo" => $product->photo
                ]
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product adaugat cu succes in cos!');
        }
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product adaugat cu succes in cos!');
        }
        $cart[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "photo" => $product->photo
        ];
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product adaugat cu succes in cos!');
    }
    public function update(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cos modificat cu succes');
        }
    }
    public function remove(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product sters cu succes!');
        }
    }


    public function indexAdmin(Request $request)
    {
        $products = Product::orderBy('name','ASC')->paginate(5);
        $value=($request->input('page',1)-1)*5;
        return view('products.list',compact('products'))->with('i',$value);
    }
    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show',compact('product'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [ 'name' => 'required', 'description' => 'required', 'photo' => 'required', 'price' => 'required' ]);

        // create new task
        Product::create($request->all());
        return redirect()->route('products.list')->with('success', 'Your product added successfully!');
    }
    public function updateAdmin(Request $request, $id)
    {
        $this->validate($request, [ 'name' => 'required', 'description' => 'required', 'photo' => 'required', 'price' => 'required' ]);

        Product::find($id)->update($request->all());
        return redirect()->route('products.list')->with('success','Product updated successfully');

    }
    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect()->route('products.list')->with('success','Product removed successfully');
    }
}
