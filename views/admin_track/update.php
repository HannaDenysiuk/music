<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br />

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Adminpanel</a></li>
                    <li class="active">Edit track</li>
                    <li><a href="/admin/track">Tracks management</a></li>
                </ol>
            </div>


            <h4>Edit track #<?php echo $id; ?></h4>

            <br />

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post" enctype="multipart/form-data">

                        <p><?php echo $track['name']; ?></p>
                       
                        <p>Category</p>
                        <select name="categoryid">
                            <?php if (is_array($categoriesList)) : ?>
                                <?php foreach ($categoriesList as $category) : ?>
                                    <option value="<?php echo $category['id']; ?>" <?php if ($track['categoryid'] == $category['id']) echo ' selected="selected"'; ?>>
                                        <?php echo $category['name']; ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>

                        <br /><br />

                        <p>Picture</p>
                        <img id="imgUpdate" src="/template/images/<?= $img ?>" height="200" width="200" alt="" />
                        <input id="imgInp" type="file" name="image" placeholder="" value="<?php echo $track['image']; ?>">

                        <p>Descriptiopn</p>
                        <textarea name="description"><?php echo $track['description']; ?></textarea>

                        <br /><br />

                        <br /><br />

                        <p>Status</p>
                        <select name="status">
                            <option value="1" <?php if ($track['status'] == 1) echo ' selected="selected"'; ?>>show</option>
                            <option value="0" <?php if ($track['status'] == 0) echo ' selected="selected"'; ?>>hide</option>
                        </select>

                        <br /><br />

                        <input type="submit" name="submit" class="btn btn-default" value="Save">

                        <br /><br />

                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>