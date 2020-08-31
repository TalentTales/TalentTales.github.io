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
                margin:10px 0px 0px 100px;
                font-family: Kunstler Script;
            }
            body{
                font-family:Levenim MT;
                font-size:20;
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
            table{
                margin-left: 80px;
                border:1px solid green;
                text-align: center;
                border-collapse: collapse;
            }
            td{
            border:1px solid green;
            padding: 8px 5px 8px 5px;

            }
        </style>
        
    
    </head>
    <body>
        
        <img src="logo.png" class="logo">
        <a href="Talent%20Tales.html">Home</a>
        <fieldset>
            Happy Colouring...<br>
          Particpants Details<br>
        <table>
            <tr><td>Username</td><td>Category</td></tr>

<?php
$servername="localhost";
$username="root";
$password="";
$db="talent";

$con=mysqli_connect($servername,$username,$password,$db);
$sql="select * from artist";
$result=mysqli_query($con,$sql);
if($result){
    $count=mysqli_num_rows($result);
    if($count>0){

        while($row=mysqli_fetch_assoc($result)){
?>
            <tr>
                <td><?php echo $row["Username"];?></td>
                <td><?php echo $row["Category"];?></td>
            </tr>
<?php
}
}
}?>
<br>
</table>
</fieldset>   
        </body>
</html>