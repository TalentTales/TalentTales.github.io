<?php
session_start();
?>
<html>
    <head>
        <title>
            Create Your Own Tales
        </title>
        <style>
            fieldset{
                padding:3%;
                text-align: center;
                border-radius:5px;
                width:30%;
                height:70%;
                border:2px double grey;
                background-color:rgb(245,245,245,0.7);
                margin: 3% 0% 5% 35%;
            }
            input,select {
                font-family: Levenim MT;
                margin:4px;
                border-radius: 5px;
                border: 2px groove ;
            }
            input[type="submit"]{
                font-size:35;
                font-weight: bold;
                letter-spacing: 1px;
                padding:3px 10px 3px 5px;
                font-family: Kunstler Script;
            }
            body{
                font-family:Levenim MT;
                font-size:15;
                background-image: url(neww.jpg);
                background-repeat: no-repeat;
            }
            a{
                text-decoration: none;
                color:white;
                
            }
            .logo{
                width:1.5%;
                height:3%;
                padding-left: 1%;
            }
            
        </style>
        <script type="text/javascript">
        function validate(){
            var name=document.reg.uname.value;
            var letters=/^[A-Za-z]+$/;
            var password=document.reg.password.value;   
            var pwd=/^\w{7,14}$/;  
            var email=document.reg.mail.value;
            var patt=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            var phn=document.reg.phone.value;
            var num=/^[0-9]{10}$/;
            
            if(!name.match(letters)){
                alert("Provide name with rigth format");
                document.reg.uname.focus();
                return false;
            }
            
            if(!password.match(pwd)){
                alert("Password must contain atleast 7 characters and max of 14 characters ");
                document.reg.password.focus();
                return false;
            }
            
            if(!email.match(patt)){
                alert("Provide email in rigth format");
                document.reg.mail.focus();
                return false;
            }
            
            if(!phn.match(num)){
                alert("Phone number should contain only numbers");
                document.reg.phone.focus();
                return false;
            }
            
            return true;
        }
        </script>
    
        
    
    </head>
    <body>
        
        <img src="logo.png" class="logo">
    <a href="Talent%20Tales.html">Home</a>
        <fieldset>
            <form name="reg" onsubmit="return validate();" method="post" action="#">
            Happy Colouring...<br>
            Name<br>
            <input type=text name="uname" size=35 required><br>
            Password<br>
            <input type=password name="password" size=35 required><br>
            Education Qualification<font color=red>*</font><br>
            <input type="text" name="edu"><br>
            Company/Educational Institution Name<br>
            <input type=text name="place" size=35 ><br>
            Email<br><input type=text name="mail" size=30 required ><br>
            Phone Number<br>
            <input type=text name="phone" size=20 maxlength=10 required  >
            <br>Category<font color=red>*</font><br>
            <input type="text" name="category"><br>
            <input type="submit" name="update" value="Update">
            </form>
            <?php
            $servername="localhost";
            $username="root";
            $password="";
            $db="talent";6382576560

            $con=mysqli_connect($servername,$username,$password,$db);
            if($con){
                echo" connected";
            }
            if(isset($_POST['update'])){
                $name=$_POST['uname'];
                $pwd=$_POST['password'];
                $educatn=$_POST['edu'];
                $place=$_POST['place'];
                $email=$_POST['mail'];
                $phn=$_POST['phone'];
                $cat=$_POST['category'];
                $user=$_SESSSION['username'];
                $sql="update artist set Username='$name',Phonenum='$phn', Password='$pwd',Mail='$email',Category='$cat',Institution='$place',Education='$edu' where username='$user'";
                if(mysqli_query($con,$sql)){
                    echo" Data updated successsfully";
                
                }
            
            }
            
            ?>
        </fieldset>
    </body>
</html>