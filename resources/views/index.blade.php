<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff create-form</title>
    <!-- <link rel="stylesheet" href="index.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->
    <style>
        body{
            width:100%;
            height:100vh;
            padding:0;
            margin:0;
        }
        .container-max{
            margin:0;
            padding:5px;
            display:grid;
            width:100%;
            height:100vh;
            grid-template-rows: 0.5fr 0.2fr 2fr 0.3fr;
            grid-template-columns: 0.5fr 3.5fr;
            grid-template-areas:"h h"
             "sidebar main"
            "sidebar main"
            "sidebar footer";
            /* background-color:lightblue; */
            grid-gap: 5px;
            /* justify-content:center; */
            /* align-items:center; */
        }
        .header{
            grid-area:h;
            background-color:pink;
            border:1px solid black;
            border-radius:5px;
        }
        .sidebar{
            width:245px;
            grid-area:sidebar;
            background-color:yellow;
            border:1px solid black;
            border-radius:5px;
        }
        .main{
            grid-area:main;
            background-color:lightblue;
            border:1px solid black;
            border-radius:5px;
        }
        .footer{
            grid-area:footer;
            background-color:lime;
            border:1px solid black;
            border-radius:5px;
            height:65px;
            text-align:center;
            /* display:flex;
            justify-content:center; */
        }
        .navigation{
            width:1095px;
            display:flex;
            justify-content:space-between;
            /* margin-top:15px; */
        }
        a{
            text-decoration:none;
            /* padding:5px; */
            
        }
        .content-feature{
            diplay:flex;
            justify-content:space-between;
            padding: 0 10px 0 10px;
        }
        li{
            list-style: none;
            border:1px solid white;
            padding:10px;
            background-color:blue;
            margin-bottom:10px;
            border-radius:5px;
        }
        #li-a{
            color:white;
        }
    </style>
</head>
<body>
    <div class="container-max">
        
        <div class="header">
            <h4>header</h4>
        </div> 
        
        <div class="sidebar">
            <h4>sidebar</h4>
            <div class="side-opt">
                <li>
                <a href="a" id="li-a">profile</a>    
                </li>
                <li>
                   <a href="b" id="li-a">home</a>
                </li>
                <li>
                <a href="c" id="li-a">staffs</a>    
                </li>
                <li>
                <a href="d" id="li-a">students</a>    
                </li>
                <li>
                    <a href="e" id="li-a">Notification</a>
                </li>
                <li>
                    <a href="f" id="li-a">Announcements</a>
                </li>
            </div>
        </div>
        <div class="main">
            <div class="content">
                <Strong>Create</Strong>
                <div class="content-feature">

                </div>
                
            </div>
        </div>
        <div class="footer">
            <h6>Contact Us</h6>
            <p style="background-color:white; margin:0 5px 0 5px; ">am natus debitis soluta nemo omnis eligendi quibusdam explicabo atque.</p>
        </div>
    </div>
</body>
</html>