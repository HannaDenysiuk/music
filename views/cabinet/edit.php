<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-4 col-sm-offset-4 padding-right">

                <?php if ($result) : ?>
                    <p>Data is edited!</p>
                <?php else : ?>
                    <?php if (isset($errors) && is_array($errors)) : ?>
                        <ul class="error-info">
                            <?php foreach ($errors as $error) : ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <div class="signup-form">
                        <!--sign up form-->
                        <h2>Data editing</h2>
                        <form action="#" method="post">
                            <p>Name:</p>
                            <input type="text" name="name" placeholder="name" value="<?php echo $name; ?>" />

                            <p>Password:</p>
                            <input type="password" name="password" placeholder="password" value="<?php echo $pwd; ?>" />
                            <br />
                            <input type="submit" name="submit" class="btn btn-default" value="Submit" />
                        </form>
                    </div>
                    <!--/sign up form-->

                <?php endif; ?>
                <br />
                <br />
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>