@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Adicionar de Oferta</div>
                <div class="panel-body">
                    <form class="" action="{{route('ofertas.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}<!-- cria os input com os tokens -->
                    @include('ofertas._form')
                    <button class="btn btn-default">Salvar</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
