
<!DOCTYPE html>
<html lang="en">
<head>
  <title>SDREDDY</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
      <style>
  body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #777;
  }
  h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 10px;      
      font-size: 20px;
      color: #111;
  }
  .container {
      padding: 80px 120px;
  }
  .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
      opacity: 0.7;
  }
  .person:hover {
      border-color: #f1f1f1;
  }
  .carousel-inner img {
      -webkit-filter: grayscale(90%);
      filter: grayscale(90%); /* make all photos black and white */ 
      width: 100%; /* Set width to 100% */
      margin: auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
      background: #2d2d30;
      color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
  }
  .list-group-item:last-child {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail p {
      margin-top: 15px;
      color: #555;
  }
  .btn {
      padding: 10px 20px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }
  .btn:hover, .btn:focus {
      border: 1px solid #333;
      background-color: #fff;
      color: #000;
  }
  .modal-header, h4, .close {
      background-color: #333;
      color: #fff !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-header, .modal-body {
      padding: 40px 50px;
  }
  .nav-tabs li a {
      color: #777;
  }
  #googleMap {
      width: 100%;
      height: 400px;
      -webkit-filter: grayscale(100%);
      filter: grayscale(100%);
  }  
  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #2d2d30;
      border: 0;
      font-size: 15px !important;
      letter-spacing: 4px;
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
      color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
      color: #fff !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  .open .dropdown-toggle {
      color: #fff;
      background-color: #555 !important;
  }
  .dropdown-menu li a {
      color: #000 !important;
  }
  .dropdown-menu li a:hover {
      background-color: red !important;
  }
  footer {
      background-color: #2d2d30;
      color: #f5f5f5;
      padding: 32px;
  }
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }  
  .form-control {
      border-radius: 0;
  }
  textarea {
      resize: none;
  }
  </style>
  </style>
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">ECE 2</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">HOME</a></li>
        <li><a href="#band">NOTIFICATIONS</a></li>
        <li><a href="#tour">INFO</a></li>
        <li><a href="#contact">ABOUT</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">LOGIN
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">..</a></li>
            <li><a href="#">...</a></li>
            <li><a href="#">.....</a></li> 
          </ul>
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>
    
<div class="jumbotron" style="height:200px;">
  <div class="container text-center">
    <h1>ACET ECE UPDATES</h1>      

  </div>
</div>
  
<div class="container-fluid bg-3 text-center" id="emlog">    
  <h1>Post An Update</h1><br>
<form class="form-horizontal" action="lg.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Username</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="postdata1" placeholder="Enter Username" name="pd1s" autocomplete="off">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">password</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="postdata2" placeholder="Enter Password" name="pd2s" autocomplete="off">
      </div>
    </div>

<div class="container-fluid bg-3 text-center" id="otplog" style="display:none;">    
  <h1>Post An Update</h1><br>
<form class="form-horizontal" action="lg.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Username</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="postdata1" placeholder="Enter Username" name="pd1s" autocomplete="off">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">password</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="postdata2" placeholder="Enter Password" name="pd2s" autocomplete="off">
      </div>
    </div>

        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="button" class="btn btn-default" onclick="dispotp();">Login With OTP</button>
<button type="submit" class="btn btn-default">Submit</button>
<button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div><br>

  </div>
</div><br><br>

<footer class="container-fluid text-center">
  <p>Stay Tuned</p>
</footer>

</body>
<script>
function dispotp(){

document.getElementById("otplog").style.display="block";
document.getElementById("emlog").style.display="none";
}
</script>
</html>
