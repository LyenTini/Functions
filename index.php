<?php require "Termek_model.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bence gyakorlás</title>
</head>
<body>
    <table>
        <thead>
            <!-- egy sorban 3 oszlop : tr>th*3 +tab -->
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>PRICE</th>
            </tr>
        </thead>
    <tbody>

    <?php 
    $teszt= new Termek_model();
    $termekek = $teszt->get_termekek();
    ?>

    <?php foreach ($termekek as $termek): ?>
        <tr>
            <td><?php echo $termek["id"]; ?></td>
            <td><?php echo $termek["name"]; ?></td>
            <td><?php echo $termek["price"]; ?></td>
        </tr>
    <?php endforeach; ?>

    </tbody>
</body>
</html>