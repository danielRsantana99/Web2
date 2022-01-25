<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css'); }}">
</head>
<body>
<div class="wrapper" id="nav">
    <div class="sidebar">
        <h2>Socape</h2>
        <ul>         
            <li><a href="{{ URL::asset('layouts/main'); }}"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="{{ URL::asset('clientes/'); }}"><i class="fas fa-user"></i>Cliente</a></li>
            <li><a href="{{ URL::asset('entradas/'); }}"><i class="fas fa-bus"></i>Entrada</a></li>
            <li><a href="{{ URL::asset('venda/'); }}"><i class="fas fa-piggy-bank"></i>Venda</a></li>
            <li><a href="{{ URL::asset('fornecedores/'); }}"><i class="fas fa-shipping-fast"></i>Fornecedor</a></li>
            <li><a href="{{ URL::asset('produto/'); }}"><i class="fas fa-box"></i>Produto</a></li>
        </ul> 
    </div>
    <div class="main_content">
        <div class="header"><h2>@yield('titulo')</h2></div>  
        <div id="conteudo">
          @yield('conteudo')
        </div>
        <div id="footer">
          
        </div>
    </div>
</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>