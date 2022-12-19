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
                        <?php foreach ($categories as $categoryItem) : ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="/category/<?= $categoryItem['id'] ?>" class="<?php if ($product['category_id'] == $categoryItem['id']) echo 'active'; ?>">
                                            <?= $categoryItem['name'] ?>
                                        </a>
                                    </h4>
                                </div>
                            </div>

                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <h2 class="title text-center"><?= $categ  ?></h2>
                <div class="product-details">
                    <div class="row">
                        <div class="product-image-wrapper">
                            <div class="col-sm-4">
                                <div class="single-product">
                                    <img src="/template/images/<?= $track['image'] ?>" height="200" width="200" alt="" />
                                </div>
                            </div>
                            <div class="col-sm-8">

                                <h2><?= $track['name'] ?></h2>
                                <audio controls>
                                    <source src="/template/music/<?= $track['name'] ?>">
                                </audio>
                                <h5> Description</h5>
                                <p><?= $track['description'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/product-details-->

            </div>
        </div>
    </div>
</section>


<br />
<br />

<?php
include(ROOT . "/views/layouts/footer.php");
?>