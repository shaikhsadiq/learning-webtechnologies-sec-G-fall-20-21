
<?php
if(isset($_POST['submit'])){
        
        $usrname = $_POST['usname'];
        $passwrd = $_POST['pass'];

        session_start();

if($_SESSION['user_name']==$usrname && $_SESSION['password']==$passwrd){
         header('location:dashboard.php');

        }
        else{
        
            //echo "......................Invalid user................ Go and Register again.....................";
            header('location:login.php');
        }
}
?>


