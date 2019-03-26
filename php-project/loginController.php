<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 19-Mar-19
 * Time: 12:04
 */

if ($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('Location: index.php');
    exit;
}

require 'config.php'; //nu beschikking tot de db variable

if ($_POST ['type'] == 'register'){

    $username = $_POST['username'];
    $password = htmlentities($_POST ['password']);
    $password1 = htmlentities($_POST ['password1']);
    $email = $_POST['email'];

    $sql = "SELECT `email` FROM `users` WHERE `email` = :email;";
    $prepare = $db->prepare($sql);
    $prepare->execute([
        ':email' => $email
    ]);


    if (empty($_POST["email"])) {
       echo 'Email is required';
    } else {
        $email =($_POST['email']);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    $fetchedEmail = $prepare->fetchAll(PDO::FETCH_ASSOC);

    IF($fetchedEmail == true){
        $msg = 'Sorry deze email is al in gebruik | Of u moet en email invullen';
        header("location:index.php?msg=$msg");
        $msg = htmlspecialchars($_GET['msg']);
        exit;
    }

    if (strpos($_POST['password'], ' ') !== false) {
        echo "Don't try to write space.";
    }

    if($password == $password1) {

        $sql = "INSERT INTO users (username, email, wachtwoord) 
values (:username, :email, :password)";

        $password = password_hash($password, PASSWORD_DEFAULT);

        $prepare = $db->prepare($sql);
        $prepare->execute([
            ':username'  => $username,
            ':email'     => $email,
            ':password'  => $password
        ]);

        header('Location: login.php');

        exit;
    }
    else{
        echo "wachtwoord komt niet overheen";
    }

}

if(!empty($_POST["password"]) && ($_POST["password"])) {
    $password = ($_POST["password"]);
    if (strlen($_POST["password"]) <= '8') {
        $passwordErr = "Your Password Must Contain At Least 8 Characters!";
    }
    elseif(!preg_match("#[0-9]+#",$password)) {
        $passwordErr = "Your Password Must Contain At Least 1 Number!";
    }
    elseif(!preg_match("#[A-Z]+#",$password)) {
        $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
    }
    elseif(!preg_match("#[a-z]+#",$password)) {
        $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
    }
    elseif (preg_match('',$password)){
        $passwordErr = "Your Password can not have any white space between each other!";
    }
}

if( empty($_POST["box"]) ) {
    echo "Checkbox was left unchecked.";
}
else {
    echo "Checkbox was checked.";
}




if ($_POST ['type'] == 'login') {
    $email =        $_POST['email'];
    $password =     $_POST['password'];

    $sql = "SELECT * FROM users WHERE  email = :email AND wachtwoord = :password";
    $prepare = $db->prepare($sql);
    $prepare ->execute([
        ':email'        => $email,
        ':password'     => $password
    ]);
    $tbl = mysqli_query($connect, $sql);
    $info = $prepare->fetch(PDO::FETCH_ASSOC);
    if ($info != null){

       header('Location: admin.php');
    }
    else{
        echo 'u heeft niet de goede email of wachtwoord';
        header('Location: login.php');
    }



}




