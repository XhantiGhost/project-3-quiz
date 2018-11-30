<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bulma.min.css">
    <link rel="stylesheet" href="css/style.css">
    
    <title>QUIZ PAGE</title>


</head>
<body>
<div class="container is-fuild">
 <!-- form starts here -->
    <form action="index.php" method="post">
        <?php
          
          session_start();    
          if(isset($_POST['username'])) { 
             $_SESSION['username'] = $_POST['username'];
          }
        ?>
<div class="control is-medium">
            <form action="index.php" method="post" name="username">
            <input class="input is-medium" type="text" placeholder="Your name" name="username">
                </div>
               <!-- the content in the body is here -->
               
<section class="hero is-large is-primary is-bold">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        LETS SEE HOW SMART YOU ARE!! QUIZ TIME!!!
      </h1>
      <h2 class="subtitle">
      Click Submit and then Begin quiz.
      </h2>
      <h2 class="subtitle"></h2>
      ARE YOU READY??? LETS DO THIS!!!
    </div>
  </div>
</section>
<input type="submit"><br>
 <a href="home.php" class="button is-black">Begin quiz</a> 
</form>         
</h2>
    </form>
    </div>
    <!-- footer is here -->
    <footer class="footer">
  <div class="content has-text-centered">
    <p>
      <strong>Jacob</strong> 
      <p> XhantiXXJACOB <p>
    </p>
  </div>
</footer> 

</body>
</html>