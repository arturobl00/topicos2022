<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>Formularios con Bootstrap</title>
</head>
<body>
    <div class="container mt-3">
        <h2>Primera Unidad Interfaces</h2>
        <div class="mt-4 p-5 bg-primary text-white rounded">
            <h1>Formularios con Bootstrap</h1>
            <p>Controles de formulario:<br/>
            Ofrezca controles de forma textual como <code>< input >s y < textarea> s</code> una actualización con estilos personalizados, tamaño, estados de enfoque y más.</p>
        </div>
    </div>

    <div class="container">
        <h2>Ejemplo 1 Formulario simple input para correo electronico y caja de comentarios.</h2>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type= class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
    </div>
    <div class="container">
        <h2>Ejemplo de tipos de Input en HTML</h2>
        <input type="button" class="form-control">
        <br/>
        <input type="checkbox" class="form-control">
        <br/>
        <input type="color" class="form-control">
        <br/>
        <input type="date" class="form-control">
        <br/>
        <input type="datetime-local" class="form-control">
        <br/>
        <input type="email" class="form-control" placeholder="email" require>
        <br/>
        <input type="file" class="form-control">
        <br/>
        <input type="hidden" class="form-control">
        <br/>
        <input type="image" class="form-control">
        <br/>
        <input type="month" class="form-control">
        <br/>
        <input type="number" class="form-control">
        <br/>
        <input type="password" class="form-control">
        <div>
        <label for="huey">Huey</label>
        <input type="radio" id="huey" name="drone" value="huey" class="form-check">
        </div>

        <div>
        <input type="radio" id="dewey" name="drone" value="dewey" class="form-check-input">
        <label for="dewey">Dewey</label>
        </div>

        <div>
        <input type="radio" id="louie" name="drone" value="louie" class="form-check-input">
        <label for="louie">Louie</label>
        </div>
        <br/>
        <input type="range">
        <br/>
        <input type="reset" class="form-control btn-danger">
        <br/>
        <input type="search" class="form-control">
        <br/>
        <input type="submit" class="form-control">
        <br/>
        <input type="tel" class="form-control">
        <br/>
        <input type="text" class="form-control">
        <br/>
        <input type="time" class="form-control">
        <br/>
        <input type="url" class="form-control">
        <br/>
        <input type="week" class="form-control">
    </div>
</body>
</html>