
<div class="form-group">
    <label>Título</label>
    <input type="text" class="form-control" name="titulo" value="{{isset($oferta->titulo) ? $oferta->titulo : ''}}">
</div>
<div class="form-group">
    <label>Descrição</label>
    <input type="text" name="descricao" class="form-control" value="{{isset($oferta->descricao) ? $oferta->descricao : ''}}">
</div>

@if(isset($oferta->imagem))
    <img src="{{asset($oferta->imagem)}}" height="30" >
@endif
<div class="form-group">
    <label>Imagem</label>
    <input type="file" name="imagem" class="form-control" >
</div>

<div class="form-group">
    <label>Valor</label>
    <input type="number" step="any" name="valor" value="{{isset($oferta->valor) ? $oferta->valor : ''}}" class="form-control">
</div>


<div class="form-group">
    <label>Validade</label>
    <input type="date" name="validade" value="{{isset($oferta->validade) ? $oferta->validade : ''}}" class="form-control">
</div>

