<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Font awesome icon (links) -->
    <link rel="stylesheet" href="css/fontawesome.css" />
    <script src="js/fontawesome.js"></script>
    <!-- Styling css file -->
    <link rel="stylesheet" href="./style.css" />
    <title>Responsive header</title>

    <style>
        * {
            padding: 0%;
            margin: 0%;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
                Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
            overflow: hidden;
        }

        header {
            position: relative;
            width: 100%;
            height: 70px;
            background: rgb(8, 9, 19);
            color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .brand {
            display: flex;
            align-items: center;
            height: 100%;
            padding: 4%;
            width: 20%;
        }

        .brand .fa-github {
            font-size: 35px;
        }

        .brand h1 {
            margin-left: 5%;
        }

        .navbar {
            position: relative;
            width: 70%;
            padding: 5%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .searchBox {
            position: relative;
            width: 40%;
            display: flex;
            align-items: center;
        }

        .searchBox input {
            width: 100%;
            height: 35px;
            border: none;
            border-radius: 8px;
            padding: 1%;
            text-indent: 10px;
            font-size: 18px;
        }

        #searchIcon {
            position: relative;
            left: -30px;
            font-size: 22px;
            color: rgb(77, 77, 77);
            cursor: pointer;
            z-index: 221;
        }

        ul {
            width: 60%;
            text-align: center;
        }

        ul li {
            display: inline-block;
            margin-left: 4%;
            transition: all 0.5s ease;
            text-align: center;
            cursor: pointer;
            padding: 1%;
            height: 20px;
            overflow: hidden;
        }

        ul li:hover {
            height: 45px;
        }

        ul li #headIcon {
            display: block;
            font-size: 22px;
        }

        ul li a {
            text-decoration: none;
            font-size: 18px;
            color: white;
        }

        ul li a:active,
        :focus {
            text-decoration: underline;
            font-weight: 700;
        }

        #menuIcon {
            display: none;
        }

        @media (max-width: 768px) {
            .navbar {
                position: relative;
                display: block;
                width: 60%;
                display: none;
            }

            .navbar.navactive {
                display: inline;
            }

            .searchBox {
                position: relative;
                width: 100%;
                top: 60px;
                z-index: 221;
                left: 5%;
            }

            #menuIcon {
                display: inline;
                position: fixed;
                font-size: 25px;
                margin-left: 88%;
                z-index: 222;
                float: right;
                padding: 1%;
                border-radius: 4px;
                cursor: pointer;
                border: 1px solid rgb(221, 221, 221);
            }

            .navbar ul {
                position: absolute;
                width: 100%;
                height: 100vh;
                background-color: rgb(8, 9, 19);
            }

            .navbar ul li {
                display: block;
                margin-top: 20px;
                width: 100%;
                height: 40px;
                text-align: left;
                position: relative;
                top: 50px;
                padding: 2%;
            }

            ul li #headIcon {
                display: inline-block;
                font-size: 33px;
            }

            ul li:hover {
                background: rgb(35, 36, 51);
            }

            ul li a {
                margin-left: 40px;
                font-family: 600;
            }
        }
    </style>

</head>

<body>
    <script>
        const toggle = () => {
            document.getElementById("nav").classList.toggle("navactive");
        };
    </script>
    <header>
        <div class="brand">
            <span class="fab fa-github"></span>
            <h1>Brand</h1>
        </div>
        <span class="fas fa-bars" id="menuIcon" onclick="toggle()"></span>
        <div class="navbar" id="nav">
            <div class="searchBox">
                <input type="text" placeholder="Search here..." />
                <span class="fas fa-search" id="searchIcon"></span>
            </div>
            <ul>
                <li>
                    <span class="fas fa-home" id="headIcon"></span>
                    <a href="#"> Home </a>
                </li>
                <li>
                    <span class="fa fa-user-circle" id="headIcon"></span>
                    <a href="#"> Profile </a>
                </li>
                <li>
                    <span class="fas fa-question-circle" id="headIcon"></span>
                    <a href="#"> Help </a>
                </li>
                <li>
                    <span class="fas fa-lock" id="headIcon"></span>
                    <a href="#"> Account </a>
                </li>
                <li>
                    <span class="fas fa-sign-out" id="headIcon"></span>
                    <a href="#"> Signout </a>
                </li>
            </ul>
        </div>
    </header>
</body>

</html>