<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Menu using HTML, CSS</title>


    <!---Stycle-->
    <link rel="stylesheet" href="Navigation/navigation.css">

</head>

<body>


    <div class="wrapper">
        <!---sidebar-->
        <div class="sidebar">
            <div class="sidebar_logo">
                <img src="Navigation/Icon/SPIMS.png" alt="codingscape">
                <a href="#"> SPIMS</a>
            </div>
            <ul class="sidebar_items">
                <div class="sidebar-toggle">
                    <img src="Navigation/Icon/hidebar.png">
                    <i class='bx bxs-chevron-left'></i>
                    <p>Hide Sidebar</p>
                </div>
                <li class="sidebar_items_list">
                    <a href="home.php" class="sidebar_nav_item">
                        <img src="Navigation/Icon/dashboard.png">

                        <i class='bx bx-home-alt-2'></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="sidebar_items_list_info">
                    <span>Stationery Products Inventory System</span>
                </li>



                <li class="sidebar_items_list">
                    <a href="tabs.php" class="sidebar_nav_item">
                        <img src="Navigation/Icon/stocks.png">

                        <i class='bx bxs-conversation'></i>
                        <p>Inventory</p>
                    </a>
                <li class="sidebar_items_list">
                    <a href="Stockout.php" class="sidebar_nav_item">
                        <img src="Navigation/Icon/stockout.png">

                        <i class='bx bxs-conversation'></i>
                        <p>Stock out</p>
                    </a>
                </li>
                <li class="sidebar_items_list">
                    <a href="Stockin.php" class="sidebar_nav_item">
                        <img src="Navigation/Icon/stockin.png">

                        <i class='bx bxs-conversation'></i>
                        <p>Stock in</p>
                    </a>
                </li>
                <li class="sidebar_items_list">
                    <a href="AddProduct.php" class="sidebar_nav_item">
                        <img src="Navigation/Icon/addproduct.png">

                        <i class='bx bx-task'></i>
                        <p>Add Product</p>
                    </a>
                </li>

                <li class="sidebar_items_list">
                    <a href="Staff.php" class="sidebar_nav_item">
                        <img src="Navigation/Icon/profile.png">

                        <i class='bx bx-log-out'></i>
                        <p>Staff Profile</p>
                    </a>
                </li>
                <li class="sidebar_items_list">
                    <a href="CreateAcc.php" class="sidebar_nav_item">
                        <img src="Navigation/Icon/createuser.png">

                        <i class='bx bx-log-out'></i>
                        <p>Create Account</p>
                    </a>
                </li>

                <li class="sidebar_items_list">
                    <a href="adminChange.php" class="sidebar_nav_item">
                        <img src="Navigation/Icon/changepass.png">

                        <i class='bx bx-task'></i>
                        <p>Change Password</p>
                    </a>
                </li>
                <li class="sidebar_items_list">
                    <a href="adminReport.php" class="sidebar_nav_item">
                        <img src="Navigation/Icon/report.png">

                        <i class='bx bx-task'></i>
                        <p>Admin Report</p>
                    </a>
                </li>
                <li class="sidebar_items_list">
                    <a href="report.php" class="sidebar_nav_item">
                        <img src="Navigation/Icon/report.png">

                        <i class='bx bx-task'></i>
                        <p>Staff Report</p>
                    </a>
                </li>
                <li class="sidebar_items_list">
                    <a href="logout.php" class="sidebar_nav_item">

                        <img src="Navigation/Icon/logout.png">

                        <i class='bx bx-log-out'></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>

        </div>
        <script src="Navigation/navigation.js"></script>