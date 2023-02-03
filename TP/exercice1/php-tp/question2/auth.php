<?php
    if ($_GET['username'] == "Admin" && strcmp($_GET["password"], "Admin_1fgs784sd1_fdsfg872") == 0) {
        echo "<h1>Welcome Admin & GG you're in! <a href='../question1/index.html'>Restart</a></h1>";
    } else {
        echo "<h1>Wrong username or password!</h1>";
    }
