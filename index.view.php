<!DOCTYPE html>
<html lang="ees">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Oswald&display=swap" rel="stylesheet">

    <title>Paginacion</title>
</head>
<body>
    <div class="contenedor">
    <h1>Articulos</h1>
    <section class="articulos">
        <ul>
            <?php foreach ($articulos as $articulo): ?>
                <li><?php echo $articulo['id']. '.-' . $articulo['articulo'] ?></li>
            <?php endforeach?>
        </ul>
    </section>
    <section class="paginacion">
        <ul>
            <?php if ($pagina == 1):  ?>
                <li class="disabled">&laquo;</li>
            <?php else:?>
                <li><a href="?pagina=<? echo $pagina - 1 ?>">&laquo;</a></li>
            <?php endif;?>

            <?php 
                for ($i=1; $i <= $numeroPagina; $i++){
                    if($pagina == $i){
                        echo "<li class='active'><a href='?pagina=$i'>$i</a></li>";
                    }else{
                        echo "<li><a href='?pagina=$i'>$i</a></li>";
                    }
                }
            ?>

            <?php if ($pagina == $numeroPagina):  ?>
                <li class="disabled">&raquo;</li>
            <?php else:?>
                <li><a href="?pagina=<? echo $pagina + 1 ?>">&raquo;</a></li>
            <?php endif;?>           
        </ul>
    </section>
    </div>
</body>
</html>