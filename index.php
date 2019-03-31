<?php
require 'upload.php';
?>
<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="form.css">
    <title>Uploader de fichier</title>
</head>
<body>
<h1>Upload Files</h1>
<form class="col-8" action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="file">Upload File</label>
        <input type="file" class="form-control-file" multiple="multiple"  id="file" name="files[]">
    </div>
    <?php

    if (isset($error)) {
    ?>
        <div class="alert alert-danger" role="alert">
            <?= $error ?>
        </div>
    <?php
    }
    ?>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
if (isset($results)) {
?>
<div class="result-box col-8">
    <?php
    foreach ($results as $result)
    {
        echo $result;
    }
    ?>
</div>
<?php
}

if (!empty($it)) {
?>

<table class="table col-6">
    <thead>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Edit</th>
    </tr>
    </thead>
    <tbody>

    <?php

    $y = 0;

    foreach ($it as $fileinfo)
    {
        $y += 1;
    ?>
        <tr>
            <th scope="row"><?= $y ?></th>
            <td><?php echo $fileinfo->getFilename() ?></td>
            <td><a href="?delete=<?php echo $fileinfo->getFilename()?>">Delete</a></td>
        </tr>
<?php
    }
?>
 </tbody>
</table>
<?php
}
?>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
