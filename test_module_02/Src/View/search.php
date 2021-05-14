<h2>Kết quả tìm tiếm mặt hàng</h2>
<table class="table">
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Loại hàng</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($product as $key => $product) : ?>
            <tr>
                <td><?php echo ++$key;  ?></td>
                <td><?php echo $product['name'] ?></td>
                <td><?php echo $product['type_product'] ?></td>
                <td> <a href="./index.php?page=edit&id=<?php echo $product['id']; ?>" class="btn btn-sm">Chỉnh sửa</a></td>
                <td> <a href="./index.php?page=delete&id=<?php echo $product['id']; ?>" class="btn btn-warning btn-sm">xóa</a></td>

            <?php endforeach; ?>
    </tbody>
</table>