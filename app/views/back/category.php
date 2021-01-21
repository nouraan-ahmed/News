<?php require("header.php"); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Category Page</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Category Page</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><a href="add" class="btn btn-info">Add</a></h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fas fa-times"></i></button>
                </div>
            </div>
            <div class="card-body">

                <table class="table">
                    <thead>
                        <tr>

                            <th>Name</th>
                            <th>Img</th>
                            <th>Icon</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $d) : ?>
                            <tr>

                                <td><?= $d['name'] ?></td>
                                <td><img src="<?= CSS_PATH; ?>img/<?= $d['img'] ?>" width="70" height="70"></td>
                                <td><?= $d['icon'] ?></td>
                                <td><a href="update/<?= $d['id'] ?>" class="btn btn-success">Update</a></td>
                                <td><a href="DeleteCategory/<?= $d['id'] ?>" class="btn btn-danger">Delete</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
            <!-- /.card-body -->

            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php require("footer.php"); ?>