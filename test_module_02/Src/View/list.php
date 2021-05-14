<h2>Danh sách sản phẩm</h2>
<table class="table table-striped">
  <thead>
    <tr style="background-color: #33CC66;">
      <th>STT</th>
      <th>Tên sản phẩm</th>
      <th>Loại sản phẩm</th>
      <th>Chức năng</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($products as $key => $product) : ?>
      <tr>
        <td><?php echo ++$key;  ?></td>
        <td><?php echo $product['name'] ?></td>
        <td><?php echo $product['type_product'] ?></td>
        <td> <a href="./index.php?page=edit&id=<?php echo $product['id']; ?>" class="btn btn-sm">Chỉnh sửa</a>|<a href="./index.php?page=delete&id=<?php echo $product['id']; ?>" class="btn btn-sm">Xóa</a></td>
      <?php endforeach; ?>
  </tbody>
</table>