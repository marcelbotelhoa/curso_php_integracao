<?php require_once("../../conexao/conexao.php"); ?>

<?php 
    // Passo 3 - Abrir consulta ao banco de dados
    $consulta_categorias = "SELECT nomeproduto";
    $consulta_categorias .= " FROM produtos" ;

    $categorias = mysqli_query($conecta, $consulta_categorias);
    
    if ( !$categorias ) {
        die("Falha na consulta ao banco.");
    }

?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        <ul>
            
        <?php
            // Passo 4 - Listagem dos dados
            while ( $registro = mysqli_fetch_assoc($categorias)  ) {     
        ?>
                <li><?php echo $registro["nomeproduto"] ?></li>
        <?php
            }
        ?>
        </ul>
        <?php 
            // Passo 5 - Liberar dados da memoria
            mysqli_free_result($categorias);
        ?>
        
    </body>
</html>

<?php
    // Passo 6 - Fechar conexao
    mysqli_close($conecta);
?>