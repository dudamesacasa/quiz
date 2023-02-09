<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./index.css">
    <title>Questionário</title>
</head>

<body>    

    <h1>Questionário HTML e CSS</h1>

    <form method="POST" action="calcula.php">
        <div class="content" onchange="handleClick();">
            <div class="questions">
                <h3>1. Qual a forma correta de importar um arquvivo CSS no HTML?</h3>
                <div class="content-answers">
                    <div>
                        <input type="radio" name="question1" id="option1A" value="1A" />
                        <label for="option1A">
                            link rel="stylesheet" type="text/css" href="./styles.css"
                        </label>
                    </div>
                    <div>
                        <input type="radio" name="question1" id="option1B" value="1B" />
                        <label for="option1B">
                            link "rel=stylesheet type=text/css href=./styles.css"
                        </label>
                    </div>
                    <div>
                        <input type="radio" name="question1" id="option1C" value="1C" />
                        <label for="option1C">
                            link rel="./styles.css" type="text/css"
                        </label>
                    </div>
                    <div>
                        <input type="radio" name="question1" id="option1D" value="1D" />
                        <label for="option1D">
                            link rel="stylesheet" type="css" href="./styles.css"
                        </label>
                    </div>
                    <div>
                        <input type="radio" name="question1" id="option1E" value="1E"/>
                        <label for="option1E">
                            link type="text/css" href="./styles.css"
                        </label>
                    </div>
                    <!-- <button id="clearQuestion1" onclick="clearQuestion();">Limpar Escolha</button> -->
                </div>
            </div>

            <div class="questions">
                <h3>2. Assinale abaixo a tag que tem valor padrão Display Block:</h3>
                <div class="content-answers">
                    <div>
                        <input type="radio" name="question2" id="option2A" value="2A" />
                        <label for="option2A">h1</label>
                    </div>
                    <div>
                        <input type="radio" name="question2" id="option2B" value="2B" />
                        <label for="option2B">a</label>
                    </div>
                    <div>
                        <input type="radio" name="question2" id="option2C" value="2C" />
                        <label for="option2C">button</label>
                    </div>
                    <div>
                        <input type="radio" name="question2" id="option2D" value="2D" />
                        <label for="option2D">u</label>
                    </div>
                    <div>
                        <input type="radio" name="question2" id="option2E" value="2E" />
                        <label for="option2E">br</label>
                    </div>
                    <!-- <button id="clearQuestion2" onclick="clearQuestion();">Limpar Escolha</button> -->
                </div>
            </div>

            <div class="questions">
                <h3>3. A tag Strong serve para:</h3>
                <div class="content-answers">
                    <div>
                        <input type="radio" name="question3" id="option3A" value="3A" />
                        <label for="option3A">Deixar o texto maior</abell>
                    </div>
                    <div>
                        <input type="radio" name="question3" id="option3B" value="3B" />
                        <label for="option3B">Deixar o texto menor</label>
                    </div>
                    <div>
                        <input type="radio" name="question3" id="option3C" value="3C" />
                        <label for="option3C">Deixar o texto em negrito</label>
                    </div>
                    <div>
                        <input type="radio" name="question3" id="option3D" value="3D" />
                        <label for="option3D">Deixar o texto mais espaçado</label>
                    </div>
                    <div>
                        <input type="radio" name="question3" id="option3E" value="3E" />
                        <label for="option3E">Dizer que o texto é importante</label>
                    </div>
                    <!-- <button id="clearQuestion3" onclick="clearQuestion();">Limpar Escolha</button> -->
                </div>
            </div>

            <div class="questions">
                <h3>4. No seguinte trecho de código "div {margin: 10px 20px;}", o estilo das margens será aplicado de
                    qual
                    maneira?</h3>
                <div class="content-answers">
                    <div>
                        <input type="radio" name="question4" id="option4A" value="4A" />
                        <label for="option4A">10px para a esquerda, 20px para a direita e 0px para cima e para baixo</label>
                    </div>
                    <div>
                        <input type="radio" name="question4" id="option4B" value="4B" />
                        <label for="option4B">10px para esquerda e direita e 20px para cima e para baixo</label>
                    </div>
                    <div>
                        <input type="radio" name="question4" id="option4C" value="4C" />
                        <label for="option4C">10px para cima, 20px para esquerda, 10px para direira, 20px para baixo</label>
                    </div>
                    <div>
                        <input type="radio" name="question4" id="option4D" value="4D" />
                        <label for="option4D">10px para cima, 20px para baixo e 0 para esquerda e direita</label>
                    </div>
                    <div>
                        <input type="radio" name="question4" id="option4E" value="4E" />
                        <label for="option4E">10px para cima e para baixo e 20px para esquerda e para direita</label>
                    </div>
                    <!-- <button id="clearQuestion4" onclick="clearQuestion();">Limpar Escolha</button> -->
                </div>
            </div>

            <div class="questions">
                <h3>5. O padding representa: </h3>
                <div class="content-answers">
                    <div>
                        <input type="radio" name="question5" id="option5A" value="5A" />
                        <label for="option5A">A soma do conteúdo e da borda</abell>
                    </div>
                    <div>
                        <input type="radio" name="question5" id="option5B" value="5B" />
                        <label for="option5B">A distância entre a margem e a borda</label>
                    </div>
                    <div>
                        <input type="radio" name="question5" id="option5C" value="5C" />
                        <label for="option5C">A distância entre o conteúdo e a borda</label>
                    </div>
                    <div>
                        <input type="radio" name="question5" id="option5D" value="5D" />
                        <label for="option5D">A soma do conteúdo e da margem</label>
                    </div>
                    <div>
                        <input type="radio" name="question5" id="option5E" value="5E" />
                        <label for="option5E">A soma de conteúdo, preenchimento, borda e margem</label>
                    </div>
                    <!-- <button id="clearQuestion5" onclick="clearQuestion();">Limpar Escolha</button> -->
                </div>
            </div>
        </div>    

        <button type="submit" id="btnSubmit">Enviar</button>   

        <div id="clear" onclick="clearAnswers();">Limpar Escolhas</div>
        
    </form>       

    <script src="scripts.js"></script>
</body>

</html>