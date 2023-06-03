<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>javascript form</title>
    <script src="jquery.js">
    </script>
    <script>
    
    $(document).ready(function(){
        $('#username').change(function(){
            var uname = $('#username').val();
            //console.log(uname);
            if(uname.length < 6){
                $('#usernameError').text("Minimum 6 character required");
            }else{
                $('#usernameError').text("");
            }
        })
    })
        $('#repassword').keyup(function(){
            var repassword = $('#password').val();
            var pass = $('#password').val();
            if(repass==pass){
                $('#passwordError').text("")
                
            }else{
                $('#passwordError').text("Password Mismatch")
            }

           
    })


    </script>
</head>
<body>
    <form action="" method="post" name="loginform">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
        <small id="usernameError"></small>
        <br><br>
        <label for="password">Password:</label>
        <input type="text" name="password" id="password">
        <label for="repassword"> Confirm Password:</label>
        <input type="text" name="repassword" id="repassword">
        <small id="passwordError" style="color:red;"></small>
        <br><br>
        <input type="submit" name="Submit" value="Submit">
    </form>
</body>
</html>