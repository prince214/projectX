<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Bootstrap Site</title>
<style type="text/css">
.jumbotron{
  background-image: url("images/jumboimage.jpg");
  background-size: cover;
  color:white;
}
.containerfix2{
  margin-left: 150px;
  margin-right: 150px;
  padding:15px;
  
}
.footer{
  height: 40px;
  background-color:#DCDCDC;
}


</style>


  </head>
  <body>
  <!--  /////////// NavBar ///////////////// -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">
    <img src = "images/logo2.png" alt = "logo"/>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Select Language
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">C</a>
          <a class="dropdown-item" href="#">C++</a>
          <!--<div class="dropdown-divider"></div>-->
          <a class="dropdown-item" href="#">HTML</a>
          <a class="dropdown-item" href="#">Python</a>
          <a class="dropdown-item" href="#">Java</a>
          <a class="dropdown-item" href="#">OS</a>
        </div>
      </li>
      <!--
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    -->
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<!--Jumbotron -->
<div class = "containerJ">
<div class="jumbotron">
  <h1 class="display-4">Hello, world!</h1>
  <p class="lead">Learn, Code, Inovate</p>
  <hr class="my-4">
  <p>Don't miss to get latest Codes and MCQ's in the website.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Find Us</a>
  </p>
</div>
</div>
    
    <div class = "containerfix1">
      <div class = "containerfix2">
    <div class = "row">
      <div class = "col-md-2">
        <img src = "images/c.png" alt = "c logo"><br><br>
        <a href="#">C Language
        </a>
      </div>
      <div class = "col-md-2">
        <img src = "images/c++.png" alt = "c++ logo"><br><br>
        <a href="#">C++ Language
        </a>
      </div>
      <div class = "col-md-2">
        <img src = "images/html.png" alt = "Html logo"><br><br>
        <a href="#">Html Language
        </a>
      </div>
      <div class = "col-md-2">
        <img src = "images/java.png" alt = "java logo"><br><br>
        <a href="#">Java Language
        </a>
      </div>
      <div class = "col-md-2">
        <img src = "images/py.png" alt = "Python logo"><br><br>
        <a href="#">Python Language
        </a>
      </div>
      <div class = "col-md-2">
        <img src = "images/linux.png" alt = "linux logo"><br><br>
        <a href="#">Operating System
        </a>
      </div>
    </div>

  </div>
</div>







    <!--
    <div class="containerfix1">
      <div class = "containerfix2">
      <div class="row mb-2">

        
        <div class="col-md-3">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              
              <h3 class="mb-0">
                
                  <img  alt="C logo"src = "images/c.png"></a>
                  <br>
                  <a class="text-dark" href="#">C
              </h3>
              
           
          </div>
        </div>


        <div class="col-md-3">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success">Design</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">C++</a>
              </h3>
              <div class="mb-1 text-muted">Nov 11</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a href="#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
          </div>
        </div>
         <div class="col-md-3">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success">Design</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">HTML</a>
              </h3>
              <div class="mb-1 text-muted">Nov 11</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a href="#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">

          </div>

        </div>

    -->
       <footer class="footer">
      <div class="container">
        <span class="text-muted">Codes4u: Copyright 2018-2019</span>
      </div>
    </footer>

  </body>
</html>