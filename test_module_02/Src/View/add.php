<?php
// if(isset($message)){
//   echo "<p class='alert-info'>$message</p>";
// }
?>

<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>Thêm mới sản phẩm</h1>
        </div>
        <div class="col-12">
            <form method="post">
                <div class="form-group">
                    <label>Tên sản phẩm</label>
                    <input type="text" class="form-control" name="name" placeholder="Nhập tên" required>
                </div>
                <div class="form-group">
                    <label>Loại sản phẩm</label>
                    <br />
                    <div class="input-group">
                        <select name="type_product" class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                            <option selected>Chọn loại hàng...</option>
                            <option value="rau">Rau</option>
                            <option value="thịt">Thịt</option>
                            <option value="cá">Cá</option>
                            <option value="củ quả">Củ quả</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label>Giá</label>
                    <input type="number" class="form-control" name="price" placeholder="Nhập giá" required>
                </div>
                <div class="form-group">
                    <label>Số lượng</label>
                    <input type="number" class="form-control" name="amount" placeholder="Nhập số lượng" required>
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <textarea class="form-control" name="description" placeholder="Nhập mô tả"> </textarea>
                </div>

                <button type="submit" class="btn btn-primary">Thêm mới</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </div>
    </div>
</div>