<?
    include './includes/config.php';

    if(isset($_POST['send'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $pass = password_hash($_POST['pass'], $_POST['pass2'],PASSWORD_DEFAULT);

        // Check if the user already exists
        $sql = "INSERT INTO users (firstname, lastname, phone, email, pass) VALUES ('$firstname', '$lastname', '$phone', '$email', '$pass')";

        // Check if the query is successful
        $connect = mysqli_query($link_to_db, $sql);

        // If the query is successful, redirect to the login page
        if($connect) {
            header('Location: login.php');
            die();
        }

        else {
            echo "User register was unsuccessful!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get started.</title>
</head>

<body>
    <form action="register.php" method="POST" autocomplete="off">
        <h1>Create account</h1>
        <input type="text" name="firstname" id="fname" placeholder="First Name"><br>
        <input type="text" name="lastname" id="lname" placeholder="Last Name"><br>
        <input type="text" name="phone" id="phone" placeholder="Phone Number"><br>
        <input type="email" name="email" id="email" placeholder="Email"><br>
        <input type="password" name="pass" id="pass" placeholder="Password"><br>
        <input type="submit" name="send" value="Sign Up">
        <input type="text" name="hidden" autocomplete="false" style="display: none;"><br><br>
    </form>
</body>

</html>