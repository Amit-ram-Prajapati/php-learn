

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
    
    <nav class="navbar md:navbar-expand bg-1">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="btn-icon navbar-toggler" type="button" data-bs-toggle="drawer" data-bs-target="#navbarDrawer" aria-controls="navbarDrawer" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" aria-hidden="true"></span>
    </button>
    <dialog class="drawer drawer-end" tabindex="-1" id="navbarDrawer" aria-labelledby="navbarDrawerLabel">
      <div class="drawer-header">
        <h5 class="drawer-title" id="navbarDrawerLabel">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="drawer" aria-label="Close"></button>
      </div>
      <div class="drawer-body mb-2 md:mb-0">
        
        <form class="hstack gap-2" role="search">
          <input class="form-control" type="search" placeholder="Search" aria-label="Search"/>
          <button class="btn-solid btn-icon theme-secondary" type="submit">
            <svg class="bi" width="16" height="16"><use href="#search" /></svg>
          </button>
        </form>
        <ul class="nav navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="18-get-post.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <button class="nav-link" type="button" data-bs-toggle="menu" aria-expanded="false">
              Menu
            </button>
            <div class="menu">
              <a class="menu-item" href="#">Action</a>
              <a class="menu-item" href="#">Another action</a>
              <hr class="menu-divider">
              <a class="menu-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li>
        </ul>
      </div>
    </dialog>
  </div>
</nav>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$email = $_POST['email'];
$password = $_POST['password'];

// if(isset($_POST['email']) && isset($_POST['password'])){
echo '<div class="alert theme-warning" role="alert">
  <p> Email : '.$email. '<br>Password : '.$password.'</p>
  <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
// }

}
?>
<!-- froms -->
 <div class="d-flex align-items-center justify-content-center w-100" >
 <form action="/php-learn/18-get-post.php" method="post" class="w-50">
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
    <div id="emailHelp" class="form-text">We’ll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="password" required>
  </div>
  
  <button type="submit" class="btn-solid theme-primary">Submit</button>
</form>
</div>
</body>
</html>