<?php
if (isset($_POST['submit']))
{
    //print_r('Nome: ' . $_POST['nome']);
    //print_r( '<br>');
   // print_r('Email: ' . $_POST['email']);
    //print_r('<br>');
    //print_r('Telefone: ' . $_POST['telefone']);
    //print_r('<br>');
    //print_r('Sexo: ' . $_POST['genero']);
    //print_r('<br>');
    //print_r('Data de Nascimento: ' . $_POST['data_nascimento']);
    //print_r('<br>');
    //print_r('Endereço: ' . $_POST['endereco']);
   // print_r('<br>');
    //print_r('Cidade: ' . $_POST['cidade']);
    //print_r('<br>');
   // print_r('Estado: ' . $_POST['estado']);
   include_once('config.php');
   
   $nome = $_POST['nome'];
   $email = $_POST['email'];
   $telefone = $_POST['telefone'];
   $sexo = $_POST['genero'];
   $data_nasc = $_POST['data_nascimento'];
   $endereco = $_POST['endereco'];
   $cidade = $_POST['cidade'];
   $estado =$_POST['estado'];   

   $result = mysqli_query($conexao, "INSERT INTO usuario(nome,email,telefone,sexo,data_nasc,endereco,cidade,estado) VALUES ('$nome', '$email', '$telefone', '$sexo', '$data_nasc', '$endereco', '$cidade', '$estado')");

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Alunos |Sintonia Pilates</title>
    <style>
    body{
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(45deg, purple, yellow);
    }
    .box{
        color:white;
        position: absolute;
        top:50%;
        left:50%;
        transform:translate(-50%,-50%);
        background-color: rgba(0, 0, 0, 0.6);
        padding: 15px;
        border-radius: 15px;
        width: 25%;
    }
    fieldset{
        border: 3px solid purple;
    }
    legend{
        border: 1px solid purple;
        padding: 10px;
        text-align: center;
        background-image: linear-gradient(45deg, purple, yellow);
        border-radius: 8px;
    }
    .inputbox{
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
    .inputUser:valid ~ .labelInput {
        top: -20px;
        font-size: 12px;
        color: purple;
    }
    #data_nascimento{
        border: none;
        padding: 8px;
        border-radius: 10px;
        outline: none;
        font-size: 15px;
    }
    #submit{
        background-color: purple;
        border: none;
        padding: 15px;
        width: 100%;
        border-radius: 10px;
        color: white;
        font-size: 20px;
        cursor: pointer;
    }
    #submit:hover{
        background-image: linear-gradient(45deg, purple, yellow);
    }
</style>
</head>
<body>
    <div class="box">
        <form action="tela-de-cadastro.php" method="POST">
            <fieldset>
                <legend><b>Cadastro de Alunos Sintonia Pilates</b></legend>
                <br>
                <div class="inputbox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput"> Nome Completo</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label for="email"class="labelInput"> Email</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone"class="labelInput">  Telefone</label>
                </div>
                <p> Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label><br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label><br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label><div class="inputbox"><br>
                    <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento"  required>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco"class="labelInput">  Endereço</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade"class="labelInput"> Cidade</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado"class="labelInput"> Estado</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
                </div>

            </fieldset>
        </form>
        

    </div>

    
    
</body>
</html>