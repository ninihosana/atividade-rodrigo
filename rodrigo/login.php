<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <style>
        body{
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            background-image: linear-gradient(45deg, cyan,yellow);
        }
        div{
            background-color: rgba(0, 0, 0, 0.35);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 20px;
            color: wheat;
        }
        input{
            padding: 15px;
            border:none;
            outline: none;
            font-size: 17px;
        }
        button{
            background-color: dodgerblue;
            border:none;
            padding: 20px;
            width: 100%;
            border-radius: 15px;
            color:wheat;
            font-size: 20px;
        }
    </style>
    
</head>
<body>
    <div>
        <h1>Login</h1>
        <input type="text" placeholder="Nome">
        <br><br>
        <input type="text" placeholder="Senha">
        <br><br>
        <button>Enviar</button>
    </div>
</body>
</html>