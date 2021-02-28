<?php

    $name = $username = $email = $phoneNumber = $password = "";
    // Processing form data when form is submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phoneNumber = $_POST['phoneNumber'];
        $password = $_POST['password'];

        echo "Your name is $name <br>";
        echo "With username $username <br>";
        echo "You registered with $email <br>";
        echo "And phone number, $phoneNumber <br>";
        echo "Your password is $password . <br>";

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
        </div>
        <br>
        <div>
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
        </div>
        <br>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>
        <br>
        <div>
            <label for="number">Phone Number</label>
            <input type="tel" name="phoneNumber" id="phoneNumber">
        </div>
        <br>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>
        <br>
        <div>
            <button type="submit">Submit</button>
        </div>
        
    </form>
    
</body>
</html>