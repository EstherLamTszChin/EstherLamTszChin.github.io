
<?php 




include("header.php");

//use require 


//$valid_post=true;
$error_string="";
/*
if($_SERVER["REQUEST_METHOD"]=="POST"){
    //echo "POST QUEST Processing...<br/>";
    if($_POST["password"] !=$_POST["confirm_password"]){
        $valid_post=false;
        $error_string.="Passwords don't match!<br/>";
        $password_match_error=true;
    }
    if(strlen($_POST["name"])<3){
        $valid_post=false;
        $error_string.="Name too short!<br/>";
        $name_error=true;
    }

    if($valid_post){
        $sql_query="INSERT INTO users (email,name,hash_password) VALUES ('email','fred','password') VALUE (";
        $sql_query .= "'".$_POST['email']."', ";
        echo $sql_query;
    }

    if(!$valid_post){
        $name=$_POST["name"];
        $email=$_POST["email"];
    }



}else{
    $valid_post=false;
    //echo"GET REQUEST present Form<br/>";
}
*/
printHeader("Register","Register");
?>

<?php
if($valid_post){ ?>
<h3> Congrats! You are registered!</h3>
<?php
}else{
?>
    <h1>Welcome! Please Register</h1>
    <?php
    if($error_string){?>
        <div style="color: red; border: thin solid red; width: 45%">
        <?php echo $error_string ?>

    </div>
    <?php 
    }
    ?>
    <form action="finishRegiste.php" method="post">
        Name:<input type="text" name="name" value="<?php  echo $name  ?>"><br/>
        Email: <input type="text" name="email" value="<?php  echo $email  ?>"><br/>
        Password: <input type="password" name="password"><br/>
        Confirm Password: <input type="password" name="confirm_password"><br/>
        <input type="submit" value="Register">
    </form>
<?php 
}
include("footer.php"); 
?>