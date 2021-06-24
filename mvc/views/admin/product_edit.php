<?php require_once "./mvc/views/admin/Ad_include/header.php" ?>

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Product
                    <small>Edit</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <p style="color:red; lineheight:1rem; font-size:2rem"><?php if (isset($data['result']) && $data['result'] != "complete") echo $data['result']; ?></p>
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" name="txtName" placeholder="Please Enter Productname" required value="<?= $data['product_detail']['product_name']?>" />
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="number" min="1" class="form-control" name="Price" placeholder="Please Enter Price ( VND )" required value="<?= $data['product_detail']['price']?>" />
                    </div>
                    <div class="form-group">
                        <label>Production Company</label>
                        <input class="form-control" rows="3" name="txtCompany" placeholder="Please Enter Production Company" required value="<?= $data['product_detail']['production_company']?>" />
                    </div>
                    <div class="form-group">
                        <label>Quantity</label>
                        <input type="number" name="quantity" class="form-control" min="1" placeholder="Please Enter Quantity" required value="<?= $data['product_detail']['quantity']?>" />
                    </div>
                    <div class="form-group">
                        <label>Product Description</label>
                        <textarea class="form-control" rows="3" placeholder="Please Enter Description ( Max 250 characters )" maxlength="250" required name="description" ><?= $data['product_detail']['description']?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Slag Description</label>
                        <input type="text" name="slag" class="form-control" placeholder="Please Enter Slag Description ( Max 100 characters )" maxlength="100" required  value="<?= $data['product_detail']['slag_description']?>" />
                    </div>
                    <div class="form-group">
                        <p style="color: red;" id="file_error"></p>
                        <label>Images ( 4 file )</label>
                        <input type="file" name="ProductImages[]" multiple id="images" accept="image/jpeg, image/png">
                        <label id="upload_field"><?php for($i=1;$i<=4;$i++){if($data["product_detail"]["image$i"] != NULL) echo $data["product_detail"]["image$i"]."<br>" ;} ?></label>
                    </div>
                    <div class="form-group">
                        <label>Product Category</label>
                        <select name="category" id="" class="form-control">
                            <option value="">Select Category</option>
                            <?php if (!empty($data['CateList'])) {
                                foreach ($data['CateList'] as  $value) {
                            ?>
                                    <option value="<?php echo $value ?>" <?php if($data['product_detail']['category'] == $value) echo "selected"?>><?php echo $value ?></option>
                            <?php }
                            } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Product Status</label>
                        <label class="radio-inline">
                            <input name="status" value="show" checked type="radio">Visible
                        </label>
                        <label class="radio-inline">
                            <input name="status" value="hide" type="radio" <?php if($data['product_detail']['status'] == "hide") echo "checked"?>>Invisible
                        </label>
                    </div>
                    <button type="submit" class="btn btn-default">Edit Product</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                    <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
<script>
    window.onload = function() {
        <?php if (isset($data['result']) && $data['result'] == "complete") { ?>
            alert("Completed Edit product");
        <?php } ?>
    }
</script>
<script src="<?php echo ADMIN ?>js/add_product.js"></script>
<?php require_once "./mvc/views/admin/Ad_include/footer.php" ?>