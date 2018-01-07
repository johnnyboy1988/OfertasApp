@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar de Oferta</div>
                <div class="panel-body">
                    <form class="" action="{{route('ofertas.update',$oferta->id)}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}<!-- cria os input com os tokens -->
                    {{method_field('PUT')}} <!-- Propriedade do laravel, para tranformar o methodo em PUT -->
                    @include('ofertas._form')
                    <button class="btn btn-default">Atualizar</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
