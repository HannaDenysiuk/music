<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Adminpanel</a></li>
                    <li><a href="/admin/category">Categories management</a></li>
                    <li class="active">Delete</li>
                </ol>
            </div>


            <h4>Delete category #<?php echo $id; ?></h4>


            <p>You really want to delete this category?</p>

            <form method="post">
                <input type="submit" name="submit" value="Remove" />
            </form>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

