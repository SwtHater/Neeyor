<!-- PHP file -->
<?php
session_start();

// Check if the POST variables are set
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check credentials
    if ($email === "jakir@gmail.com" && $password === "123456") {
        // Store user information in the session
        $_SESSION['user_email'] = $email;
        header("Location: all time/alltime.php");
        exit();
    } else {
        echo "Invalid credentials";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Assets/style/login.css">
    <script src="https://kit.fontawesome.com/3d8df9be04.js" crossorigin="anonymous"></script>
    <style>
        /* Global */
        * {
            margin: 0;
            padding: 0;
            font-family: "Times New Roman", Times, serif;
            box-sizing: border-box;
        }

        .flex {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .devider {
            border-top: 3px solid rgb(0, 0, 0);
            margin: 0 70px;
        }

        .a {
            text-decoration: none;
            color: black;
            font-size: 20px;
        }

        .li {
            list-style: none;
        }

        .overflow {
            overflow: hidden;
        }

        .underline {
            text-decoration: underline;
        }

        body {
            background: url(pexels-tirachard-kumtanom-733852.jpg);
            background-size: cover;
            background-position: center;
        }

        .success_message {
            text-align: center;
            top: 50px;
            size: 100px;
        }

        .container {
            width: 100%;
            height: 100vh;
            background-position: center;
            background-size: cover;
            position: relative;
            margin: 0px 0;
        }

        .form-box {
            width: 90%;
            max-width: 450px;
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #e6e6e6;
            padding: 40px 60px 40px;
            text-align: center;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        }

        .form-box h1 {
            font-size: 30px;
            margin-bottom: 60px;
            color: #000000;
            position: relative;
        }

        .form-box h1::after {
            content: "";
            width: 30px;
            height: 4px;
            border-radius: 3px;
            background: #050505;
            position: absolute;
            bottom: -12px;
            left: 50%;
            transform: translate(-50%);
        }

        .input-field {
            background: #c6c2c2;
            margin: 15px 0;
            border-radius: 3px;
            display: flex;
            align-items: center;
            max-height: 65px;
            overflow: hidden;
        }

        input {
            width: 100%;
            background: transparent;
            border: 0;
            outline: 0;
            padding: 18px 15px;
            font-size: 17px;
        }

        .input {
            width: 100%;
            background: transparent;
            border: 0;
            outline: 0;
            padding: 18px 15px;
            font-size: 17px;
        }

        .input_option {
            width: 50%;
            background: transparent;
            border: 0;
            outline: 0;
            padding: 18px 15px;
            font-size: 17px;
            margin-right: 10px;
        }

        .input_option option {
            background-color: #9c96966d;
        }

        .input-field i,
        .input-field label {
            margin-left: 15px;
            color: #232222;
        }

        form p {
            text-align: left;
            font-size: 13px;
        }

        form p a {
            text-decoration: none;
            color: #3c00a0;
        }

        .btn-field {
            width: 100%;
            display: flex;
            justify-content: space-between;
        }

        .btn-field button {
            flex-basis: 100%;
            background: transparent;
            color: #030303;
            height: 40px;
            border-radius: 20px;
            border: 0;
            outline: 0;
            cursor: pointer;
            transition: background 1s;
            font-size: 25px;
            border: solid;
            border-width: 1px;
            border-color: black;
        }

        .btn-field button:hover {
            background-color: rgba(2, 2, 2, 0.496);
        }

        .input-group {
            height: 170px;
        }

        .btn-field button.disable {
            background: #eaeaea;
            color: #555;
        }

        .Log_in_register {
            margin-top: 20px;
            display: grid;
        }

        .Log_in_register p {
            text-align: center;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <div class="container flex">
        <div class="form-box">
            <h1 id="title">Log In</h1>
            <form action="" method="post" id="signupForm">
                <div class="input-group">
                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" placeholder="Email" name="email" required>
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" placeholder="Password" name="password" required>
                    </div>
                </div>
                <div class="btn-field">
                    <button type="submit" id="signupBtn">Log In</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
