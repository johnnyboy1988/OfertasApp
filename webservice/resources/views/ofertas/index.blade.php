@extends('layouts.app')

@section('content')
<script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de Ofertas</div>

                <div class="panel-body">
                    <a class="btn btn-default" style="float:right" href="/ofertas/create">Adicionar</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Título</th>
                                <th>Descrição</th>  
                                <th>Valor</th>
                                <th>Validade</th>
                                <th>Imagem</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ofertas as $oferta)
                                <tr>    
                                    <td>{{$oferta->id}}</td>
                                    <td>{{$oferta->titulo}}</td>
                                    <td>{{$oferta->descricao}}</td>
                                    <td>{{$oferta->valor_f}}</td>
                                    <td>{{$oferta->validade}}</td>
                                    <td><img src="{{asset($oferta->imagem)}}" height="30" /></td>
                                    <td>
                                       
                                        <form class="" action="{{route('ofertas.destroy',$oferta->id)}}" method="post">
                                            <a class="btn btn-default" href="{{route('ofertas.edit',$oferta->id)}}">Editar</a>  
                                            {{csrf_field()}}<!-- usar sempre nos formularios --> 
                                            {{ method_field('DELETE')}}
                                            <button class="btn btn-default">Deletar</button>
                                        </form>

                                       
                                    </td>
                                </tr>
                            @endforeach                
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
