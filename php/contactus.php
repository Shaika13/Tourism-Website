<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="css/contact.css"/>

</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav">
      <li><a href="index.php">HOME</a></li>
      <li><a href="Book_Button.php">BOOKING</a></li>
      <li><a href="contactus.php">CONTACT US</a></li>
      <li><a href="pack.php">PACKAGES</a></li>
    </ul>

  </div>
</nav>

<div class="container-fluid">
    <div class="row">
        
        <div class="col-md-6 first bg">
        
        <div class="container">
         <button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-home"></span> Address
        </button>   
        <br>
        <br>
        <p style="color:  #feb236"> 12/A North Tower, 6th floor,<br>Gulshan, Dhaka-1215 </p>
        <br>

        <button type="button" class="btn btn-default btn-sm">
        <span class="glyphicon glyphicon-earphone"></span> Lets Talk
        </button>
        <br>
        <br>
        <p style="color:  #feb236"> +8801700123456, +8801700123457 </p>
        <br>
      
         <button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-envelope"></span> General Support
        </button>
       <br>
        <br>
        <p style="color:  #feb236"> asia_travels@gmail.com </p>
      </div>

        </div>


         <div class="col-md-6 second" >
            <h2 id="title"> SEND US A MESSAGE </h2>
            <div class="a">

  <form action="contact_info.php" method="post">
    <div class="row">
    <div class="form-group col-xs-6">
      <label for="name" id="name1">Name:</label>
      <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
</div>
<div class="row">
    <div class="form-group col-xs-6">
      <label for="email" id="email1">E-mail:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter E-mail" name="email">
    </div>
</div>

    <div class="row">
    <div class="form-group col-xs-6">
      <label for="message" id="msg">Message:</label>
      <input type="message" class="form-control" id="message" placeholder="Enter Your Message" name="message">
    </div>
</div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>



     </div>
  </div>

</div>
    



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>