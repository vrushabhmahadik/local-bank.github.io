<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
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

<body>
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
        <div class="container" style="margin-top: 1%; padding:10px 80px 10px 80px; ">
            <div
                style="width:80%; background-color:rgba(0,0,0,.5); padding:5px 5px 5px 5px; border-radius:30px; box-shadow: 2px 2px 10px gray;">
                <h1 style=" color:white;">About Us</h1>
            </div>
            <br><br>
            <img src="vrushabh.jpg" alt="" style="width:20%; box-shadow:2px 2px 15px black;">
            <br><br>
            <p style="color:white;">This website is created by</p>
            <h1 style="color:white; text-shadow:2px 2px 2px gray;">Vrushabh Mahadik</h1>
            <p style="color:white;"><b>Intern at Sparks Foundation <br> D.B.J College Chiplun (Mumbai Univercity)</b>
            </p>
    </center>

</body>

</html>