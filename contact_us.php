<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact_us </title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
        integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            font-family: "Roboto", sans-serif;
            line-height: 1.4;
            font-weight: 300;
            scroll-behavior: smooth;
            background-color: #918b8b;
        }

        section {
            scroll-margin: 50px;
        }

        ul {
            list-style: none;
        }

        a {
            text-decoration: none;
            color: white;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        header {
            background-color: #270082;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 5px 5px 5px rgb(0, 0, 0, 0.5);
        }

        nav {
            display: flex;
            justify-content: space-between;
            color: white;
            align-items: center;
            padding: 20px;
        }

        nav ul {
            display: flex;
            gap: 20px;
            font-size: 15px;
        }

        nav ul li {
            border-bottom: 2px solid transparent;
            transition: 0.2s ease-in-out;
        }

        nav ul li:hover {
            border-bottom: 2px solid white;
            transition: 0.2s ease-in-out;
        }


        .logo {

            font-size: 32px;
            font-weight: 600;
        }

        .formin {
            border-radius: 20px;
            width: 410px;
            height: 50px;
            padding: 5px 5px 5px 15px;
        }

        .mybtn {
            margin-bottom: 10px;
            box-shadow: 2px 2px 10px black;
            width: 120px;
            height: 50px;
            border-radius: 30px;
            font-weight: bold;
            color: black;
        }

        .mybtn:active {
            background-color: black;
            color: white;
        }
    </style>
</head>

<body>
<?php include 'spin.php'; ?>
    <header>
        <nav class="container">
            <div class="logo">
                Local-Bank
            </div>

            <ul>
              <li>
                <a href="index.php">
                Home
                </a>
              </li>

              <li>
                <a href="send_money.php">
                Send Money
                </a>
              </li>

              <li>
                <a href="all_cust.php">
                View All Customers
                </a>
              </li>
                
              <li>
                <a href="transactions.php">
                Transactions
                </a>
              </li>
               
              <li>
                <a href="contact_us.php">
                Contact Us
                </a>
              </li>
               
              <li>
                <a href="about_us.php">
                About Us
                </a>
              </li>
               

            </ul>
        </nav>

    </header>

    
    <?php

$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
	die("Connection not established: ".mysqli_connect_error());
}else{

if($_SERVER['REQUEST_METHOD']== 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['message'];
    
    $sql = "INSERT INTO `contactus` (`name`, `email`, `message`) VALUES ('$name', '$email', '$msg')";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo '<div class="alert alert-success d-flex align-items-center" role="alert">
        <div>   
        <i class="fas fa-check-circle"></i>
          Thank you '.$name.' for contacting us!
        </div>
      </div>';
    }else{
        echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
        <div>
        <i class="fas fa-times-circle"></i>
        Oops '.$name.'! Something went wrong!
        </div>
      </div>';
    }
}
}

?>



    <center>
        <div class="container" style="padding:10px 80px 10px 80px; margin-top:2%;">
            <div
                style="width:80%; background-color:rgba(0,0,0,.5); padding:5px 5px 5px 5px; border-radius:30px; box-shadow: 2px 2px 10px gray;">
                <h1 style=" color:white;">Contact Us</h1>
            </div>

            <div class="container"
                style=" backdrop-filter: blur(5px);  border-radius:5px; padding: 20px 20px 20px 20px; margin-top:50px; width:60%;">
                <form action="contact_us.php" method="post">
                    <input type="text" class="formin form-control" name="name" id="" placeholder="Name"><br><br>
                    <input type="email" class="formin form-control" name="email" id="" placeholder="Email"><br><br>
                    <textarea name="message" class="" style="border-radius:20px; padding: 5px 5px 5px 15px;"
                        placeholder="Enter your message" rows="5" cols="47" id=""></textarea>
                    <br><br><input class="btn mybtn btn-outline-light" type="submit" value="Submit">
                </form>
            </div>
        </div>

    </center>

    

</body>

</html>