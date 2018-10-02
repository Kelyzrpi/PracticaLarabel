<!doctype>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        .row{
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Kelyz</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/inicio">Pino <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Tepec</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Acerca de</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>
    </div>
</nav>

<div class="container"> 
    <h2>
        Zapatateria tepec
    </h2>
    <form>
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" placeholder="Nombre del articulo">
            </div>
        </div>
        <div class="row">
            <div class="col-5">
                <input type="text" class="form-control">
            </div>
            <div class="col-3">
                <input type="text" class="form-control">
            </div>
            <div class="col">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <input type="text" class="form-control">
            </div>
            <div class="col">
                <input type="text" class="form-control">
            </div>
        </div>
    </form>
    <div class="row">
        <div class="col offset-md-8 text-right">
            <button type="button" class="btn btn-warning">Primary</button>
            <button type="button" class="btn btn-success">Primary</button>
        </div>
    </div>
</div>
</body>
</html>