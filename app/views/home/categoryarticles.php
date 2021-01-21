<?php require("header.php"); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-9">
            <div class="blog-list clearfix">
                <div class="section-title">

                    <h3 class="color-green"><a title=""><?= $da->name; ?></a></h3>
                </div><!-- end title -->
                <?php foreach ($dataarticle as $a) : ?>
                    <div class="blog-box row mb-5">
                        <div class="col-md-4">
                            <div class="post-media">
                                <a title="">
                                    <img src="<?= CSS_PATH; ?>img/<?= $a['img']; ?>" class="img-fluid" width="70" height="70">
                                    <!-- <img src="upload/blog_square_01.jpg" alt="" class="img-fluid"> -->
                                    <div class="hovereffect"></div>
                                </a>
                            </div><!-- end media -->
                        </div><!-- end col -->

                        <div class="blog-meta big-meta col-md-8">
                            <h4><a title=""><?= $a['title'] ?></a></h4>
                            <p><?= $a['paragraph'] ?></p>
                            <small><a title=""><?= $da->name; ?></a></small>
                            <small><a title="">21 July, 2017</a></small>
                            <small><a title="">by Boby</a></small>
                        </div><!-- end meta -->
                    </div><!-- end blog-box -->
                <?php endforeach; ?>

            </div><!-- end blog-list -->

            <hr class="invis">

        </div><!-- end col -->


    </div>
</div>
<?php require("footer.php"); ?>