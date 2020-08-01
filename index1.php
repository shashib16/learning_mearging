<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trip form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
   <style>
   
   </style>
</head>
<body>
    
  <?php
          $link=mysqli_connect("localhost","root","","ecommerce");
          if(mysqli_connect_error()){
               die("Couldn't connect with server". mysqli_connect_error());
               exit();
          }
          else{
              printf("coneected succssfully");
          }
         
  
?>
    <!-- //    fetching num array -->
   
 <?php
    $select_from_db="SELECT id,email,name from users";
       $result=mysqli_query($link,$select_from_db);  ?>
    <div class='conainer'>
       <h1>Helllo world</h1>
       </div>
   <div class="container">
        <?php while ($row = mysqli_fetch_array($result)) { ?>
          <div class="row">
              <div class="col-lg-12"><h4>User</h4></div>
          </div>
          <div class="row">
              <div class="col-xs-2">ID</div>
              <div class="col-xs-10"><?php echo $row['id']; ?></div>
          </div>
          <div class="row">
              <div class="col-xs-2">Email</div>
              <div class="col-xs-10"><?php echo $row['email']; ?></div>
          </div>
          <div class="row">
              <div class="col-xs-2">First Name</div>
              <div class="col-xs-10"><?php echo $row['name']; ?></div>
          </div>
          <hr/>
        <?php } ?>
    </div>
  ?>
</body>
</html>
