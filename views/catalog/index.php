<?php
include(ROOT . "/views/layouts/header.php");
?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Catalog</h2>
                    <div class="panel-group category-products">
                        <?php foreach ($categories as $categItem) : ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="/category/<?= $categItem['id'] ?>"><?= $categItem['name'] ?></a></h4>
                                </div>
                            </div>
                        <?php
                        endforeach ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items">
                    <!--features_items-->
                    <h2 class="title text-center">Tracks</h2>
                    <?php foreach ($tracks as $track) : ?>
                        <div class="col-sm-12">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class=" col-sm-4">
                                        <img id="imgUpdate" src="\template\images\<?= $track['image'] ?>" height="150" width="200" alt="" />
                                    </div>
                                    <div class="col-sm-8">
                                    <h3> <a href="/track/<?= $track['id'] ?>"><?= $track['name'] ?></a></h3>
                                    <audio controls>
                                        <source src="/template/music/<?= $track['name'] ?>">
                                    </audio>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    endforeach ?>
                </div>
                <!--features_items-->

            </div>
        </div>
    </div>
</section>
<?php
include(ROOT . "/views/layouts/footer.php");
?>