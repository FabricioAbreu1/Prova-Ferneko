<?php include ("./cabecalho.php");?>

<?php
include "conexao.php";
$corretas = 0;

?>



<?php
$i=0;
for ($i=0 ; $i<15;$i++ ){
    $query = "select * from questoes where Id=".$_POST['id'.$i] ;  
    $resultado = mysqli_query($conexao, $query);
    $linha = mysqli_fetch_array($resultado)
        ?>


            <div style="width: 100%; border:1px solid;"> 
                <h1><?php echo $linha["pergunta"]; ?></h1>

             
                <p <?php if(strtolower( $linha ['correta'])== 'a' ){echo  "style='background-color:#00FF00'"; }elseif($_POST['correta'.$i] == 'a'){echo  "style='background-color:#FF0000'"; } if(strtolower( $linha ['correta'])==$_POST['correta'.$i]){$pontuação++; }?>>    
                    <label> a) </label>
                    <?php echo $linha["a"]; ?>
</p>
                


                <p <?php if(strtolower( $linha ['correta'])== 'b' ){echo  "style='background-color:#00FF00'"; }elseif($_POST['correta'.$i] == 'b'){echo  "style='background-color:#FF0000'"; } if(strtolower( $linha ['correta'])==$_POST['correta'.$i]){$pontuação++; }?>>
                    <label> b) </label>
                    <?php echo $linha["b"]; ?>
</p>


            
                <p <?php if(strtolower( $linha ['correta'])== 'c' ){echo  "style='background-color:#00FF00'"; }elseif($_POST['correta'.$i] == 'c'){echo  "style='background-color:#FF0000'"; } if(strtolower( $linha ['correta'])==$_POST['correta'.$i]){$pontuação++; } ?>>
                    <label> c) </label>
                    <?php echo $linha["c"]; ?>
                
</p>


                <p <?php if(strtolower( $linha ['correta'])== 'd' ){echo  "style='background-color:#00FF00'"; }elseif($_POST['correta'.$i] == 'd'){echo  "style='background-color:#FF0000'"; } if(strtolower( $linha ['correta'])==$_POST['correta'.$i]){$pontuação++; }?>>
                    <label> d) </label>
                    <?php echo $linha["d"]; ?>
</p>


                <p <?php if(strtolower( $linha ['correta'])== 'e' ){echo  "style='background-color:#00FF00'"; }elseif($_POST['correta'.$i] == 'e'){echo  "style='background-color:#FF0000'"; } if(strtolower( $linha ['correta'])==$_POST['correta'.$i]){$pontuação++; } ?>>
                    <label> e) </label>
                    <?php echo $linha["e"]; ?>
</p>   

                <br>


                <?php echo $corretas?>
            </div>
          <?php
          } 
          ?>   
