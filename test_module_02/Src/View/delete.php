<h1>Bạn chắc chắn muốn xóa?</h1>
<h3><?php echo $product['name']; ?></h3>
<form action="./index.php?page=delete" method="post">
  <input type="hidden" name="id" value="<?php echo $product['id']; ?>" />
  <div class="form-group">
    <input type="submit" value="Xóa" class="btn btn-outline-danger" />
    <a class="btn btn-outline-secondary" href="index.php">Hủy</a>
  </div>
</form>