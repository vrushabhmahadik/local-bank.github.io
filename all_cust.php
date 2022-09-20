<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All-Customer</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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

    <center>



        <div class="container" style="margin-top: 2%; padding:10px 80px 10px 80px; ">
            <div
                style="width:80%; background-color:rgba(0,0,0,.5); padding:5px 5px 5px 5px; border-radius:30px; box-shadow: 2px 2px 10px gray;">
                <h1 style=" color:white;">All Customers</h1>
            </div>

            <?php

    

$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
    die("Connection not established: ".mysqli_connect_error());
}else{

    $sql = "SELECT * FROM `users`";
    $result = mysqli_query($conn, $sql);
?>
        <table class="table table-dark" style="margin-top: 30px;">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Account No</th>
                    <th scope="col">Balance</th>
                    <th scope="col">Send Money From</th>
                </tr>
            </thead>

            <style>
                .mybtn {

                    box-shadow: 2px 2px 10px black;
                    border-radius: 30px;
                    font-weight: bold;
                    background-color: lightgreen;
                    color: green;
                }

                .mybtn:active {
                    background-color: green;
                    color: lightgreen;
                }
            </style>
            <?php
echo "<tbody>";
    while($row = mysqli_fetch_assoc($result)){
    echo    '
        <tr>
          <td>'.$row['name'].'</td>
          <td>'.$row['email'].'</td>
          <td>'.$row['accno'].'</td>
          <td>'.$row['blc'].'</td>
          <td style="padding:10px 10px 10px 10px">
          <a href="send_money.php?reads='.$row['accno'].'"
          <button type="button" class="btn mybtn btn-outline-light">Send Money</button>
          </a>
          </td>
        </tr>';
}

}
echo "</tbody>";
?>
    </div>
    </center>

</body>

</html>