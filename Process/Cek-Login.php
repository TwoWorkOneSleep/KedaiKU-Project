<?php

require_once("Process/Users.php");

if (isset($_POST['login'])) {

    $Users = new Users();
    $payload = [
        'username' => $_POST['username'],
        'email' => $_POST['username']
    ];

    $query = $Users->login($payload);
    $data = $query->fetch_assoc();

    if ($data) {
        // verifikasi password
        if (password_verify($_POST['password'], $data["password"])) {
            // buat Session
            session_start();
            // cek jika user login sebagai admin
            if ($data['role'] == "Admin") {
                // buat session login dan username
                $_SESSION['username'] = $username;
                $_SESSION['role'] = "Admin";
                $_SESSION["role"] = $data['username'];

                // $_SESSION["Users"] = $data;
                // login sukses, alihkan ke halaman dashboard
                header("Location: Dashboard.php");


                // cek jika user login sebagai employee
            } else if ($data['role'] == "Employee") {
                // buat session login dan username
                $_SESSION['username'] = $username;
                $_SESSION['role'] = "Employee";
                $_SESSION["role"] = $data['username'];

                // alihkan ke halaman dashboard employee
                header("location:Index.php");
            }

            exit;
        }
    }

    $error = true;
}
