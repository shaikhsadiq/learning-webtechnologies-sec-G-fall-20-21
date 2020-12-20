<?php
require_once('viewusers.php');


if(isset($_POST['submit']))
{	
    
    $uname 	= $_POST['username'];
    $pass 	= $_POST['password'];

    if($uname != '' && $pass != '')
    {
        $user = ['username'=> $uname, 'password'=>$pass];
        $status = validateUser($user);
        
        if($status){
            setcookie('isValid', 'true', time()+3600, '/');
            header('location: home.php');
        }else{
            header('location: index.php');
        }
    }
    else
    {
        echo 'Fill the form';
    }
    
}
else
{
    header('index.php');
}  

?>