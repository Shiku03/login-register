<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="mystyles.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar w/ text</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
          </ul>
          <button type="button" class="btn btn-primary">Sign up</button>
          <button type="button" class="btn btn-secondary">Log in</button>
        </div>
      </div>
    </nav>
    <br>
    <div class="form-container"> 
    <form action="index.php" method="post">
<div class="form-title">
  <h1>Login Form</h1>
</div>
 <div class="inputs">
<label for="firstName" ><div class="text">First Name: </div><input id="firstName" type="text" value="" name="firstName" placeholder="John " required class="input-field"></label>
<label for="lastName" ><div class="text">Last Name: </div><input id="lastName" type="text" value="" name="lastName" placeholder="Doe " required class="input-field"> </label>

<label for="email" ><div class="text">Email: </div><input id="email" type="email" value="" name="email" placeholder="johndoe@example.com" required class="input-field"> </label>
<label for="phone" ><div class="text">Phone number: </div><input id="phone" type="number" value="" name="phone" placeholder="+254... " required class="input-field"> </label>
<label for="address" ><div class="text">Address: </div><input id="firstName" type="text" value="" name="firstName" placeholder="Sometown, Somecity " class="input-field"> </label>

<div class="btn-submit">
<input id="submit" type="submit" value="Submit" name="submit" ></div>
</div>
    </form>
  </div>

    <footer>
      <p>Copyright 2024. All rights reserved</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>