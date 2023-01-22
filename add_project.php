<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add project</title>
</head>

<body>

    <?php

    if (isset($_POST["btn"])) {

        $my_title = $_POST["title"];
        $my_string = $_POST["string"];
        $my_link = $_POST["link"];
        $my_image = basename($_FILES["image"]["name"]);

        $data = new mysqli("localhost", "root", "", "data_myprojects");

        $table = $data->query("INSERT INTO `table_myprojects`(`title`, `string_projects`, `image_projects`, `link`) VALUES ('$my_title','$my_string','$my_image','$my_link')");

        if ($table > 0) {
            header("Location:indx.php");
        } else {
            print "يوجد خطا لم يتم حفظ المشروع";
        }
    }
    ?>

    <form action="" method="POST" enctype="multipart/form-data">
        <input type="text" placeholder="enter the title" name="title" required>
        <br>
        <br>
        <input type="text" placeholder="enter the string" name="string" required>
        <br>
        <br>
        <input type="text" placeholder="enter the link" name="link" required>
        <br>
        <br>
        <input type="file" name="image" required>
        <br>
        <br>
        <input type="submit" name="btn">
    </form>
</body>

</html>