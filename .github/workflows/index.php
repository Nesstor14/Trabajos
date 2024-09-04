<form action="calcular.php" method="post">
  <h2>Ingrese los datos de los productos</h2>
  <?php for ($i = 1; $i <= 10; $i++) { ?>
    <label>Producto <?php echo $i; ?>:</label>
    <input type="number" name="cantidad[]" placeholder="Cantidad">
    <input type="number" name="precio[]" placeholder="Precio">
    <br>
  <?php } ?>
  <input type="submit" value="Calcular">
</form>
