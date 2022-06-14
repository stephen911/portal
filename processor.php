<?php

// require '../loader/autoloader.php';
require 'functions.php';
 if (isset($_GET['action'])) {
     switch ($_GET['action']) {
        case 'update':
            extract($_POST);
            // extract($_POST);
            updateuser($id, $title, $name, $gender, $email, $contact, $telegram, $lincesed, $nameofschool, $region, $district, $foodpref, $heard);

            break;

        case 'login':
            extract($_POST);
            login($email, $password);
            break;

        case 'register':
            extract($_POST);
            $name = $fname.' '.$lname;
            if ($password != $repass) {
                echo 'Password do not match';
            } elseif ($fname == '' || $lname == '' || $email == '' || $password == '') {
                echo ' All field must be filled';
            } else {
                register($name, $email, $password);
            }
            break;

        case 'changepass':

            extract($_POST);
            if ($newpass != $repass) {
                echo 'Password do not match';
            } else {
                changepass($id, $password, $newpass);
            }
                break;

        default:

        break;
    }
 }
