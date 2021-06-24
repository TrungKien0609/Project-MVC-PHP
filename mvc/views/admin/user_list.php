<?php require_once "./mvc/views/admin/Ad_include/header.php" ?>

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Rank</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                <?php if(isset($data['userList'])){
                     $i=1;
                     foreach($data['userList'] as $item){
                    ?>
                    <tr class="odd gradeX" align="center">
                        <td><?php echo $i;$i++;?></td>
                        <td><?php echo $item['name']?></td>
                        <td><?php echo $item['email']?></td>
                        <td><?php echo $item['rank']?></td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="<?php echo ROOT ?>admin/UserDelete/<?php echo $item['url_address']?>"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="<?php echo ROOT ?>admin/UserEdit/<?php echo $item['url_address']?>">Edit</a></td>
                    </tr>
                    <?php }}?>
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
<?php require_once "./mvc/views/admin/Ad_include/footer.php" ?>