<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora IR</title>
    <link rel="stylesheet" href="./style/style.css">
</head>

<body>

    <main>

        <h2>Calcular Imposto de Renda</h2>

        <form action="./controller/controller.php" method="get">

            <div class="divNome">
                <label for="nome">Nome completo:</label>
                <input type="text" id="nome" name="nome" />
            </div>

        
            <div class="divCpf">
                <label for="cpf">CPF (apenas números):</label>
                <input type="number" id="cpf" name="cpf"/>
            </div>

        
            <div class="divRendimento">
                <label for="rendimento">Rendimentos:</label>
                <input type="number" id="rendimento" name="rendimento" />
            </div>

            <div class="divCpf">
                <button type="submit">Calcular</button>
            </div>   
               
        </form>
         

       
        <span id="resultado"></span>

    </main>

    <script src="./model/model.php">
    </script>

</body>

</html>