<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud </title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-bootgrid/1.3.1/jquery.bootgrid.min.css" />
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-bootgrid/1.3.1/jquery.bootgrid.min.js"></script>
    <style>
    body{
        margin:0;
        padding:0;
        background-color:#f1f1f1;
    }
    .box{
        width:1270px;
        padding:20px;
        background-color:#fff;
        border:1px solid #ccc;
        border-radius:5px;
        margin-top:25px;
    }
    </style>
</head>
<body>
<div class="container box">

<div>

    @if(session('success'))
        <p class="alert-success">
        {{session('success')}}
        </p>
    @endif
    <form action="{{ url('/editar', $usuario->id) }}" method="post">

        {{csrf_field()}}

        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
        <label for="nome">Digite o nome</label>
        <input type="text" class="form-control" name="nome" placeholder="ex.: Maria José Gomes" value="{{$usuario->nome}}">
        </div>
        <div class="form-group">
            <label for="email">Digite o email</label>
            <input type="email" class="form-control" name="email"  placeholder="exemplo@gmail.com" value="{{$usuario->email}}">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>

</div>

</body>
</html>