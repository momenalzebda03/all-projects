<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="sginup.css">
    <link rel="stylesheet" href="all.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="sign up">
    <title>sign up add</title>
</head>

<body>
    <div class="div-main">
        <?php

        if (isset($_POST["submit"])) {

            $my_name = $_POST["name"];
            $my_pas = $_POST["password"];

            $data = new mysqli("localhost", "root", "", "data_myprojects");

            $table = $data->query("select * from table_sinup");

            if ($table->num_rows > 0) {
                while ($row = $table->fetch_assoc()) {
                    if ($row["name"] == $my_name && $row["pass"] == $my_pas) {
                        header("Location:add_project.php");
                    } else {
                        print "الرجاء ادخال الاسم وكلمة المرور بطريقة صحيحة";
                    }
                }
            }
        }
        ?>
        <h1>sign up</h1>
        <form action="" method="POST">
            <input class="input" type="text" placeholder="Name *" name="name" autofocus required>
            <br>
            <br>
            <input class="input" type="password" placeholder="password *" name="password" required>
            <br>
            <br>
            <input class="button" type="submit" value="login" name="submit">
        </form>
        <p class="pone">have account? <span>login here</span></p>
        <P>-----------------------------------------</P>
        <p class="ptow">or reqister with</p>
    </div>
</body>
<style>
    body {
        background-color: #2196F3;
        text-transform: capitalize;
        display: flex;
        justify-content: center;
    }

    .div-main {
        background-color: white;
        margin-top: 5%;
        padding: 3%;
        border-radius: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .div-main form input {
        width: 332px;
        height: 40px;
    }

    .div-main form .input {
        border-bottom: 2px;
        border-style: solid;
        border-color: transparent transparent #ddd transparent;
    }

    .button {
        background-color: #2196F3;
        color: white;
        text-align: center;
        width: 332px;
        border-radius: 6px;
        padding: 2%;
        border: none;
        cursor: pointer;
        font-size: 20px;
    }
</style>

</html>