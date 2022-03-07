<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="card border-light card text-center card w-50 m-auto mt-5 card text-dark bg-light">
        <h5 class="card-header">Profesor</h5>
        <div class="card-body">
            <form class="w-50 m-auto" action="/createProfesor" method="GET">
                <div class="row mb-3 text-center">
                    <div class="col-sm-12 ">
                        <input placeholder="Nombre" value="" name="inputTitle" type="text" class="form-control" id="inputTitle3">
                    </div>
                </div>
                <div class="row mb-3 text-center">
                    <div class="col-sm-12 ">
                        <input placeholder="Apellidos" value="" name="inputTitle" type="text" class="form-control" id="inputTitle3">
                    </div>
                </div>
                <div class="row mb-3 text-center">
                    <div class="col-sm-12 ">
                        <input placeholder="Email" value="" name="inputTitle" type="text" class="form-control" id="inputTitle3">
                    </div>
                </div>
                <div class="row mb-3 text-center">
                    <div class="col-sm-12 ">
                        <input placeholder="NIF" value="" name="inputTitle" type="text" class="form-control" id="inputTitle3">
                    </div>
                </div>
                <div class="row mb-3 text-center">
                    <div class="col-sm-12 ">
                        <input placeholder="ID Departamento" value="" name="inputTitle" type="text" class="form-control" id="inputTitle3">
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-success">Crear</button>
            </form>
        </div>
    </div>
    <div class="card border-light card text-center card w-50 m-auto mt-5 card text-dark bg-light">
        <h5 class="card-header">Departamentos</h5>
        <div class="card-body">
            <form class="w-50 m-auto" action="" method="POST">
                <div class="row mb-3 text-center">
                    <div class="col-sm-12 ">
                        <input placeholder="Nombre" value="" name="inputTitle" type="text" class="form-control" id="inputTitle3">
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-success">Crear</button>
            </form>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
</body>
</html>