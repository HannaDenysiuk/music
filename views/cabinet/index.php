<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <h1>User account</h1>
            
            <h3>Hello, <?php echo $user['name'];?>!</h3>
            <ul>
                <li><a href="/cabinet/edit">Edit data</a></li>
                <?php if(AdminBase::checkAdmin()): ?>
                <li><a href="/admin">Admin panel</a></li>
                <?php endif ?>
            </ul>
            
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>