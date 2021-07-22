<?php include("header.php")?> 
<section class="border border-light w-50 p-1">
  <form action="obrasalmacenada.php" class="contain-fluid h-auto" method="post">
    <div class="form-group" >
      <label for="title">Titulo de la Obra</label>
      <input type="text" name="title" id="title" class="form-control" autofocus placeholder="Titulo Obra (palabras separada por guion)" >
      </label>
    </div>
    <div class="form-group">
      <textarea name="redaccion" placeholder="Redaccion" class="form-control" id="redaccion"></textarea>
    </div>
    <button class="btn btn-outline-success" name="btnsave">Guardar Obra</button>
  </form>
</section>
<?php include("footer.php")?>
  
  
  







  