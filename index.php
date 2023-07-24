<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <nav>
        <a href="index.php" style="text-decoration:none"><span class="logo">My Profile</span></a>
        <ul>

            <li><a href="default.asp">Home</a></li>
            <li><a href="news.asp">News</a></li>
            <li><a href="contact.asp">Contact</a></li>
            <li><a href="about.asp">About</a></li>
            <?php
            if (isset($_SESSION["userid"])) { ?>
                <li style="float:right;">
                    <a  href="index.php">  <?php echo strtoupper($_SESSION["useruid"]); ?></a>
                </li>
                <li style="float:right"><a href="includes/logout.inc.php">Log Out</a></li>
            <?php } else { ?>
                <li style="float:right;"><a class="menu_login_btn" href="login.php">Log In</a></li>
                <li style="float:right"><a href="signup.php">Sign Up</a></li>
            <?php }
            ?>

        </ul>

    </nav>

    <div class="intro">
        <div class="container" style="color:#fff">
            <h1>Bad Ugly Good</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book.</p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="column">
                <div class="wrapper">

                    <?php
                    if (isset($_SESSION["userid"])) { ?>
                        <div class="card">
                            <h1>Tailored Jeans</h1>
                            <p class="price">$19.99</p>
                            <p>Some text about the jeans..</p>
                            <p><button>Add to Cart</button></p>
                        </div>
                    <?php } else { ?>
                        <h2>Registration</h2>
                        <form action="includes/signup.inc.php" method="POST">
                            <div class="input-box">
                                <input type="text" name="uid" placeholder="Enter your name" required>
                            </div>
                            <div class="input-box">
                                <input type="text" name="email" placeholder="Enter your email" required>
                            </div>
                            <div class="input-box">
                                <input type="password" name="pwd" placeholder="Create password" required>
                            </div>
                            <div class="input-box">
                                <input type="password" name="pwdrepeat" placeholder="Confirm password" required>
                            </div>
                            <div class="input-box button">
                                <input type="Submit" name="submit" value="Register Now">
                            </div>
                            <!-- <div class="text">
                            <h3>Already have an account? <a href="#">Login now</a></h3>
                        </div> -->
                        </form>
                    <?php }
                    ?>

                </div>
            </div>
            <div class="column">
                <div class="wrapper">

                    <?php
                    if (isset($_SESSION["userid"])) { ?>
                        <div class="card">
                            <h1>Tailored Jeans</h1>
                            <p class="price">$19.99</p>
                            <p>Some text about the jeans..</p>
                            <p><button>Add to Cart</button></p>
                        </div>

                    <?php } else { ?>
                        <h2>Login</h2>
                        <form action="includes/login.inc.php" method="POST">
                            <div class="input-box">
                                <input type="text" name="uid" placeholder="Enter your email or username" required>
                            </div>
                            <div class="input-box">
                                <input type="password" name="pwd" placeholder="Enter password" required>
                            </div>
                            <div class="input-box button">
                                <input type="Submit" name="submit" value="Login">
                            </div>
                        </form>
                    <?php }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>