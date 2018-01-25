<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="/css/style.css" rel="stylesheet">

    <!-- Styles -->
    <style>
      html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Raleway', sans-serif;
        font-weight: 100;
        height: 100vh;
        margin: 0;
      }

      .full-height {
        height: 100vh;
      }

      .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
      }

      .position-ref {
        position: relative;
      }

      .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
      }

      .content {
        text-align: center;
      }

      .title {
        font-size: 54px;
        font-weight:bold;
        color:black;
      }

      .links > a {
        background-color:black;
        color: white;
        padding-bottom:25px;
        padding: 0 25px;
        font-size: 15px;
        font-weight: 800;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
      }

      .m-b-md {
        margin-bottom: 30px;
      }
    </style>
  </head>
  <body>


    <div class="flex-center position-ref full-height">
      <div class="content">
        <div class="links">
          <a href="add">Adicionar componente</a>
          <a href="https://github.com/laravel/laravel">Atualizar lista</a>
        </div>
        <div class="title m-b-md" style="padding-top:30px;">
          Listagem de Componentes <br>Eletrônicos
        </div>
        <table class="componentTable">
          <thead>
            <tr>
              <th>Componente</th>
              <th>Capacidade</th>
              <th>Cor</th>
              <th>Quantidade</th>
              <th>Descrição</th>
              <th>Editar</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              @foreach ($lista as $item)
                <td>{{$item->tipo}}</td>
                <td>{{$item->capacidade}}</td>
                <td>{{$item->color}}</td>
                <td>{{$item->quantidade}}</td>
                <td>{{$item->descricao}}</td>
                <td><strong><a href="editar/{{$item->id}}">Editar</a></strong></td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>
