
<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['user_name'])){}
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/web.css">
    <link rel="stylesheet" href="assets/css/stylesheet.css">
    <link rel="icon" type="image/x-icon" href="./assets/img/cropped-icon1-01.webp">


    <Script src="assets\js\index.js"></Script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

		<!-- Google Fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&family=Source+Sans+Pro:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet" />

		<!-- CSS Files -->
		<!-- <link rel="stylesheet" href="./dist/css/style.css" type="text/css" media="all" /> -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Home</title>
</head>
    <img src="./assets/img/brands-logos/Untitled-1-02 - Copy.png" width="200px" style="margin-left:auto;margin-right:auto;display:block;">
</head>

<style>
  @import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);
}
@import url(https://fonts.googleapis.com/css?family=Titillium+Web:300);


 </style>
<body style="background-image:url(http://localhost/login%20form/assets/img/BG.png);">
  <div class="area"></div><nav class="main-menu">
            <ul>
                <li>
                    <a href="/">
                        <i class="fa fa-home fa-2x" style="font-size:41px;color:#fff"></i>
                        <span class="nav-text">
                            Dashboard
                        </span>
                    </a>
                  
                </li>
                <li class="has-subnav">
                    <a href="attendence.php">
                        <img src="./assets/img/Group.png" width="30px" class="icon-img">
                        <span class="nav-text">
                            Attendence
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="https://trello.com/b/McnqcXGB/design-development">
                    <img src="./assets/img/Group53.png" width="30px" class="icon-img">
                        <span class="nav-text">
                            Task
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="calender.html">
                    <img src="./assets/img/Group (1).png" width="30px" class="icon-img">
                        <span class="nav-text">
                           Calender
                        </span>
                    </a>
                   
                </li>
                <li>
                    <a href="todo.php">
                    <img src="./assets/img/Group 12.png" width="30px" class="icon-img">
                        <span class="nav-text">
                           Leaves
                        </span>
                    </a>
                </li>
                <li>
                    <a href="./sticky-notes/index.html">
                    <img src="./assets/img/Group (2).png" width="30px" class="icon-img">
                        <span class="nav-text">
                          ToDo
                        </span>
                    </a>
                </li>
                <!-- <li>
                   <a href="#">
                       <i class="fa fa-table fa-2x"></i>
                        <span class="nav-text">
                            Tables
                        </span>
                    </a>
                </li>
                <li>
                   <a href="#">
                        <i class="fa fa-map-marker fa-2x"></i>
                        <span class="nav-text">
                            Maps
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                       <i class="fa fa-info fa-2x"></i>
                        <span class="nav-text">
                            Documentation
                        </span>
                    </a>
                </li> -->
            </ul>

            <ul class="logout">
                <li>
                   <a href="logout.php">
                         <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                            Logout
                            
                        </span>
                    </a>
                </li>  
            </ul>
        </nav>
  </body>
</html>
