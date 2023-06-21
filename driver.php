<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="driverpage.css">
    <title>Driver Dashboard</title>
</head>
<body>
    <section class="left-nav">
        <img src="circle.png" alt="" width="60px">
        <p>Name</p>
        <p>Company ID</p> 
         <input type="text"> <br>
         <input type="text"> <br>
         <input type="text"> 

          <img class="img-bottom" src="hima_logo.png" alt=""> 

</section> 

    <div class="main-content"> 
        <form  action="" method="post">
        <h1>Driver Dashboard</h1>
        <p>Welcome {name}</p> <br>

        <label for="">Current Delivery</label><br>
        <input type="text"  name="CurrentDelivery"> 
        <br>

        <label for="">Upcoming Deliveries</label> <br>
        <input type="text" name="UpcomingDeliveries">
        <br>
        

        <label for="">Recent Deliveries</label> <br>
        <input type="text" name="RecentDeliveries">
        <br> <br>

        <input type="submit" value="Log Out" name="DriverLogout">



        </form> 




    </div>
</body>
</html>