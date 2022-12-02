<?php include ("./cabecalho.php");?>

<?php
include "conexao.php";

if(isset ($_POST) && !empty($_POST)){
    $pergunta = $_POST["pergunta"];
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
    $d = $_POST["d"];
    $e = $_POST["e"];
    $correta = $_POST["correta"];

    $query = "insert into questoes (pergunta,a,b,c,d,e,correta) "; 
    $query = $query." values('$pergunta','$a','$b','$c','$d','$e','$correta')";
    $resultado = mysqli_query($conexao,$query);
}
?>

<form action= "./resultado.php" method= "post">



<?php
    $query = "select * from questoes order by rand() limit 15";  
    $resultado = mysqli_query($conexao, $query);
  
    $i=0;
    while($linha = mysqli_fetch_array($resultado)){ 
        
        ?>

            <div style="width: 100%; border:1px solid;"> 
                <h1><?php echo $linha["pergunta"]; ?></h1>

             
                <p style = "font-size:20px">
                       
                    <label> A) </label>
                    <input type="radio" name="correta<?php echo $i ?>" value="a" />
                    <?php echo $linha["a"]; ?>
    </p>
                


                <p style = "font-size:20px">
                    <label> B) </label>
                    <input type="radio" name="correta<?php echo $i?>" value="b" />
                    <?php echo $linha["b"]; ?>
    </p>


            
                <p style = "font-size:20px">
                    <label> C) </label>
                    <input type="radio" name="correta<?php echo $i?>" value="c" />
                    <?php echo $linha["c"]; ?>
                
    </p>


                <p style = "font-size:20px">
                    <label> D) </label>
                    <input type="radio" name="correta<?php echo $i?>" value="d" />
                    <?php echo $linha["d"]; ?>
    </p>


                <p style = "font-size:20px">
                    <label> E) </label>
                    <input type="radio" name="correta<?php echo $i?>" value="e" />
                    <?php echo $linha["e"]; ?>
    </p>   
                <input type="hidden" name="id<?php echo $i?>" value="<?php echo $linha['id']; ?>" >
                <br><br>

            </div>
        <?php
        $i++;
    }
?>
<button type="submit" class="btn btn-success">Responder</button>