<html>
    <body>
        
        <?php
        $name=$_POST['name'];
        $college_name=$_POST['college_name'];
        $phonenumber=$_POST['phonenumber'];
        $email=$_POST['email'];
        $textbox=$_POST['textbox'];

        if(($name=='')||($collegename=='')||($phonenumber=='')||($email=='')||($textbox==''))
        {
            echo "not connected";
        }
        $dbhost='localhost';
        $dbuser='root';
        $dbpass='';
        $conn=mysqli_connect($dbhost,$dbuser,$dbpass) or die("not able to connect");
        $dbname='placement';
        mysqli_select_db($conn,$dbname);
        $sql="select * from contact where name='$name' and college_name='$college_name' and phonenmuber='$phonenumber' and email='$email' and textbox='$textbox";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_num_rows($result);
        $target="contact.html";
        $link="mylink";
        if($row>0)
        {
           header('location:menu.html');
        }
        else
        {
            echo "not connected";
        }

      ?>
       
        <a href="menu.html"></a>

        
    </body>

</html>