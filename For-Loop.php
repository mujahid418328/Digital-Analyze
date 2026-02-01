<?php
$correct_user = 'Admin';
$correct_pass = 'admin';
if (isset($_POST['login'])) {
    for ($i = 1; $i <= 3; $i++) {
        $user = $_POST['username'];
        $pass = $_POST['password'];

        if ($user == $correct_user && $pass == $correct_pass) {
            print "Login Successful!";
            break;
        } else {
            print "User name and password wrong <br>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>web</title>
</head>
<body>
    <form method="post" action="#" style="background-color: azure; width: 390px;" target="_blank">
        <table>
            <tr>
                <td>
                    <h3 style="color: red;">Login Form</h3>
                </td>
            </tr>
            <tr>
                <td class="p-2">Your User Name:</td>
                <td><input class="form-control m-2" type="UserName" placeholder="Your User Name"></td>
            </tr>
            <tr>
                <td>Your Password:</td>
                <td><input class="form-control m-2" type="password" placeholder="Your Password"></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="login" value="login" class="form-control bg-success text-white fw-bold">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>