<?php

namespace App\Http\Controllers;

use App\juego;
use App\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Session;
use Route;
use Auth;

class JuegoController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $juego = Juego::first()
             ->take(8)
             ->get();
        return view('welcome', compact('juego'));
    }

    public function indexPC() {
        $juego = Juego::all();
        return view('viewGames', compact('juego'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $juego = juego::all();
        return view('viewGames', compact('juego'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $Juego = new \App\Juego;
        $Juego->create($request->all());


        return redirect('Juego');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        /*
          $juego=juego::find($id);
          return view('viewBuyGames' ,compact('juego'));
         */

        $juego = juego::where('id', $id)->first();
        return view('viewBuyGames', ['juego' => $juego]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

    public function addToCart(Request $request, $id) {
        $juego = Juego::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($juego, $juego->id);
        $request->session()->put('cart', $cart);
        return redirect()->route('cart.show');
    }

    public function getCart() {
        if (!Session::has('cart')) {
            return view('viewCart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        return view('viewCart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function deleteGameCart(Request $request, $id) {

        $oldCart = Session::get('cart');
        $juego = Juego::find($id);
        if ($oldCart->items != null) {
            $juegosPrecio = $juego->Precio * $oldCart->items[$id]['qty'];
            $cantidad = $oldCart->items[$id]['qty'];
            $oldCart->totalPrice = $oldCart->totalPrice - $juegosPrecio;
            $oldCart->totalQty = $oldCart->totalQty - $cantidad;
        }
        if ($oldCart->totalPrice < 0) {
            $oldCart->totalPrice = null;
        }
        unset($oldCart->items[$id]);
        $cart = new Cart($oldCart);

        return view('viewCart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function PayCart() {
        if (!Auth::user('trader')) {
            Session::flash('Access_Denied', 'Debe ser usuario para poder obtener juegos :(.');
           return redirect()->route('register');
   
        }
          $oldCart = Session::get('cart');
          $cart = new Cart($oldCart);

          Session::flash('flash_message', 'Mensaje de prueba');
          return view('PayCart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
         
    }
    

}
