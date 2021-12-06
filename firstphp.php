<!DOCTYPE html>
<html>


<head>
    <title> My first PHP Page </title>
    <link rel="stylesheet" href="try.css">
    <meta charset="utf-8">
</head>


<body>
    <!-- this is HTML comment-->
    <h1>My first PHP Page</h1>
    <p> Esther's major </p>
    <p>
    <?php 
    //this is php comment
        $mystring="Hi class";
        echo $mystring."<br/>This is php!";
        echo"$mystring Even more";

        $mynumber=5;
        $mynumber=10+$mynumber;
        echo "<p>$mynumber</p>"
    ?>
    <h1>User Input</h1>
    <p><?php
        echo "Your name is ".$_GET['name']."!<br/>";
        echo "Your age is ".$_GET['age']."!";


    ?>
    </p>
    <h1>If statment </h1>
        <?php
            $condition=false;
            //default is always false
            if($condition){
                echo"True<br/>";
            }else{
                echo "false<br/>";
            }
            $name=$_GET['name'];
            //default is always false
            if($name=="Fred"){ ?>
                <p>Welcome Fred</p>
        <?php }else{?>
                <p>Welcome Vistor</p>
            <?php
        }
        $age=$_GET['age'];
        if($age<=13){
            echo"you are under 13.";
        }elseif($age<=15){
            echo"you are under 15.";
        }else{
            echo"you are older than 15.";
        }
        
        if($name=="Fred"&&$age==20){ ?>
            <h3>Fred (age 20) is our special vistor!</h3>
        <?php
        }
        //condition statment
        $visitor_type=($age>=20)? "adult":"child";
        echo "<br/>Visitor Type is $visitor_type";
        //or even use condition statment inside the echo
        echo ($age==20)?"<br/>adult" : "<br/>child";

            ?>    

        <h1>Case statment/ Switch Statment</h1>  
        <?php

        switch($name){
            case"Fred":
                echo "<h2>Welcome Fred</h2>";
                break;
            case"Jerry":
                echo "<h2>Welcome Jerry</h2>";
                break;
            case"Mary":
                echo "<h2>Welcome Mary</h2>";
                 
        }
        ?>
</body>
</html>