<?php 
session_start();
    include_once 'include/class.user.php';
    $user = new User();

    $uid = $_SESSION['uid'];

    if (!$user->get_session()){
       header("location:index.php");
    }

    if (isset($_GET['q'])){
        $user->user_logout();
        header("location:index.php");
    }
?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <title>Home</title>
  </head>

  <body>
    <div id="container" class="container">
      <div id="header">
        <a href="home.php?q=logout">LOGOUT</a>
      </div>
      <div id="main-body">
        <br/>
        <br/>
        <h1>
                  Hello <?php $user->get_fullname($uid); ?>
    			</h1>
      </div>
    </div>
  </body>

  </html>
