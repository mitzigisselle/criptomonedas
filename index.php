<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title></title>
  </head>
  <body>
    
    <div class="jumbotron jumbotron-fluid" style="background-color: #92F9D2">
        <div class="container" >
            <h1 class="display-4">Calculo de precio de criptomonedas</h1>
            <div class="card" style="background-color: #D5EAF7 ">
                <div class="card-body">
                    <form method="post" onsubmit="return calcular()" id="criptomonedas">
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="cantidad">Monto a gastar</label>
                                <input type="number" class="form-control" id="cantidad" name="cantidad">
                            </div>
                        </div>
                        <hr>
                        <hr>
                        Moneda a comprar
                        <hr>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="radio" name="moneda" id="bitcoin" value="bitcoin"> 
                                <label for="bitcoin">Bitcoin($840,000)</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="radio" name="moneda" id="etherium" value="etherium"> 
                                <label for="etherium">Etherium($58,620)</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6" >
                                <input type="radio" name="moneda" id="mana" value="mana">
                                <label for="mana">Mana($20)</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="radio" name="moneda" id="xrp" value="xrp">
                                <label for="xrp">XRP($24)</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="radio" name="moneda" id="bat" value="bat">
                                <label for="bat">Bat($18)</label>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-6">
                                <button class="btn btn-primary">Calcular</button>
                                <span class="btn btn-info" onclick="limpiarFormulario()">Limpiar</span>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" id="cantidadmonedas" class="form-control" readonly>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="script.js"></script>
  </body>
</html>