

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
    .display {
            margin: 15%;
            border: solid 1px #000;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            width: auto;
        }
    
    </style>
</head>
<body>
    <div class="container">
    <div class="display">
        <div class="row">
            <div class="col-sm-6">
                <h2>Calcular IMC</h2>

                <form method="GET">
                    <div class="form-group">
                    <label for="altura">Altura:</label>
                    <input type="text" id="altura" name="altura"  class="form-control"/><br><br>
                    </div>

                    <div class="form-group">
                    <label for="peso">Peso</label>
                    <input type="text" id="peso" name="peso" class="form-control"/><br><br>
                    </div>
                
                    <input type="submit" value="Calcular IMC" class="btn btn-primary" />
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="resultado">
                    <?php
                        if (isset($_GET['altura'])) {
                        $altura = floatval($_GET['altura']);
                        $peso = floatval($_GET['peso']);

                        $imc = $peso / ($altura*$altura);

                        echo "<h3> Seu IMC é ".$imc."<h3><br>";

                        if($imc<18.5){
                            echo "<br><h4>Classificação: Magreza<h4><br>";
                        }
                        elseif($imc>18.5 && $imc<24.9){
                            echo "<br><h4>Classificação: Peso Normal<h4><br>";
                        }
                        elseif($imc>25.0 && $imc<29.9){
                            echo "<br><h4>Classificação: Sobrepeso<h4><br>";
                        }
                        elseif($imc>30.0 && $imc<39.9){
                            echo "<br><h4>Classificação: Obesidade<h4><br>";
                        }
                        elseif($imc>40.0){
                            echo "<br><h4>Classificação: Obesidade GRAVE<h4><br>";
                        }
                    }
                    ?>
                </div>
        
            </div>

        </div>
    </div>
    </div>
</body>
</html>