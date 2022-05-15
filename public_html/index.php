<?php
  
  $ip = $_SERVER['REMOTE_ADDR'];
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>IP</title>
    <meta charset="utf-8">
    <meta name="keywords" content="ip, milyd, pasja, informatyki, php, javascript, java, script, programming, mojeip">
    <meta name="description" content="<?php echo $ip; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      body {
        text-align: center;
        font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;
      }
      h1 {
        padding-top: 50px;
      }
    </style>
  </head>
  <body>
    <h1><?php echo $ip ?></h1>
    <?php echo gethostbyaddr($ip); ?><br><br>
    <span style="font-size: 15px; color: gray;">&copy; Created by Mily 2022</span>
  </body>
</html>