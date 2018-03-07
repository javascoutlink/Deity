<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Avonhead Baptist Church || Description</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <style>
    #jumbotron {
      background-image: url('images/services.jpg')
    }

    #times p {
      font-size: 1.5em;
    }
    </style>
    <script src="include.js"></script>
  </head>
  <body>
    <div w3-include-html="menu.html"></div>
    <div class="body">
      <div id="jumbotron" class="background">
        <h1>Services</h1>
        <h2>Celebrate <b>Him</b> with us</h2>
      </div>
      <div id="times" class="text-box">
        <div id="sunday">
          <h1>Sunday Service</h1>
          <p>Every Sunday @ 10AM</p>
          <p>Church Auditorium</p>
          <p>This is our regular Sunday service.</p>
        </div>
        <div id="midweek">
          <h1>Communion Service</h1>
          <p>1<sup>st</sup> Wednesday of the Month @ 10AM</p>
          <p>Church Lounge</p>
          <p>This is a midweek service with communion.</p>
        </div>
        <div id="prayer">
          <h1>Prayer Services</h1>
          <p>Everyday @ 5PM</p>
          <p>Church Office</p>
          <p>For the time of lent.</p>
        </div>
      </div>
    </div>
  </body>
</html>
<script>
includeHTML();
</script>
