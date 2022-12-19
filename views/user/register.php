<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-4 col-sm-offset-4 padding-right">
                <?php if($result): ?>
                    <p>You are registered</p>
                <?php else: ?>
                    <?php if(isset($errors) && is_array($errors)): ?>
                        <ul class="error-info">
                            <?php foreach($errors as $error): ?>
                                <li><?= $error ?></li>
                            <?php endforeach ?>
                        </ul>
                    <?php endif ?>
                    <div class="signup-form"><!--sign up form-->
                        <h2>Registration</h2>
                        <form method="post">
                            <input type="text" name="name" placeholder="name" value="<?= $name?>" />
                            <input type="email" name="email" placeholder="E-mail" value="<?= $email?>" />
                            <input type="password" name="password" placeholder="password" />
                            <input type="submit" name="submit" class="btn btn-default" value="Log in" />
                        </form>
                    </div><!--/sign up form-->
                <?php endif ?>
                <br/>
                <br/>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>