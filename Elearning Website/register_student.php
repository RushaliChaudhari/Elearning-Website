<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="aaru.css">

    <style type="text/css">
        table {
            border-collapse: separate;
            align-self: auto;
            width: 94%;
            height: 10;
            color: black;
            font-family: 25px;
            text-align: center;
        }

        th {
            background-color: darkblue;
            color: white;
            text-align: center;
        }

        tr:nth-child(even) {
            background-color: white;
        }
    </style>


    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <!--<title>Dashboard Sidebar Menu</title>-->
</head>

<body>
    <nav class="sidebar close">
        <header>




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


                    <div class="bottom-content">

                        <li class="">
                            <a href="logout03.php">
                                <i class='bx bx-log-out icon'></i>
                                <span class="text nav-text" id="Logout">Logout</span>
                            </a>
                        </li>



                    </div>
            </div>

    </nav>
    <script>
        const body = document.querySelector('body'),
            sidebar = body.querySelector('nav'),
            toggle = body.querySelector(".toggle"),
            searchBtn = body.querySelector(".search-box"),
            modeSwitch = body.querySelector(".toggle-switch"),
            modeText = body.querySelector(".mode-text");


        toggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        })

        searchBtn.addEventListener("click", () => {
            sidebar.classList.remove("close");
        });
    </script>



    <table align="right">

        <tr>
            <th>Id</th>
            <th>Username </th>
            <th>f_name</th>
            <th>l_name</th>
            <th>email</th>
            <th>phone</th>
            <th>password</th>

        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "Capstone_logIn",);
        $sql = "SELECT * FROM reg_users";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "</td><td>", $row["id"], "</td><td>", $row["username"], "</td><td>", $row["f_name"], "</td><td>", $row["l_name"], "</td><td>", $row["email"], "</td><td>", $row["phone"], "</td><td>", $row["password"], "</td><td>", $row["created_at"], "</td></tr>";
            }
        } else {
            echo "No Results";
        }
        $conn->close();
        ?>

    </table>
</body>

</html>