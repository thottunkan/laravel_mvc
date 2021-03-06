<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RCSS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<header>


<nav  class="navbar navbar-expand-lg navbar-light  bg-success bg-light fixed-top">

    

  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="https://rajagiri.edu/images/logo.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">ADD FACULTY</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/busadd">ADD BUS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/student">ADD STUDENT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/book">ADD BOOK</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/viewallfaculty">VIEW FACULTIES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/viewallstudents">VIEW STUDENTS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/viewallbus">VIEW BUSES</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
</header>
<body>
    @yield("content")
</body>
<!-- <footer>
    <h3>this is footer</h3>
</footer> -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</html>