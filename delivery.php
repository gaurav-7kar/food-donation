
<?php
include("login.php"); 
// if($_SESSION['loggedin']==true){
//     header("location:loginindex.html");
// }

if($_SESSION['name']==''){
	header("location: signup.php");
}

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <style>
        .itm{
            background-color: white;
            display: grid;
        }
        .itm img{
            margin-left: auto;
            margin-right: auto;
        }
        p{
            text-align: center; font-size: 30PX;color: black; margin-top: 50px;
        }
        a{
            text-decoration: underline;
        }
        @media (max-width: 767px) {
            .itm{
                /* float: left; */
                
            }
        }
    </style>

        <div class="itm" >

            <!-- <p class="heading">We will reach soon</p> -->
            <p>"Your donoate will be immediately collected and sent to needy people "</p>
            <img src="img/delivery.gif" alt="" width="400" height="400"> 
          
                
        <?php
        $em=$_SESSION['email'] ;
        $query="select * from food_donations where email='$em'";
        $result=mysqli_query($connection, $query);
        if($result==true){
            while($row=mysqli_fetch_assoc($result)){
              //  echo "<tr><td>".$row['food']."</td><td>".$row['type']."</td><td>".$row['category']."</td><td>".$row['quantity']."</td><td>".$row['date']."</td></tr>";
$address=$row['location'];
            }
             
          }
        
//echo $address;
if(strtolower($address)=="nanded")
{?>
<center>
<a href="mailto:waghmodemadhav998@gmail.com?subject='hii , i have some left-over food and  want to donate food to needy peoples . '&body='type your address contact and how many can be served by your left overfood '"><font size=7>Confirm Donation</font></a>
</center><br><br><br>

<?php
}


else if(strtolower($address)=="hingoli")
{?>
<center>
<a href="mailto:gauravanilsevankar@gmail.com?subject='hii , i have some left-over food and  want to donate food to needy peoples .'&body='type your address contact and how many can be served by your left overfood '"><font size=7>Confirm Donation</font></a>
</center><br><br><br>

<?php
}
else if(strtolower($address)=="parbhani")
{?>
<center>
<a href="mailto:vishnukadam@gmail.com?subject='hii , i have some left-over food and  want to donate food to needy peoples .'&body='type your address contact and how many can be served by your left overfood '"><font size=7>Confirm Donation</font></a>
</center><br><br><br>

<?php
}


?>
        
   
          <p style="text-align: center;"><a href="home.html">Return to home page</a></p>
           
        </div>
        <br>
        <p>Thanks for donating <a href="home.html"></a></p> 
   
</body>
</html>