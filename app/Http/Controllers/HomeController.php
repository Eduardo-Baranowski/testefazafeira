<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\ProductRepositoryInterface;
use App\Repositories\Eloquent\ProductUserRepository;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(ProductRepositoryInterface $produto, ProductUserRepository $produtousuario)
    {
        $produtos = $produto->all();
        $produtos_usuarios = $produtousuario->paginate(10);
        return view('home', compact('produtos', 'produtos_usuarios'));
    }
}
