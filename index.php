<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    
    <title>HOME PAGE</title>
    <style>
     body, li {
         /* backgraund-color:black*/
            margin: 0;
            padding: 0;
            list-style: none;
            font-family: Arial;
        }
        #container {
            display: grid;
            grid-template-rows: 15vh  85vh;
            grid-template-areas:
                'cabecalho'
                'conteudo'
        }
        #cabecalho{
            grid-area: cabecalho;
            background: #1d1e20;
            color:white;
            display: flex;
            flex-wrap: wrap; 
            justify-content: space-between;
            align-items: center;
            padding: 20px ;
        }
        #conteudo {
            grid-area: conteudo;
            background-color: #ccc;
        }
        img{
            margin-top: 1px;
            margin-left: 1px;
        
        }
        .menu{
            display: flex;
        }
        .menu li{
            padding: 20px;
            margin-left: 20px;
        }
        .menu li a{
            display: block;
            padding: 20px;
            margin-left: 20px;
            background-color:green;
        }
     
        
     </style>

</head>
<body>
    <div id="container">
        <header id="cabecalho">
        <div class="logo">
            <img src="./logo.png" width="100" height="100"> 
        </div>
        <nav>
            <ul class="menu">
                <li>
                <li><a>Home</a> </li>
                <li><a>Produtos</a> </li>
                <li><a>Clientes</a> </li>
            </ul>
        <nav>
</header>
</main id ="conteudo">
<h1> Bem vindo a Home </h1>
</main>
</div>
</body>
</html>