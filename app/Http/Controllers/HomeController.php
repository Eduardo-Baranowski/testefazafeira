<?php

namespace App\Http\Controllers;

use App\Repositories\ProductRepository;
use App\Repositories\ProductUser;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(ProductRepository $produto, ProductUser $produtousuario)
    {
        $produtos = $produto->paginate(10);
        $produtos_usuarios = $produtousuario->all();
        return view('home', compact('produtos', 'produtos_usuarios'));
    }
}
