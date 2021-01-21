<?php require("header.php"); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Update Article Page</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Article Page</li>
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
                <h3 class="card-title">Title</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fas fa-times"></i></button>
                </div>
            </div>
            <div class="card-body">

                <form role="form" action="/adminarticle/postupdate" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" value="<?= $dataarticle->title; ?>" class="form-control" placeholder="Title">
                        </div>
                        <div class="form-group">
                            <label>Category</label>

                            <select name="list" class="form-control">
                                <?php foreach ($data as $value) : ?>
                                    <option value="<?= $value['id'] ?>" <?= ($value['id'] == $dataarticle->catid) ? "selected" : "" ?>><?php echo $value['name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Paragraph</label>
                            <input type="text" name="paragraph" value="<?= $dataarticle->paragraph; ?>" class="form-control" placeholder="Paragraph">
                        </div>
                        <div class="form-group">
                            <img src="<?= CSS_PATH; ?>img/<?= $dataarticle->img; ?>" width="70" height="70">
                            <label>Img</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="img" value="<?= $dataarticle->img; ?>" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="">Upload</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->
                    <input type="hidden" name="id" value="<?= $dataarticle->id ?>">

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>


            </div>
            <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php require("footer.php"); ?>