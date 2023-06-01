<?php

session_start();

include("connection.php");
include("functions.php");

$error = ""; //mainīgais lai saglabātu error ziņu

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {

        //nolasa no DB
        $query = "select * from users where user_name = '$user_name' limit 1";
        $result = mysqli_query($con, $query);

        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {

                $user_data = mysqli_fetch_assoc($result);

                if ($user_data['password'] === $password) {

                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: main.php");
                    die;
                }
            }
        }

        $error = "Nepareizs lietotājvārds un vai parole.";
    } else {
        $error = "Nepareizs lietotājvārds un vai parole.";
    }
}

?>


<!DOCTYPE html>
<html>

<head>
    <title>Autorizēšanās</title>
</head>

<body>

    <style type="text/css">
        #overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
        }

        #text {
            height: 25px;
            border-radius: 5px;
            padding: 4px;
            border: solid thin #aaa;
            width: 100%;
        }

        #button {
            padding: 10px;
            width: 100px;
            color: white;
            background-color: blue;
            border: none;
            border: 1px solid white;
            border-radius: 3px;
            cursor: pointer;
        }

        #box {
            background-color: grey;
            margin: auto;
            width: 300px;
            padding: 20px;
            border: 2px solid white;
            border-radius: 5px;
        }


        .error {
            color: red;
            font-size: 14px;
            margin-top: 10px;
        }
    </style>
    <div id="overlay">
        <div id="box">
            <form method="post" onsubmit="return PopupError();">
                <div style="font-size: 20px; margin: 10px; color: white;">Autorizēšanās</div>

                <input id="text" type="text" name="user_name" placeholder="Lietotājvārds" required><br><br>
                <input id="text" type="password" name="password" placeholder="Parole" required><br><br>

                <input id="button" type="submit" value="Ielogoties"><br><br>

                <a href="signup.php">Izveidot jaunu profilu</a><br><br>


    </form>
        </div>
    </div>
    <div class="banneris" style="padding: 30px;
        text-align: center;
        background: #1abc9c;
        color: white;
        font-size: 30px;">
        <h1>Koju top receptes</h1>
        <p>"Oho, šīs receptes ir tā vērtas!" -Gordons Remzijs</p>
    </div>



    <script>
        function PopupError() {
            var errorMessage = "<?php echo $error; ?>";
            if (errorMessage !== "") {
                alert(errorMessage);
                return false;
            }
            return true;
        }
    </script>
</body>

</html>