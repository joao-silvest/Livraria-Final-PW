<html>
    <head>
        <title>Livros</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/slate/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/slate/bootstrap.min.css">
    </head>
    <body>

            <div class="container">

            <h1>Lista de Livros</h1>

            <a href="/cadastro" class="btn btn-success">Cadastro</a>

            <div class="row">
            <div class="col">

    <center><h1>Listagem</h1></center>
    <br>
    <table class="table table-hover">
        <thead>
            <tr class="table-success">

            <th>Id</th>
            <th>Nome</th>
            <th>Autor</th>
            <th>Editora</th>
                
            </tr>
        </thead>

        <tbody>
        @foreach($dados as $value)
            <tr>
            
                <td>{{ $value->id }}</td>
                <td>{{ $value->nome }}</td>
                <td>{{ $value->autor }}</td>
                <td>{{ $value->editora }}</td>
                
                <td>
                    <a class="btn btn-primary" href="/editar/{{ $value->id }}"><span class="fa fa-wrench "></span></a>    
                    <form method="post" style="display: inline;" action="/delete/{{ $value->id }}">
                       {{csrf_field()}}
                        <button class="btn btn-danger"><span class="fa fa-trash "></span></button>
                    </form>
                   
                    
                </td>
                
            </tr>
        @endforeach
    </tbody>

    </table> 
    </div>
    </div>
    </div>
</body>
</html>