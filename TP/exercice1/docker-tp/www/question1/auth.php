<?php
    if (isset($_POST["submit"])) {
        if ($_POST['username'] == "Admin" && $_POST['password'] == md5("176590654546")) {
            echo "<h1>Welcome Admin & GG you're in! <a href='../question2/index.html'>Next</a></h1>";
        } else {
            echo "<h1>Wrong username or password! <a href='login.html'>Try again</a></h1>";
        }
    }
