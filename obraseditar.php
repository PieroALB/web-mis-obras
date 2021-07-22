<?php include("header.php")?> 

<?php 
  $fileget =  $_GET["id"];
  $title =  explode(".",$fileget);
?>

<section class="border border-light w-50 p-1">
  <form action="obrasalmacenada.php" class="contain-fluid h-auto" method="post">
    <div class="form-group" >
      <label for="title">Titulo de la Obra</label>
      <input type="text" name="newtitle" id="title" class="form-control" autofocus placeholder="Titulo Obra (palabras separada por guion)" value="<?php echo $title[0] ?>">
      </label>
    </div>
    <div class="form-group">
      <textarea name="newredaccion" placeholder="Redaccion" class="form-control" id="redaccion"><?php echo $_COOKIE[$title[0]];?></textarea>
    </div>
    <button class="btn btn-outline-success" name="btnupdate">Actualizar Obra</button>
  </form>
</section>

<?php include("footer.php")?>