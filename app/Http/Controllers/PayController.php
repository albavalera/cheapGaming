<?php

namespace App\Http\Controllers;

use App\juego;
use Mail;
use App\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Session;
use Route;
use Auth;
use User;

class PayController extends Controller {

    public function Pay() {
        if (Auth::user('trader')) {

            $user = Auth::user()->name;
            $email = Auth::user()->email;

            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);
            $totalPrice = $cart->totalPrice;
            if ($email) {

             $date= date("d")."/".date("m")."/".date("Y")." " .date("H").":".date("i");
            
                $data = ['orderUser' => $user, 'orderEmail' => $email, 'totalPrice' => $totalPrice, 'products' => $cart->items,"date"=>$date];
                    
                Mail::send('mails.demo', $data, function ($message) use ($user) {
                    $message->from('cheapGaming@gmail.com', '¡Gracias por comprar en CheapGaming!');
                    $message->subject('Factura del Pedido Nº');
                    $message->to('alejandro.merinoont@gmail.com');
                });
                Session::flash('flash_message', 'Se le ha enviado un email de la factura a su correo');
            }
        }
        return view('PayCart', ['orderUser' => $user, 'orderEmail' => $email, 'totalPrice' => $totalPrice, 'products' => null]);
    }

}
