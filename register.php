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