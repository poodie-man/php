<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>javascript form</title>
    <script>
    
function checkLogin(){
    var uname = document.loginform.username.value;
    if(uname ==""){
        alert("Username field is required");

    }
    var pass= document.loginform.Password.value;
    if(pass ==""){
        alert("Password field is required");
    }
    //console.Log(uname);
    //document.write(uname);


}

    </script>
</head>
<body>
    <form action="" method="post" name="loginform" onsubmit=checkLogin()>
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
        <br><br>
        <label for="Password">Password:</label>
        <input type="text" name="Password" id="Password">
        <br><br>
        <input type="submit" name="Submit" value="Submit">
    </form>
</body>
</html>