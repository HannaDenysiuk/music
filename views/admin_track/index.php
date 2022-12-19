<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Adminpanel</a></li>
                    <li class="active">Tracks management</li>
                </ol>
            </div>

            <a href="/admin/track/create" class="btn btn-default back"><i class="fa fa-plus"></i> Add new track</a>
            
            <h4>List of tracks</h4>

            <br/>

            <table class="table-bordered table-striped table">
                <tr>
                    <th>ID track</th>
                    <th>name</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($tracks as $track): ?>
                    <tr>
                        <td><?php echo $track['id']; ?></td>
                        <td><?php echo $track['name']; ?></td> 
                        <td><a href="/admin/track/update/<?php echo $track['id']; ?>" title="Edit"><i class="fa fa-pencil-square-o"></i></a></td>
                        <td><a href="/admin/track/delete/<?php echo $track['id']; ?>" title="Delete"><i class="fa fa-times"></i></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

