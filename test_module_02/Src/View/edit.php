<?php echo $product['created']; ?>
<h2>Cập nhật thông tin sản phẩm</h2>
<form method="post" action="./index.php?page=edit">
    <input type="hidden" name="id" value="<?php echo $product['id']; ?>" />
    <div class="form-group">
        <label>Tên sản phẩm</label>
        <input type="text" name="name" value="<?php echo $product['name']; ?>" class="form-control" />
    </div>
    <div class="form-group">
        <label>Loại sản phẩm</label>
        <div class="input-group">
            <select name="type_product" class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                <option value="rau" <?php if($product['type_product'] === "rau" ) echo "selected" ?>>Rau</option>
                <option value="thịt" <?php if($product['type_product'] === "thịt" ) echo "selected" ?>>Thịt</option>
                <option value="cá" <?php if($product['type_product'] === "cá" ) echo "selected" ?>>Cá</option>
                <option value="củ quả" <?php if($product['type_product'] === "củ quả" ) echo "selected" ?>>Củ quả</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label>Giá</label>
        <input type="number" name="price" class="form-control" value="<?php echo $product['price']; ?>" />
    </div>
    <div class="form-group">
        <label>Số lượng</label>
        <input type="number" name="amount" class="form-control" value="<?php echo $product['amount']; ?>" />
    </div>
    <div class="form-group">
        <label>Mô tả</label>
        <textarea name="description" class="form-control"><?php echo $product['description']; ?></textarea>
    </div>
    <div class="form-group">
        <input type="submit" value="Chỉnh sửa" class="btn btn-outline-primary" />
        <a href="index.php" class="btn btn-outline-danger">hủy</a>
    </div>
</form>