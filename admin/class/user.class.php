<?php

class User{
    public $id, $name, $username, $email, $password, $status, $role, $last_login;
    public function login(){
        $conn= mysqli_connect('localhost','root','','newsmagazine');
        $encryptedpassword=md5($this->password);
        // print_r($conn);
        $sql="select * from users where email='$this->email' and password='$encryptedpassword'";
        $var=$conn->query($sql);
        if($var->num_rows>0){
            $data=$var->fetch_object();
            session_start();
            $_SESSION['id']=$data->id;
            $_SESSION['name']=$data->name;
            $_SESSION['username']=$data->username;
            $_SESSION['role']=$data->role;
            setcookie('username',$data->username,time()+60*60);
            print_r($data);
            header('location:newsmagazine/dashboard.php');

        }else{
            $error="Invalid credential";
            return $error;
        }
    }

}





?>