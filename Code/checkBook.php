<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HotelBooking.COM</title>
    <link rel="stylesheet" href="HotelBooking2.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<link rel="stylesheet" type="text/css" href="hotelpage.css"></head>
<body>
	<div id="title">
		<center><h1 class="label"><span style="font-size: 50px; color: #FF6A38">&#8462;</span>otel<span class="hotel">Booking.COM <i style='font-size:34px; color: #FF6A38;' class='fas'>&#xf594;</i></span></h1></center>
	</div>

	<div id="signin">
	   	<button id="sign"><i style='font-size:14px' class='fas'>&#xf2bd;</i><a style="text-decoration:none; color: #FF6A38" href="loginForm.html"> SIGN IN</a></button>
    <button id="register"><i style='font-size:13px' class='fas'>&#xf234;</i> <a style="text-decoration:none; color: #FF6A38" href="signupForm.html">REGISTER</a></button>
   		
	</div>

<div>
<ul>
    <li><a href="HotelBooking.html" ><i style='font-size:14px' class='fas'>&#xf494;</i> HOME</a></li>
    <li><a href="HotelSearch.html"> <i style='font-size:14px' class='fas'>&#xf59d;</i> HOTELS</a></li>
    <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn"><span style="font-size: 13px;">&#9776;</span> HELP</a>
        <div class="dropdown-content" style=" background-color: #0077CB;">
          <a href="changeorder.html">&#9986; Change your booking</a>
            <a href="contact.html">&#9990; Contact Us</a>
        </div>
    </li>
</ul>
<!--prints description on how to change your booking-->
</div>
	<h1 align="center">Check your Booking</h1>
	<div class = "container" >
        <form action = "" method="POST">
            <input type="text" name="id"/>
            <input type="submit" name="search" value="Check"/>
        </form><br><br>
        <table>
            <tr>
                <th>ID</th>
                <th>FullName</th>
                <th>EmailAddress</th>
            </tr><br>
            <?php
            $connection = mysqli_connect("localhost", "root", "");
            $db = mysqli_select_db($connection, 'finalwebprog');

            if(isset($_POST['search'])) 
            {
                $id = $_POST['id'];

                $query = "SELECT * FROM `payment` where id='$id' ";
                $query_run = mysqli_query($connection, $query);

                while($row = mysqli_fetch_array($query_run)) 
                {
                    ?>
                    <tr>
                        <td> <?php echo $row['Id']; ?> </td>
                        <td> <?php echo $row['FullName']; ?> </td>
                        <td> <?php echo $row['EmailAddress']; ?> </td>
                    </tr>
                    <?php
                }
            }
            ?>
        </table>      
	</div>
</body>
</html>