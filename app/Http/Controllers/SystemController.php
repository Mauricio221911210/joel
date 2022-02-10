<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Pedido;
use App\Models\Product;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class SystemController extends Controller
{
    public function index(){

        $users = User::all();
        $admins = Admin::all();
        $roles = Role::all();
        $products = Product::all();
        $pedidos = Pedido::get();
       ;

        return view('index', compact('users','admins','roles','products', 'pedidos'));
    }
}
