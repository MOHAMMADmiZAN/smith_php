<?php
session_start();
require_once 'inc/smithDataBase.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $nameRegex = !preg_match("/^([a-zA-Z' ]+)$/", $name);
    $email = $_POST['email'];
    $emailRegex = !preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,10})$/", $email);
    $password = $_POST['password'];
    $passwordRegex = !preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,20}$/", $password);
    $c_password = $_POST['c_password'];
    $br = '</br>';
    if (empty($name)) {
        $_SESSION['nameError'] = "please Fill With Valued Name !!";
        header("Location:register.php");

    } else if ($nameRegex === true) {
        $_SESSION['nameRegexError'] = "please TYPE Valid Name !!";
        header("Location:register.php");
    } else {
        $insertName = $name;
    }
    if (empty($email)) {
        $_SESSION['emailError'] = "Please TYpe Valued Email !!";
        header("Location:register.php");
    } elseif ($emailRegex === true) {
        $_SESSION['emailRegexError'] = "Please TYpe Valid Email !!";
        header("Location:register.php");

    } else {
        $insertEmail = $email;
    }
    if (empty($password)) {
        $_SESSION['passwordError'] = "please Fill With Valued Password !!";
        header("Location:register.php");
    } elseif ($passwordRegex === true) {
        $_SESSION['passwordRegexError'] = "please Type Valid Password !!";
        header("Location:register.php");
    } else {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $insertPassword = $hash;


    }

    if (empty($c_password)) {
        $_SESSION['c_password'] = "Please TYpe Valued password !!";
        header("Location:register.php");
    } elseif ($c_password !== $password) {
        $_SESSION['c_passwordMatchError'] = "Please TYpe same password !!";
        header("Location:register.php");

    } else {
        $insertC_Password = $c_password;

    }

    if (!isset($insertName, $insertPassword, $insertEmail, $insertC_Password)) {
        echo ":::: ERROR::::";
    } else {
        // table create . if not exit //
        $usersTable = "CREATE TABLE IF NOT EXISTS `smith`.`users` ( `id` INT UNSIGNED AUTO_INCREMENT NOT NULL , `name` VARCHAR(255) NOT NULL , `email` VARCHAR(255) NOT NULL , `password` VARCHAR(255) NOT NULL ,`status` int(11) NOT NULL DEFAULT 1,`role` int(11) NOT NULL DEFAULT 1 COMMENT '1=user 2=employee 3= admin',`image` varchar(255) NOT NULL DEFAULT 'default.png', UNIQUE KEY `email` (`email`), PRIMARY KEY (`id`)) ENGINE = InnoDB;";
        if (isset($smithDataBase, $usersTable)) {
            $usersTableQuery = $smithDataBase->query($usersTable);
        } else {
            echo "table error";
        }
        $duplicateCheck = "SELECT COUNT(*) as duplicates FROM `users` WHERE email = '$email' ";
        if (isset($smithDataBase)) {
            $duplicateCheckQuery = $smithDataBase->query($duplicateCheck);
            if (isset($duplicateCheckQuery)) {
                $duplicateCheckQueryAssoc = $duplicateCheckQuery->fetch_assoc();
                if (isset($duplicateCheckQueryAssoc)) {
                    if ($duplicateCheckQueryAssoc['duplicates'] > 0) {
                        $_SESSION['emailFound'] = " EMAIL ALREADY FOUND";
                        header("Location:register.php");
                    } else {
                        $insertUser = "INSERT INTO `smith`.`users`(`name`,`email`,`password`) VALUES ('$insertName','$insertEmail','$insertPassword')";
                        $insertUserQuery = $smithDataBase->query($insertUser);
                        $smithDataBase->close();
                        if ($insertUserQuery) {
                            $_SESSION['insertUserTrue'] = " User Registration Successfully";
                            header("Location:register.php");

                        } else {
                            echo "insert error";
                        }
                    }

                }

            }
        }
    }


} else {
    header('Location:register.php');
}

