<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br />

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Admipanel</a></li>
                    <li><a href="/admin/category">Categories management</a></li>
                    <li class="active">Category edit</li>
                </ol>
            </div>


            <h4>Category edit "<?php echo $category['name']; ?>"</h4>

            <br />

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post">

                        <p>Name</p>
                        <input type="text" name="name" placeholder="" value="<?php echo $category['name']; ?>">

                        <br><br>

                        <input type="submit" name="submit" class="btn btn-default" value="Save">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>