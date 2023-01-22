<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete project</title>
</head>

<body>
    <h1>page delete</h1>
    <?php

    $my_id = $_GET["id2"];

    $data = new mysqli("localhost", "root", "", "data_myprojects");

    $table = $data->query("select * from table_myprojects where id = $my_id");

    if ($table->num_rows > 0) {
        while ($row = $table->fetch_assoc()) {
            $id = $row["id"];
        }
    }

    if (isset($_GET["btn"])) {

        $im_id = $_GET["here_id"];

        $table = $data->query("DELETE FROM `table_myprojects` WHERE id = $im_id");

        if ($table > 0) {
            header("Location:indx.php");
        } else {
            print "لم يتم الحذف يوجد خطا";
        }
    }
    ?>
    <form action="" method="GET">
        <input type="number" readonly value="<?php print $id ?>" name="here_id">
        <br>
        <br>
        <input type="submit" name="btn">
    </form>
</body>

</html>