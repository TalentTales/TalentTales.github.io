<html>
    <head>
        <style>
        
        fieldset{
                padding:3%;
                text-align: center;
                border-radius:5px;
                width:30%;
                height:30%;
                border:2px double grey;
                background-color:rgb(245,245,245,0.7);
                margin: 10% 0% 10% 35%;
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
                background-image: url(neww.jpg);
                background-repeat: no-repeat;
            }
            .logo{
                width:1.5%;
                height:3%;
                padding-left: 1%;
            }
</style>

    </head>
    <body><fieldset>
        Do You Really Want to delete your account?
        <input type="submit" name="Yes" value="Yes"><input type="submit" name="No" value="No">
        <?php
        $servername="localhost";
        $username="root";
        $password="";
        $db="talent";

        $con=mysqli_connect($servername,$username,$password,$db);
        if ($con){
            echo "<br>Connected successfully";
        }

        if(isset($_POST['Yes'])){
            $user=$_SESSION['username'];
            $pwd=$_SESSION['password'];
            $sql="delete * from artist where Username='$user' and Password='$pwd' ";
            if(mysqli_query($con,$sql)){
                echo "Account Deleted Successfully";
            }
            else
                echo "Account not found!";
        }
        if(isset($_POST['No']))
            header("Location:Talent%20Tales.html");
            
        ?>
        </fieldset>
    </body>
</html>