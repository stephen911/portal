<?php

// Developer : Frederick  Ennin
// Email : kpin463@gmail.comin
// started on Saturday11 June,2022
// github :https://github.com/dollarstir

function db()
{
    return  'starter.php';
}

function login($email, $password)
{
    include 'starter.php';

    // extract($_POST);
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);
    $password = md5($password);
    $sel = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
    $sel2 = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' AND password = '$password'");

    if (mysqli_num_rows($sel) >= 1) {
        if (mysqli_num_rows($sel2) >= 1) {
            $row = mysqli_fetch_array($sel2);
            session_start();
            $_SESSION['id'] = $row['id'];

            echo 'loginsuccess';
        } else {
            echo 'Login details not correct';
        }
    } else {
        echo 'loginfailed';
    }
}

function logout()
{
    session_start();
    // session_destroy();
    unset($_SESSION['id']);
    echo '<script>window.location="index.php"</script>';
}

function checker()
{
    session_start();
    if (!isset($_SESSION['id'])) {
        echo '<script>
        alert("You need to login first");
        window.location="index.php"</script>';
    }
}

function users()
{
    include 'starter.php';
    // session_start();
    $id = $_SESSION['id'];
    $d = mysqli_query($conn, "SELECT * FROM users WHERE id ='$id'");
    $row = mysqli_fetch_array($d);

    return $row;
}

function updateuser($id, $title, $name, $gender, $email, $contact, $telegram, $lincesed, $nameofschool, $region, $district, $foodpref, $heard)
{
    include 'starter.php';
    $up = mysqli_query($conn, "UPDATE users SET title='$title', name= '$name', gender = '$gender', email='$email', contact= '$contact', telegram='$telegram', lincesed ='$lincesed', nameofschool='$nameofschool', region ='$region', district ='$district', foodpref='$foodpref', heard ='$heard' WHERE id='$id'  ");
    if ($up) {
        echo 'Updated Successfully ' . $district;
    } else {
        echo 'Failed to update record . Try again';
    }
}

function register($name, $email, $password)
{
    $password = md5($password);
    include 'starter.php';
    $sel = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
    if (mysqli_num_rows($sel) >= 1) {
        echo 'Sorry User account exist';
    } else {
        $dd = date('jS F, Y');
        $ins = mysqli_query($conn, "INSERT INTO users (name,email,password,dateadded) VALUES('$name','$email','$password','$dd')");

        if ($ins) {
            $sel = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' AND password='$password'");
            $row = mysqli_fetch_array($sel);
            session_start();
            $_SESSION['id'] = $row['id'];
            echo 'registered';
        } else {
            echo 'Registeration failed';
        }
    }
}

function payment($uid, $ref, $amount)
{
    include 'starter.php';
    $dateadded = date('jS F,Y');

    $ins = mysqli_query($conn, "INSERT INTO transactions (uid,transid,amount,dateadded) VALUES('$uid','$ref','$amount','$dateadded')");
    $up = mysqli_query($conn, "UPDATE users SET paystatus ='paid' WHERE id ='$uid'");

    if ($ins || $up) {
        // echo''
    }
}

function changepass($id, $password, $newpass)
{
    $password = md5($password);
    $newpass = md5($newpass);
    include 'starter.php';
    $check = mysqli_query($conn, "SELECT * FROM users WHERE password = '$password'");
    if (mysqli_num_rows($check) >= 1) {
        $up = mysqli_query($conn, "UPDATE users SET password = '$newpass' WHERE id ='$id'");
        if ($up) {
            echo 'changepasssuccess';
        } else {
            echo 'Failed to change password';
        }
    } else {
        echo 'Incorrect Password';
    }
}
function transactions()
{
    // session_start();
    $id = $_SESSION['id'];
    include 'starter.php';

    $sel = mysqli_query($conn,"SELECT * FROM  transactions WHERE uid = '$id'");
    while ($row = mysqli_fetch_array($sel)) {

        echo '<tr>
        <td>
            <div class="d-flex align-items-center">
                <small class="text-uppercase text-muted mr-2">Transaction Amount</small>
                <a href="student-invoice.php"
                   class="text-body small"><span class="js-lists-values-document">'.$row['amount'].'</span></a>
            </div>
        </td>
        
        <td class="text-center">
            <div class="d-flex align-items-center">
                <small class="text-uppercase text-muted mr-2">Status</small>
                <i class="material-icons text-success md-18 mr-2">lens</i>
                <small class="text-uppercase js-lists-values-status">paid</small>
            </div>
        </td>
        <td class="text-right">
            <div class="d-flex align-items-center text-right">
                <small class="text-uppercase text-muted mr-2">Date</small>
                <small class="text-uppercase js-lists-values-date">'.$row['dateadded'].'</small>
            </div>
        </td>
    </tr>';
        # code...
    }
    
}
