<html>
<head>
<style>
fieldset{
                padding:3%;
                text-align: center;
                border-radius:5px;
                width:30%;
                height:40%;
                border:2px double grey;
                background-color:rgb(245,245,245,0.7);
                margin: 10% 0% 10% 30%;
                padding-top:5%;
            }
            input,select {
                font-family: Levenim MT;
                margin:10px;
                border-radius: 5px;
                border: 2px groove ;
            }
            input[type="submit"]{
                font-size:35;
                font-weight: bold;
                letter-spacing: 1px;
                padding:3px 10px 3px 5px;
                margin:10px 0px 0px 10px;
                font-family: Kunstler Script;
            }
            body{
                font-family:Levenim MT;
                font-size:20;
                background-repeat: no-repeat;
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
            
            if(!name.match(letters)){
            alert("Provide name with rigth format");
            document.reg.uname.focus();
            return false;
            }
            
            if(!password.match(pwd)){
            alert("check the password format again");
            document.reg.password.focus();
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
    <form name="reg" onsubmit="return validate();">
Participant Name<br>
            <input type=text name="uname" size=35 required><br><br><br>
            Password<br>
            <input type=password name="password" size=35 required><br><br><br>
            <input type="submit" name="login" value="Iam In" />
    
    </form>    
<?php 
if(isset($_POST['login'])){
$name=$_POST['uname'];
$pwd=$_POST['password'];
$servername="localhost";
$username="root";
$password="";
$db="talent";

$con=mysqli_connect($servername,$username,$password,$db);
$sql="select Username,Password from artist where Username='$name'";
$result=mysqli_query($con,$sql);
    
if($result){
    echo " connection successful";
    $count=mysqli_num_rows($result);
    if($count>0){
        $row=mysqli_fetch_assoc($result);

        if($row['Username']=='$name' && $row['Password']=='$pwd'){
            $_SESSION['username']='$name';
            $_SESSION['password']='$pwd';
            echo "Login Successful";
            header( "Location:loginTalentTales.html" );
        }
        else{ 
            echo "Login Unsuccessful";
            header( "Location:Talent%20Tales.html" );
        }

    }
}
}
?>

</fieldset>
</body>
</html>