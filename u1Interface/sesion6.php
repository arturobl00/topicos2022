<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>Cierre Unidad 1</title>
</head>
<body>
<div class="container mt-3">
        <h2>Primera Unidad Interfaces</h2>
        <div class="mt-4 p-5 bg-primary text-white rounded">
            <h1>Formularios 2 con Bootstrap</h1>
            <p>Controles de formulario:<br/>
            Ofrezca controles de forma textual como <code>< input >s y < textarea> s</code> una actualización con estilos personalizados, tamaño, estados de enfoque y más.</p>
        </div>
    </div>

<br/>

<div class="container">
    <h2>Formulario para entrada de texto.</h2>
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Email address normal</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>

    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Email address lg</label>
    <input type="email" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>

    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Email address sm</label>
    <input type="email" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>

    <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
    </div>
</div>

<br/>

<div class="container">
    <h2>Formulario con caja de texto deshabilitada.</h2>
    <label for="input1" class="form-label">Ejemplo 1 Total deshabilitada</label>
    <input class="form-control" type="text" id="input1" placeholder="Disabled input" aria-label="Disabled input example" disabled>
    <label for="input2" class="form-label">Ejemplo 2 deshabilitada solo lectura</label>
    <input class="form-control" type="text" id="input2" value="Disabled readonly input" aria-label="Disabled input example" disabled readonly>  
    <label for="input3" class="form-label">Ejemplo 3 alternativa a disabled con readonly</label>
    <input class="form-control" type="text" id="input3" value="Readonly input here..." aria-label="readonly input example" readonly>
</div>

<br/>

<div class="container">
    <h2>Formulario Texto sin formato de solo lectura form-control-plaintext.</h2>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Ejemplo de Caja de texto sin formato - Email</label>
        <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
        </div>
    </div>

    <h2>Formulario Input para Password.</h2>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword">
        </div>
    </div>    
</div>

<div class="container">
        <h2>Formulario input para botones coleccion de estilos</h2>
        <p>Boton con type - button: <input type="button" value="Boton"/></p>
        <p>Boton con etiqueta - button: <button>Boton</button></p>
        <p>Boton con type - submit: <input type="submit" value="Boton"/></p>
        <p>Hipervinculo con cara de boton <a href="#" class="btn btn-dark">Boton</a>
        <a href="http://www.google.com" class="btn btn-dark">Google</a>

    <br/>

    <h2>Coleccion de botones simples con bootstrap</h2>
        <button type="button" 
                class="btn btn-primary">Primary</button>
        <button type="button" 
                class="btn btn-secondary">Secondary</button>
        <button type="button" 
                class="btn btn-success">Success</button>
        <button type="button" 
                class="btn btn-danger">Danger</button>
        <button type="button" 
                class="btn btn-warning">Warning</button>
        <button type="button"
                class="btn btn-info">Info</button>
        <button type="button" 
                class="btn btn-light">Light</button>
        <button type="button" 
                class="btn btn-dark">Dark</button>
        <button type="button" 
                class="btn btn-link">Link</button>
        
        <h2>Button Outline</h2>
        <button type="button" 
                class="btn btn-outline-primary">
            Primary
        </button>

        <button type="button" 
                class="btn btn-outline-secondary">
            Secondary
        </button>

        <button type="button" 
                class="btn btn-outline-success">
            Success
        </button>

        <button type="button" 
                class="btn btn-outline-danger">
            Danger
        </button>

        <button type="button" 
                class="btn btn-outline-warning">
            Warning
        </button>

        <button type="button" 
                class="btn btn-outline-info">
            Info
        </button>

        <button type="button" 
                class="btn btn-outline-light">
            Light
        </button>
        <button type="button"
                class="btn btn-outline-dark">
            Dark
        </button>

        <h2>Button Sizes</h2>  
            
            <button type="button"
                    class="btn btn-success btn-sm"> 
                Small Button 
            </button>  
                
            <button type="button" 
                    class="btn btn-success"> 
                Default Button 
            </button>  
                
            <button type="button" 
                    class="btn btn-success btn-lg"> 
                Large Button 
            </button>

            <h2>Button Disabled State</h2>  
            
            <button type="button" 
                    class="btn btn-primary" disabled> 
                Disabled Button 
            </button>  
                
            <button type="button" 
                    class="btn btn-success" disabled> 
                Disabled Button 
            </button>
            
            <h2>Block Level Buttons</h2>
            <button type="button" 
                    class="btn btn-block btn-primary">
                Block Level Button
            </button>

            <button type="button"
                    class="btn btn-block btn-success">
                Block Level Button
            </button>
        
            <h2>Spinner Buttons</h2>
            <button type="button" class="btn btn-primary">
                <span class="spinner-border spinner-border-sm">
                </span>
                Spinner Button
            </button>

            <button type="button" class="btn btn-success">
                <span class="spinner-grow spinner-grow-sm">
                </span>
                Spinner Button
            </button>
</div>

</body>
</html>