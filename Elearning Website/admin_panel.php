<?php
session_start();
if (!isset($_SESSION['AdminLoginId'])) {
    header("location: admin_login.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="aaru.css">


    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <!--<title>Dashboard Sidebar Menu</title>-->
</head>

<body>
    <nav class="sidebar close">
        <header>
            <img src="capstone-logo.png" alt="logo" height="190px" width="190px">
            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="register_student.php">
                            <i class='bx bx-bar-chart-alt-2 icon'></i>
                            <span class="text nav-text">Register Students</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="logout.php">
                            <i class='bx bx-log-out icon'></i>
                            <span class="text nav-text" id="Logout">Logout</span>
                        </a>
                    </li>

                </ul>
            </div>





        </div>
        </div>

    </nav>

    <section class="home">
        <div class="text">Dashboard <?php echo $_SESSION['AdminLoginId'] ?></div>
    </section>

    <script>
        const body = document.querySelector('body'),
            sidebar = body.querySelector('nav'),
            toggle = body.querySelector(".toggle"),
            
            modeSwitch = body.querySelector(".toggle-switch");
            

        toggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        });

       
    </script>
    </head>

    <body>

        <?php
        if (isset($_POST['Logout'])) {
            session_destroy();
            header("location: admin_login.php");
        }
        ?>
    </body>

</html