<?php

if(isset($_Post['submit']))
{
    print_r('nome: ' . $_Post['nome']);
    print_r('<br>');
    print_r('email: ' . $_Post['email']);
    print_r('<br>');
    print_r('Telefone: ' . $_Post['Telefone']);
    print_r('<br>');
    print_r('sexo: ' . $_Post['genero']);
    print_r('<br>');
    print_r('data de nascimento: ' . $_Post['data_nascimento']);
    print_r('<br>');
    print_r('cidade: ' . $_Post['cidade']);
    print_r('<br>');
    print_r('estado: ' . $_Post['estado']);
    print_r('<br>');
    print_r('endereço: ' . $_Post['endereço']);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | GN</title>
    <style>
         body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(10, 113, 231), rgb(17, 54, 71));
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.4);
            padding: 15px;
            border-radius: 17px;
            width: 30%;
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 9px;
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
            transition: 5px;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 9px;
            border-radius: 11px;
            outline: none;
            font-size: 17px;
        }
        #submit{
            background-image: linear-gradient(to right, rgb(20, 147,220), rgb(17, 54, 71));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 17px;
            cursor: pointer;
            border-radius: 11px;
        }
        #submit:hover{
            background-image: linear-gradient(to right, rgb(57, 20, 220), rgb(27, 17, 71));
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="Formulario.php" method="Post">
        <fieldset>
            <legend> Formulario de clientes </legend>
            <div class="inputBox">
                <input type="text" name="Nome" id="Nome" class="inputUser" required>
                <label for="Nome" class="labelInput"> Nome completo </label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="email" id="email" class="inputUser" required>
                <label for="email" class="labelInput">Email</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="tel" name="Telefone" id="Telefone" class="inputUser" required>
                <label for="Telefone" class="labelInput">Telefone</label>
            </div>
            <br><br>
            <p>Sexo</p>
            <input type="radio" id="feminino" name="genero" value="feminino" required>
            <label for="feminino">Feminino</label>
            <br>
            <input type="radio" id="masculino" name="genero" value="masculino" required>
            <label for="masculino">Masculino</label>
            <br>
            <input type="radio" id="outro" name="genero" value="outro" required>
            <label for="outro">Outro</label>
            <br><br>
            <label for="data_nascimento"><b>Data de nascimento:</b></label>
            <input type="date" name="data_nascimento" id="data_nascimento" required>
            <br><br>
            <div class="inputBox">
                <input type="text" name="cidade" id="cidade" class="inputUser" required>
                <label for="cidade" class="labelInput">Cidade</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="estado" id="estado" class="inputUser" required>
                <label for="estado" class="labelInput">Estado</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="endereço" id="endereço" class="inputUser" required>
                <label for="endereço" class="labelInput">Endereço</label>
            </div>
            <br><br>
            <input type="submit" name="submit" id="submit">
            <br>
            </div>
        </fieldset>
    </div>
    
</body>
</html>