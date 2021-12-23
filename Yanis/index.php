<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/993229fa1c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">

    <title>article</title>
</head>
<body>
    <?php include("header.php"); ?>
    <?php 
      session_start();
    if(!isset($_SESSION['id'])){
        header("Location:indexuser.php");
    }
     ?>
    <!-- content -->
    <div class="content clearfix">

        <!-- main content -->
        <div class="main-content">
            <h1 class="recent-post-title">Recent Posts</h1>

            <div class="post">
                
                <div class="post-preview">
                    <h2><a href="single.php">The strongest and sweetest songs yet remain to be sung</a></h1>
                    <i class="far fa-user">Yanis Mejdoub</i>
                    &nbsp;
                    <i class="fas fa-calendar-alt">Mai 01, 2021</i>
                    <p class="preview-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                         Eaque, iusto harum pariatur sunt minus laudantium?
                    </p>
                    <a href="single.php" class="btn">Read More</a>
                </div>
                
            </div>
            
        </div>

        <!-- // main content -->
        <div class="sidebar">
            <div class="section search">
                <h2 class="section-title">Search</h2>
                <form action="index.html" method="post">
                  <input type="text" name="search-term" class="text-input" placeholder="Search...">
                </form>
              </div>
      
      
              <div class="section topics">
                <h2 class="section-title">Topics</h2>
                <ul>
                  <li><a href="#">HTML & CSS</a></li>
                  <li><a href="#">PHP</a></li>
                  <li><a href="#">C</a></li>
                  <li><a href="#">C#</a></li>
                  <li><a href="#">JAVA</a></li>
                  <li><a href="#">PYTHON</a></li>
                  <li><a href="#">ALGORITHM</a></li>
                </ul>
              </div>
      
            </div>
      
        </div>
    </div>
</body>
</html>