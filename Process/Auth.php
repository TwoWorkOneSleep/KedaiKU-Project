<?php

session_start();
if (!isset($_SESSION["Users"]))
    header("Location: Login.php");
