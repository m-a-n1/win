<?php

$firstname = $_POST['firstname'];
$firstname = $_POST['lastname'];
$firstname = $_POST['email'];

$errors = [
    'firstNameError' => '',
    'lastNameError' => '',
    'emailError' => '',
];

if (isset($_POST['submit'])) {

    $firstname = mysqli_real_escape_string($_POST['firstname']);
    $firstname = mysqli_real_escape_string($_POST['lastname']);
    $firstname = mysqli_real_escape_string($_POST['email']);

    //echo $firstname . ' ' . $lastname . ' ' . $email;
    $sql = "INSERT INTO users(firstname, lastname, email)
            VALUES ('$firstname', '$lastname', '$email')";

    if(empty($firstname)){
        $errors['firstNameError'] = 'enter first name';
    }elseif(empty($lastname)){
        $errors['lastNameError'] = 'enter last name';
    }elseif(empty($email)){
        $errors['emailError'] = 'enter email';
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['emailError'] = 'enter correct email';
    }else{
        if(mysqli_query($conn, $sql)){
            header('Location: index.php');
        }else{
            echo 'Error: ' . mysqli_error($conn);
        }
    }
    
}