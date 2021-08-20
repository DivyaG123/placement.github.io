<html>
<body>
    <?php
    $con = new mysqli("localhost", "root", "", "placement");
    if($con->connect_error){
        echo"not able to connect".$con->connect_error;
    }
    $name=$_POST["name"];
    $college_name=$_POST["college_name"];
    $phonenumber=$_POST["phonenumber"];
    $email=$_POST["email"];
    $textbox=$_POST["textbox"];
   
    $sql="insert into contact(name,college_name,phonenumber,email,textbox) values('$name','$college_name','$phonenumber','$email','$textbox')";
    if($con->query($sql)==TRUE)
    {
        echo "successfully inserted";
    }
    else
    {
        echo "not able to insert".$sql."<br>".$con->error;
    }
    ?>
    </body>

</html>