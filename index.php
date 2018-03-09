<!DOCTYPE html>
<html>
  <head>
    <title>Avonhead Baptist Church || Home Page</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    #services {
      background-image: url('images/services.JPG');
    }

    #jumbotron {
      background-image: url('images/jumbotron.JPG');
    }
    </style>
    <script src="include.js"></script>
  </head>
  <body>
    <div w3-include-html="menu.html"></div>
    <div class="body">
      <div id="jumbotron" class="background">
        <h1>Avonhead Baptist Church</h1>
        <h2>Discipling the Nations across the Ages</h2>
        <a href="#services"><button class="link-button">Come With Us</button></a>
      </div>
      <div id="ministry" class="background secondary">
        <h1>Church Ministry</h1>
        <p>At ABC, ministry is important to us and is at the center of us as a church.</p>
        <a href="ministry.php"><button class="link-button">Find out more</button></a>
      </div>
      <div id="services" class="background secondary">
        <h1>Services</h1>
        <p>We have a few options for services.</p>
        <a href="services.php"><button class="link-button">Find out more</button></a>
      </div>
    </div>
  </body>
</html>
<script>
includeHTML();
</script>
