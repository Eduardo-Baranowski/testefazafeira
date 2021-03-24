<?php


namespace App\Http\Controllers;

use App\Classes\Lista;

use App\Repositories\ListRepository;
use App\Repositories\ProductRepository;
use App\Repositories\ProductUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProdutoController extends Controller
{

    public function index()
    {
        return view('pages.produto');
    }

    public function painel(ProductRepository $produto, ListRepository $lista)
    {
        $produtos = $produto->paginate(10);
        $produtosd = $produto->all();
        $listas = $lista->all();
        return view('pages.painel', compact('produtos', 'listas', 'produtosd'));
    }

    public function infoproduto($id, ProductRepository $produto, ProductUser $produtousuario)
    {

        $produto = $produto->find($id);
        $produtos_usuarios = $produtousuario->all();
        $idd = $id;
        return view('pages.infoproduto', compact('produto', 'produtos_usuarios', 'idd'));
    }

    public function favoritarproduto($id, ProductRepository $produto, ProductUser $produtousuario)
    {
        $produtos = $produto->paginate(10);
        $produto = $produto->find($id);
        $produtotodos = $produtousuario->all();
        $produtos_usuarios = $produtousuario->all();
        foreach ($produtotodos as $produto){
            if ($produto->product_id == $id and $produto->user_id == Auth::user()->id){
                return view('home', compact('produtos', 'produtos_usuarios'));
            }
        }

        $produto_usuario = new ProdutoUsuario();
        $produto_usuario->user_id = Auth::user()->id;
        $produto_usuario->product_id = $id;
        $produto_usuario->save();

        return view('home', compact('produtos', 'produtos_usuarios'));

    }


    public function storeproduto(Request $request)
    {
        $request->validate([
            'nome' => 'required|max:255',
            'cod' => 'required|numeric|unique:produtos',
            'preco' => ['required','regex:/^\d+([.]\d{1,2})?$/'],
        ]);

        $produto = new Produto();

        $produto->user_id = Auth::user()->id;
        $produto->fill($request->input());
        $produto->save();


        return redirect()->route('pages.produto');
    }

    public function storedesejo(Request $request)
    {
        echo $request;
        $request->validate([
            'product_id' => 'required|max:255',
        ]);

        $lista = new Lista();


        $lista->user_id = Auth::user()->id;
        $lista->fill($request->input());
        $lista->save();


        return redirect()->route('pages.painel');
    }

    public function response(array $errors)
    {
        return Redirect::back()->withInput()->withErrors($errors);
    }
}
