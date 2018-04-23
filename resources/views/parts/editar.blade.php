<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>title</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=font1|font2|etc" type="text/css">
    <link rel="stylesheet" href="/css/stylesheet.css" type="text/css">
  </head>
  <body>
    <div style="height:7vh"></div>

    <div class="container">
      <div class="row">
        <div class="col-sm-2"></div>

        <div class="col-sm-8">

    <h2><strong>Editar componente</strong></h2>
        <form id="rendered-form" method="POST" action="/update/{{$id->id}}">
            {{method_field('PATCH')}}
              {{ csrf_field()  }}
                <fieldset>
            <div class="rendered-form">
              <div class="fb-text form-group field-tipo"><label for="tipo" class="fb-text-label">Componente<span class="fb-required"><mak style="color:red"> *</mak></span><span class="tooltip-element" tooltip="Tipo de componente (transistor, resistor,etc...)"></span></label><input type="text" @if ($id->tipo) value="{{$id->tipo}}"@endif class="form-control" name="tipo" id="tipo" title="Tipo de componente (transistor, resistor,etc...)" required="required" aria-required="true"></div>
              <div class="fb-text form-group field-quantidade"><label for="quantidade" class="fb-text-label">Quantidade<span class="fb-required"><mak style="color:red"> * </mak></span></label><input type="text" @if ($id->quantidade) value="{{$id->quantidade}}"@endif class="form-control" name="quantidade" maxlength="10" id="quantidade" required="required" aria-required="true"></div>
              <div class="fb-text form-group field-capacidade"><label for="capacidade" class="fb-text-label">Capacidade</label><input type="text" @if ($id->capacidade) value="{{$id->capacidade}}"@endif class="form-control" name="capacidade" id="capacidade"></div>
              <div class="fb-text form-group field-color"><label for="color" class="fb-text-label">Cor</label><input type="text" @if ($id->color) value="{{$id->color}}"@endif class="form-control" name="color" id="color"></div>
              <div class="fb-text form-group field-descricao"><label for="descricao" class="fb-text-label">Descrição</label><input type="text" class="form-control" @if ($id->descricao) value="{{$id->descricao}}"@endif name="descricao" id="descricao"></div>

            </div>
            <form id="rendered-form">
              <div class="rendered-form">
           <div class="fb-button form-group field-submitbtn">
           <button type="submit" class="btn btn-info" name="submitbtn" style="info" id="submitbtn">Editar</button></div></div>
            </form>
          </form>

      <div class="links full-height"><a href="/">Voltar</a></div>
        </div>
      </div>
    </div>
   </body>
</html>
