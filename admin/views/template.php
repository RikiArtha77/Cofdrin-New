<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://localhost/cofdrin/admin"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
    <img src="../assets/taroo.png" class="img-fluid" style="width: 150px; height: 170px;">
    <p>Taro</p>
    <img src="../assets/matcha.jpg" class="img-fluid" style="width: 150px; height: 170px;">
    <p>Matcha</p>
    </div>
    <div class="col-sm-8 text-left"> 
      <h1>List Minuman Dan Kopi</h1>
      <div class="content" >
              <ul class="list-group col-md-3 col-xs-2">
                <li class="list-group-item "><a href="index.php?mode=toko"> <i class="fa fa-address-card "></i> <span class="hidden-xs">Go Back</span></a></li>
                </ul>
             <div class="col-md-9 col-xs-10">
             <?php include_once $content; ?>
        </div>
      </div>
    </div>
    <div class="container-fluid text-center">
        <div class="row content">
        <div class="col-sm-2 sidenav">
        <img src="../assets/taroo.png" class="img-fluid" style="width: 150px; height: 170px;">
            <p>Taro</p>
        <img src="../assets/matcha.jpg" class="img-fluid" style="width: 150px; height: 170px;">
            <p>Matcha</p>
    </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
    <h1>Welcome Admin</h1>
        <p>Silahkan Atur List Sesuai Kebutuhan Anda</p>
</footer>

</body>
</html>