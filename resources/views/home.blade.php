@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @forelse ($produtos as $produto)
                        @if ($produto->user_id == (Auth::user()->id))
                        @continue
                        @else
                        <div class="card mt-2">
                            <div class="px-4 pt-4">
                                <h5 align="center">
                                    <b>{{ $produto->nome}}</b>
                                </h5>
                            </div>
                            <div class="card-body">
                                <p align="center" class="card-title">Cod: {{ $produto->cod }}</p>
                                <div align="center" class="card-text">Preço: {!! $produto->preco !!}</div>
                                <b hidden>{{$cont = 0}}</b>
                                @foreach($produtos_usuarios as $produto_usuario)

                                    @if($produto_usuario->product_id == $produto->id)
                                        <b hidden>{{$cont = $cont+1}}</b>
                                    @endif
                                @endforeach
                                <div align="center" class="card-text">likes: {!! $cont!!}</div>

                                <div align="center"><a href="{{ route('pages.favoritarproduto', $produto->id ) }}">Favoritar</a></div>
                            </div>
                        </div>
                        @endif
                    @empty
                        <div class="alert alert-info">
                            Não foram encontradas anotações.
                        </div>
                    @endforelse
                        <br>
                        {{ $produtos->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
