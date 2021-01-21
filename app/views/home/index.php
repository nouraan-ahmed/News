<?php require("header.php") ?>


<section class="section">
    <div class="container">
        <div class="row">
            <div style="margin:auto;" class="col-lg-8 col-md-6 col-sm-12 col-xs-12">

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <?php foreach ($dataarticle as $d) : ?>
                            <div class="blog-box">
                                <div class="post-media">
                                    <a href="single.html" title="">
                                        <img src="<?= CSS_PATH; ?>img/<?= $d['img']; ?>" height="370">
                                        <div class="hovereffect">
                                            <span></span>
                                        </div><!-- end hover -->
                                    </a>
                                </div><!-- end media -->
                                <div class="blog-meta big-meta">
                                    <h4><a title=""><?= $d['title']; ?></a></h4>
                                    <p><?= $d['paragraph']; ?></p>
                                    <small><a href="<?= CSS_PATH; ?>home/categoryarticles/<?= $d['catid']; ?>" title=""><?= $d['name']; ?></a></small>
                                    <small><a title="">24 July, 2017</a></small>
                                    <small><a title="">by Amanda</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->

                            <hr class="invis">

                        <?php endforeach; ?>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end col -->


        </div><!-- end row -->

        <hr class="invis1">



    </div><!-- end container -->
</section>

<?php require("footer.php") ?>