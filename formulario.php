<?php
    if(isset($_POST['submit']))
    {
        
        include_once('config.php');

        $tipo =$_POST['tipo'];
        $nota_fiscal =$_POST['nota_fiscal'];
        $statu =$_POST['statu'];
        $data_abertura =$_POST['data_abertura'];
        $descricao =$_POST['descricao'];
        $origem =$_POST['origem'];
        
        $result = mysqli_query($conexao,"INSERT INTO cadastro(tipo,nota_fiscal,statu,data_abertura,descricao,origem)VALUES
        ('$tipo' ,'$nota_fiscal','$statu','$data_abertura' ,'$descricao','$origem' )");
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de processo | GN</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: rgba(0, 0, 0, 0.6);
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_abertura{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right,rgb(30, 92, 197), rgb(90, 20, 120));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(30, 40, 110), rgb(10, 30, 140));
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="formulario.php"method="POST">
            <fieldset>
                <legend><b>Controle de processos</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="tipo" id="tipo" class="inputUser" required>
                    <label for="tipo" class="labelInput">Tipo de processo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="nota_fiscal" id="nota_fiscal" class="inputUser" required>
                    <label for="nota_fisca" class="labelInput">Nota fisca nº</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="statu" id="statu" class="inputUser" required>
                    <label for="statu" class="labelInput">Status</label>
                </div>                
                <label for="data_abertura"><b>Data abertura:</b></label>
                <input type="date" name="data_abertura" id="data_abertura" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="descricao" id="descricao" class="inputUser" required>
                    <label for="descricao" class="labelInput">Descrição</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="origem" id="origem" class="inputUser" required>
                    <label for="origem" class="labelInput">Origem</label>
                </div>
             <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>