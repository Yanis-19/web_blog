<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/993229fa1c.js" crossorigin="anonymous"></script>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">

  <!-- Custom Styling -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/admin.css">

  <title>creer un post</title>
</head>

<body>
 
<?php include("header.php"); ?>

<div class="admin-wrapper">

 



    <!-- Admin Content -->
    <div class="admin-content">
        <div class="button-group">
            <a href="create.php" class="btn btn-big">Add Post</a>
            <a href="dashbord.php" class="btn btn-big">Manage Posts</a>
        </div>


        <div class="content">

            <h2 class="page-title">Add Posts</h2>

            <form action="Traitcreate.php" method="post">
                <div>
                    <label>Title</label>
                    <input type="text" name="title" class="text-input">
                </div>
                <div>
                    <label>Body</label>
                    <textarea name="body" id="body"></textarea>
                </div>
                
                <div>
                    <label>Topic</label>
                    <select name="topic" class="text-input">
                        <option value="html">HTML</option>
                        <option value="css">CSS</option>
                        <option value="php">PHP</option>
                        <option value="csharp">C#</option>
                        <option value="java">JAVA</option>
                        <option value="python">PYTHON</option>
                        <option value="algorithm">ALGORITHM</option>

                    </select>
                </div>
                <div>
                    <button type="submit" class="btn btn-big">Add Post</button>
                </div>
            </form>
           

        </div>

    </div>
 

</div>





<script
    src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>

<script src="js/scripts.js"></script>

</body>

</html>