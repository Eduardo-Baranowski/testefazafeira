@extends('layouts.app', ['pageSlug' => 'painel'])

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-body card-white">
                    <div class="card-header">
                        <h4 align="center" class="card-title">{{ __('Meus Produtos') }}</h4>
                    </div>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="table-responsive">
                    <table class="table tablesorter" id="">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Preções</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse ($produtos as $produto)

                                <tr>
                                    @if ($produto->user_id == (Auth::user()->id))
                                        <td>{{ $produto->cod}}</td>
                                        <td>{{ $produto->nome}}</td>
                                        <td>{{ $produto->preco}}</td>
                                    @else
                                        @continue
                                    @endif

                                </tr>
                        </tbody>
                        @empty
                            <div class="alert alert-info">
                                Não foram encontradas usuários.
                            </div>
                        @endforelse


                    </table>
                        {{ $produtos->links() }}
                </div>
                </div>
            </div>
        </div>
    </div>
    <br>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-body card-white">
                    <div class="card-header">
                        <h4 align="center" class="card-title">{{ __('Lista de Desejos') }}</h4>
                    </div>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="table-responsive">
                    <table class="table tablesorter" id="">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Informações</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse ($listas as $lista)
                            @if ($lista->user_id == (Auth::user()->id))
                                <tr>
                                    <td>{{ $lista->product_id}}</td>
                                    @foreach ($produtosd as $produtod )
                                        @if ($produtod->id == $lista->product_id)
                                            <td>{{ $produtod->nome}}</td>
                                            <td><a href="{{ route('pages.infoproduto', $produtod->id ) }}">Info</a></td>
                                        @endif
                                    @endforeach
                                    @else
                                        @continue
                                    @endif

                                </tr>
                        </tbody>
                        @empty
                            <div class="alert alert-info">
                                Não foram encontradas usuários.
                            </div>
                        @endforelse
                    </table>
                </div>
            </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-body card-white">
                    <div class="card-header">
                        <h4 align="center" class="card-title">{{ __('Registro de Desejo') }}</h4>
                    </div>
                    <form action="{{ route('pages.storedesejo') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <br>
                            @php( $field = 'produto' )
                            <label for="{{ $field }}">Produtos</label>

                            <select class="form-control" name="product_id">

                                <option>Select Product</option>

                                @foreach ($produtosd as $produtodd)
                                    <option value="{{ $produtodd->id }}">
                                        {{ $produtodd->nome }}
                                    </option>
                                @endforeach
                            </select>

                        </div>

                        <a href="" class="btn btn-primary">Cancelar</a>
                        <input type="submit" class="btn btn-success" value="Adicionar">
                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection
