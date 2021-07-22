<?php include("header.php"); ?> 
  <section class="contain w-75 p-1 border border-primary mt-1 m-auto d-flex flex-column" >
    <article class="contain-fluid bg-dark mb-1 text-white p-1" ><p class="display-4 text-center">Obras Literarias</p></article>
    <?php 
     error_reporting(0);
      if(isset($_POST["btnsave"])){
        $title =  $_POST["title"];
        $redaccion =  $_POST["redaccion"];   
        setcookie($title,$redaccion,time() + 84600); 
        $myfile =  fopen($title.".txt","w");
        $text = $redaccion;
         fwrite($myfile,$text);
        fclose($myfile);
      }   
      ?>

      <?php foreach ($_COOKIE as $key => $value) {?>
      <article class=" contain-fluid border border-primary mb-1 text-dark p-1">
        <h3 class="text-center text-uppercase"><?php echo $key;?></h3>
        <button class="btn btn-outline-primary mt-1"><a href="obraseditar.php?id=<?php echo $key.'.txt';?>">Editar Redaccion</a></button></button>
      </article>
      <?php
      }
          
    ?>


  </section> 
<?php include("footer.php");?>
     