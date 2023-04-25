<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./homepage.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h2>Login here</h2>
        <form action="" method='Post' id='form'>
            <label for="">UserName:</label>
            <input type="text" name='username'><br><br>
            <label for="">Password:</label>
            <input type="password" name='password'><br><br>
            <input type="submit" name='submit' value='Login'>
        </form>
    </header>
    <?php
    if(isset($_POST['submit'])){
        //retrive the user's input
        $username=$_POST['username'];
        $password=$_POST['password'];
        //validate the user's credintials

        if($username=='admin' &&
        $password=='admin@123'){
            // start a new session

            session_start();
            //set session variable

            $_SESSION['username']=$username;

            //redirect the user to the homepage

            header('Location:index.php');
        }else{
            //Display an error message

            echo "<p>Invalid username or password.</p>";
        }
    }
    ?>
</body>
</html>