<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>MediHome</title>
        <link rel="stylesheet" type="text/css" href="/css/bootstrap-4/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="/css/animate.css">
        <link rel="stylesheet" type="text/css" href="/css/misestilos.css">
        <link rel="shortcut icon" type="image/x-icon" href="/imagenes/favicon.ico" />

        
        
    </head>
    <body>
        <nav id="mynavbar" class="navbar navbar-expand-lg navbar-dark bg-info">
            <?= $this->element('inicio/navbar');//de carpeta Element ?>
        </nav>

        <main>        
        <?= $this->fetch('content');//de carpeta Page segun la url ?>        
       </main>
           
        <?= $this->element('inicio/footer');?>

        <script type="text/javascript" src="/js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="/js/theter.js"></script>
        <script type="text/javascript" src="/js/poper.min.js"></script>
        <script type="text/javascript" src="/js/bootstrap.js"></script>
        
        <script type="text/javascript" src="/js/vue2.js"></script>
        <script type="text/javascript" src="/js/axios.js"></script>
        <script type="text/javascript" src="/js/nabvarvue.js"></script>
        <script type="text/javascript" src="/js/iniciovue.js"></script> 
        

    </body>
</html>
