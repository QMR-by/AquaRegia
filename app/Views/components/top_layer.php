<!DOCTYPE html>
<html lang="en">
    <head>
        <title>AquaRegia</title>
        <link rel="icon" type="image/ico" href="">
        <!-- Bootstrap/CSS -->
        <link href=" <?php echo BOOTSTRAP.'css/bootstrap.css'; ?> " rel="stylesheet">
        <?php foreach ($css as $key) :?>
            <link href="<?php echo CSS.$key; ?>" rel="stylesheet">
        <?php endforeach ?>

        <!-- JavaScript For Buttons -->
        <script src=" <?php echo BOOTSTRAP.'js/bootstrap.min.js'; ?> "></script>
    </head>

    <body>