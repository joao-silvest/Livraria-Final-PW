<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/slate/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/slate/bootstrap.min.css">
        
    
    </head>
    <body>

        <form action="/salva" method="post">
            {{ csrf_field() }}

            <fieldset>
                <center><legend><h1>Cadastro</h1></legend></center>
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <center><input type="text" class="form-control" id="nome"></center>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Autor</label>
                    <input type="text" class="form-control" id="autor">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Editora</label>
                    <input type="text" class="form-control" id="editora">
                </div>
            </fieldset>
            <center><button type="submit" class="btn btn-primary">Cadastrar</button><center>
    </form>
</body>
</html>