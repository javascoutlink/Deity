<!DOCTYPE html>
<html>
  <head>
    <title>Avonhead Baptist Church || Home Page</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <style>
    #come-with {
      border: 2px solid #E2655B;
      padding: 8px;
      width: 130px;
      font-size: 21px;
    }

    #come-with:hover {
      background-color: #85D5FF;
      opacity: 0.7;
    }

    #services, #ministry {
      background-image: url('images/services.JPG');
    }

    #jumbotron {
      background-image: url('images/jumbotron.JPG');
      height: calc(100vh - 200px);
      padding: 200px 0 0 85px;
      color: #E2655B;
    }
    </style>
  </head>
  <body>
    <div class="header">
      <div class="menu" id="menu-left">
        <a href="members.php">Members</a>
        <a href="contact.php">Contact</a>
      </div>
      <a href="index.php">
        <div class="menu-logo">
        </div>
      </a>
      <div class="menu" id="menu-right">
        <a href="ministry.php">Ministries</a>
        <a href="about.php">About Us</a>
      </div>
    </div>
    <div class="body">
      <div id="jumbotron" class="background">
        <h1>Avonhead Baptist Church</h1>
        <h2>Discipling the Nations across the Ages</h2>
        <a href="#"><button class="link">Come With Us</button></a>
      </div>
      <div id="ministry" class="background secondary">
        <h1>Church Ministry</h1>
        <p>At ABC, ministry is important to us and is at the center of us as a church.</p>
        <a href="ministry.php"><button class="link">Find out more</button></a>
      </div>
    </div>
  </body>
</html>
