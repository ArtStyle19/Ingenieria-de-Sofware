
<?php
$con = new mysqli("db","root","root","mysql");

if($con){
  echo "
  <div class='d-flex justify-content-center'>
    <h2 style=\"color: green\">Communication with server has been succesfuly configured!</h2> 
  </div>
  ";
} else{
  echo "<h2 style=\"color: red\">There were a error running the server!</h2>";
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=800, initial-scale=1.0" />
    <title>UNAP</title>
    <link
      rel="stylesheet"
      href="../node_modules/bootstrap/dist/css/bootstrap.css"
    />
  </head>
  <body>
    <div class="d-flex justify-content-center">
      <button id="redir" class="btn btn-primary " onclick="myfunction()">Inscribirse</button>
    </div>

    <script>
    let but = document.getElementById("redir");
    let myfunction=()=>window.location.href = "./src";
    </script>
  </body>
</html>


