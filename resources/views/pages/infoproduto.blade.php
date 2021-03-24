@extends('layouts.app', ['pageSlug' => 'produto'])

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                        <div class="card mt-2">
                            <div class="px-4 pt-4">
                                <h5 align="center">
                                    <b>{{ $produto->nome}}</b>
                                </h5>
                            </div>
                            <div class="card-body">
                                <p align="center" class="card-title">Código: {{ $produto->cod }}</p>
                                <div align="center" class="card-text">Preço: {!! $produto->preco !!}</div>
                                <b hidden>{{$cont = 0}}</b>
                                @foreach($produtos_usuarios as $produto_usuario)

                                    @if($produto_usuario->product_id == $idd)
                                        <b hidden>{{$cont = $cont+1}}</b>
                                    @endif
                                @endforeach
                                    <div align="center" class="card-text">likes: {!! $cont!!}</div>
                            </div>
                        </div>

            </div>
        </div>
    </div>
@endsection
