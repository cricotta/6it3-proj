<?php

    if (isset($_post["submit"])){
        echo "it works";
    }
    else{
        header("location: ../signup.blade.php");
    }
