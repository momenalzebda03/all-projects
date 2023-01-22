<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.2-dist/css/all.min.css">
    <link rel="stylesheet" href="bootstrap-5.2.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-5.2.2-dist/css/indx.css">
    <title>all project</title>
</head>

<body>
    <!-- start header -->
    <div class="div_center">
        <h1>all <span>project</span>&copy;</h1>
        <a href="sginup_add.php" class="btn btn-danger button" style="background-color: green;">save project</a>
    </div>
    <!-- end header -->
    <!-- start contener -->
    <div class="div_conter">
        <p>Welcome to some of the developer's projects, momen Al-Zibda, I welcome you with all love &#128526;</p>
    </div>
    <div class="container">
        <div class="row">
            <?php
            $data = new mysqli("localhost", "root", "", "data_myprojects");

            $table = $data->query("select * from table_myprojects");

            if ($table->num_rows > 0) {
                while ($row = $table->fetch_assoc()) {
                    print "<div class='col-sm-12 col-md-6 col-lg-4'><p style='font-weight: bold;'>" . $row["title"] . "</p><a href='sginup_delete.php?id1=" . $row["id"] . "' class='btn btn-danger button'>delete project</a><br><br><p>" . $row["string_projects"] . "</p><div class='div_image'><a href='" . $row["link"] . "' target='_blank'><img src='image/" . $row["image_projects"] . "'></img></a></div></div>";
                }
            }
            ?>
        </div>
    </div>
    <!-- end contener -->
</body>
<script src="bootstrap-5.2.2-dist/js/all.min.js"></script>
<script src="bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js"></script>

</html>