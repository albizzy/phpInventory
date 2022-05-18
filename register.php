<?
    include './includes/config.php';

    if(isset($_POST['send'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $pass = password_hash($_POST['pass'], $_POST['pass2'],PASSWORD_DEFAULT);

        //
        $sql = "INSERT INTO users (firstname, lastname, phone, email, pass) VALUES ('$firstname', '$lastname', '$phone', '$email', '$pass')";
        $connect = mysqli_query($link_to_db, $sql);
    }
?>