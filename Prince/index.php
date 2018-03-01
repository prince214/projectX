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
  margin-left: 100px
  background-color: yellow;
  
  
}
.footer{
  margin-top: 30px;
  padding: 10px;
  height: 40px;
  background-color:#DCDCDC;
}



.colorC
{
  border-radius:5%;
  padding: 15%;
  width:.50%; 
  height:.150%;


}
.colorC:hover{
  background-color: #e1bee7;
}
.colorCpp
{
  border-radius:5%;
  padding: 15%;
  width:.50%; 
  height:.150%;

}
.colorCpp:hover{
  background-color: #81D4FA;
}
.colorHTML
{
  border-radius:5%;
  padding: 15%;
  width:.50%; 
  height:.150%;

}
.colorHTML:hover{
  background-color: #ffcdd2;
}
.colorJava
{
  border-radius: 5%;
  padding: 15%;
  width:.50%; 
  height:.150%;

}
.colorJava:hover{
  background-color: #FFAB91;
}
.colorPython
{
  border-radius: 5%;
  padding: 15%;
  width:.50%; 
  height:.150%;

}
.colorPython:hover{
  background-color: #FFF176;
}
.colorOS
{
  border-radius: 5%;
  padding: 15%;
  width:.50%; 
  height:.150%;

}
.colorOS:hover{
  background-color: #B2DFDB;
}
.col-md-11{
  margin-left: 5%;
}
.temp1{
  background-color: yellow;
}
.temp2{
  background-color: red;
}
.temp3{
  background-color: green;
}
}

</style>


  </head>
  <body>
  <!--  /////////// NavBar ///////////////// -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">
    <img src = "images/testfeb.png" alt = "logo"/>
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
      <li class="nav-item">
        <a class="nav-link" href="#">Upload Your Code</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Select Language
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">C</a>
          <a class="dropdown-item" href="#">C++</a>
          <a class="dropdown-item" href="#">HTML</a>
          <a class="dropdown-item" href="#">Python</a>
          <a class="dropdown-item" href="#">Java</a>
          <a class="dropdown-item" href="#">OS</a>
        </div>
      </li>
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
    


<div class = "col-md-11 temp1 ">
      <div class = "col-md-11 temp2 ">
    <div class = "row ">
      <div class = "col-md-2 colorC" onclick="location.href = 'https://www.google.co.in/';" style="Cursor:pointer;">
        <center>
        <img src = "images/c.png" alt = "c logo"><br><br>
        <a href="#">C Language
        </a></center>
      </div>
      <div class = "col-md-2 colorCpp " onclick="location.href = 'https://www.google.co.in/';" style="Cursor:pointer;"><center>
        <img src = "images/c++.png" alt = "c++ logo"><br><br>
        <a href="#">C++ Language
        </a></center>
      </div>
      <div class = "col-md-2 colorHTML " onclick="location.href = 'https://www.google.co.in/';" style="Cursor:pointer;">
        <center>
        <img src = "images/html.png" alt = "Html logo"><br><br>
        <a href="#">Html Language
        </a></center>
      </div>
      <div class = "col-md-2 colorJava " onclick="location.href = 'https://www.google.co.in/';" style="Cursor:pointer;"><center>
        <img src = "images/java.png" alt = "java logo"><br><br>
        <a href="#">Java Language
        </a></center>
      </div>
      <div class = "col-md-2 colorPython" onclick="location.href = 'https://www.google.co.in/';" style="Cursor:pointer;"><center>
        <img src = "images/py.png" alt = "Python logo"><br><br>
        <a href="#">Python Language
        </a></center>
      </div>
      <div class = "col-md-2 colorOS " onclick="location.href = 'https://www.google.co.in/';" style="Cursor:pointer;">
        <center>
        <img src = "images/linux.png" alt = "linux logo"><br><br>
        <a href="#">Operating System
        </a></center>
      </div>
    </div>

  </div>
</div>

       <footer class="footer">
      <div class="container">
        <span class="text-muted">Codes4u: Copyright 2018-2019</span>
        <a href="#">
          <img src = "images/facebook.png" alt = "java logo">
        </a>
        <a href="#">
          <img src = "images/gmail.png" alt = "java logo">
        </a>
        <a href="#">
          <img src = "images/whatsapp.png" alt = "java logo">
        </a>
        <a href="#">
          <img src = "images/github.png" alt = "java logo">
        </a>
      </div>
    </footer>

  </body>
</html>