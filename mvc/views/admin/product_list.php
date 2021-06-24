<?php require_once "./mvc/views/admin/Ad_include/header.php" ?>
<!-- Page Content -->
<div id="page-wrapper" style="overflow: scroll;">
    <div class="container-fluid" style="margin-right: 1rem;">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Product
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Production company</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Image1</th>
                        <th>Image2</th>
                        <th>Image3</th>
                        <th>Image4</th>
                        <th>Quantity</th>
                        <th>Date</th>
                        <th>slag_description</th>
                        <th>Status</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($data['productList'])) {
                            $i = 1;
                                foreach ($data['productList'] as $item) {
                            ?> 
                    <tr class="odd gradeX" align="center">
                        <td style="margin-right:2rem"><?php echo $i; $i++?> </td>
                        <td><?= $item['product_name']?></td>
                        <td><?= $item['production_company']?></td>
                        <td><?= $item['description']?></td>
                        <td><?= $item['category']?></td>
                        <td><?=  $item['price']?> VNĐ</td>
                        <td><img src="<?php if(isset($item['image1'])) echo ROOT.'upload/ProductImages/'.$item['image1'] ; else echo ROOT.'upload/ProductImages/defaultProduct.jpg'?> " alt=""></td>
                        <td><img src="<?php if(isset($item['image2'])) echo ROOT.'upload/ProductImages/'.$item['image2'] ; else echo ROOT.'upload/ProductImages/defaultProduct.jpg'?> " alt=""></td>
                        <td><img src="<?php if(isset($item['image3'])) echo ROOT.'upload/ProductImages/'.$item['image3'] ; else echo ROOT.'upload/ProductImages/defaultProduct.jpg'?> " alt=""></td>
                        <td><img src="<?php if(isset($item['image4'])) echo ROOT.'upload/ProductImages/'.$item['image4'] ; else echo ROOT.'upload/ProductImages/defaultProduct.jpg'?> " alt=""></td>
                        <td><?= $item['quantity']?></td>
                        <td><?= $item['date']?></td>
                        <td><?= $item['slag_description']?></td>
                        <td><?= $item['status']?></td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="<?php echo ROOT ?>admin/ProductDelete/<?php echo $item['product_url']?>"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="<?php echo ROOT ?>admin/ProductEdit/<?php echo $item['product_url']?>">Edit</a></td>
                    </tr>
            <?php }
                            } ?>
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
<script>
        window.onload = function(){
            <?php if(isset($data['delete_product']) && $data['delete_product'] == "complete"){ ?>
                alert("Completed delete product");
            <?php }?>
        }
</script>
<script src="<?php echo ADMIN ?>js/add_product.js"></script>
<?php require_once "./mvc/views/admin/Ad_include/footer.php" ?>