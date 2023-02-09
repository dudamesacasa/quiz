<?php
    $testAnswers = array (
        "question1" => "1A",
        "question2" => "2A",
        "question3" => "3C",
        "question4" => "4E",
        "question5" => "5C",
    );

    $points = 0;
    $acertos = "";

    $calculaNota = 10 / count($_POST);

    for($i = 1; $i < 6; $i++){
        if($_POST["question$i"] === $testAnswers["question$i"]) {
            $points = $points + 2;
            $acertos = $acertos.$i.", ";
        };
    };   

    if (substr($acertos, -2) === ", "){ 
        $acertos = substr($acertos, 0, -2 );
    };

    if ($points !== 0){
        if(strlen($acertos) > 1){
            $acertos = "Você acertou as questões $acertos";
        }
        else {
            $acertos = "Você acertou a questão $acertos";
        }; 
    };      
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./calcula.css">
    <title>Resultado</title>
</head>
<body>

    <div class="home">
        <a href="./index.php">Home </a>
    </div> 

    <div class="cabec">

        <h1>Questionário HTML e CSS</h1>

        <p class="nota">A sua nota é: <strong><?php echo $points ?>/10</strong></p>
        <p><?php echo $acertos ?> </p>

    </div>

    <div class="content">
        <p>As respostas corretas são: </p>
        
        <div class="questions">
            <h4>1. Qual a forma correta de importar um arquvivo CSS no HTML?</h4>
            <div class="content-answers">
                <input type="radio" checked /> link rel="stylesheet" type="text/css" href="./styles.css"                  
            </div>
        </div>

        <div class="questions">
            <h4>2. Assinale abaixo a tag que tem valor padrão Display Block:</h4>
            <div class="content-answers">
                <input type="radio" checked /> h1                    
            </div>
        </div>

        <div class="questions">
            <h4>3. A tag Strong serve para:</h4>
            <div class="content-answers">
                <input type="radio" checked/> Deixar o texto em negrito
            </div>                
        </div>

        <div class="questions">
            <h4>4. No seguinte trecho de código "div {margin: 10px 20px;}", o estilo das margens será aplicado de qual maneira?</h4>
            <div class="content-answers">
                <input type="radio" checked /> 10px para cima e para baixo e 20px para esquerda e para direita
            </div>
        </div>

        <div class="questions">
            <h4>5. O padding representa: </h4>                
            <div class="content-answers">
                <input type="radio" checked /> A distância entre o conteúdo e a borda
            </div>                
        </div>    
    </div>
</body>
</html>