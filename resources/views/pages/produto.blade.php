@extends('layouts.app', ['pageSlug' => 'produto'])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-body card-white">
                <div class="card-header">
                    <h4 class="card-title">{{ __('Registro de Produto') }}</h4>
                </div>
                    <form action="{{ route('pages.storeproduto') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            @php( $field = 'nome' )
                            <label for="{{ $field }}">Nome</label>
                            <input type="text" class="form-control @error($field) is-invalid @enderror"
                                   value="{{ old( $field ) }}" id="{{ $field }}" name="{{ $field }}"
                                   placeholder="Nome">
                        </div>
                        <div class="form-group">
                            @php( $field = 'cod' )
                            <label for="{{ $field }}">Código</label>
                            <input type="text" class="form-control @error($field) is-invalid @enderror"
                                   value="{{ old( $field ) }}" id="{{ $field }}" name="{{ $field }}"
                                   placeholder="Código">
                        </div>
                        <div class="form-group">
                            @php( $field = 'preco' )
                            <label for="{{ $field }}">Preço</label>
                            <input type="text" class="form-control @error($field) is-invalid @enderror"
                                   value="{{ old( $field ) }}" id="{{ $field }}" name="{{ $field }}"
                                   placeholder="preco">
                        </div>
                        <a href="" class="btn btn-primary">Cancelar</a>
                        <input type="submit" class="btn btn-success" value="Salvar">
                    </form>
            </div>
        </div>

    </div>
</div>
@endsection
