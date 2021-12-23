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
 
<header>
    <div class= "logo">
        <h1 class = "logo-text"><span>YANIS</span>Blog</h1>
    </div>
    <i class="fa fa-bars menu-toggle"></i>
    <ul>
        <li><a href="#">Acceuil</a></li>
        
        <li>
            <a href="#">
                <i class="fa fa-user"></i>
                Yanis Mejdoub
                <i class="fa fa-chevron-down"></i>
            </a>
            <ul>
                
                <li><a href="#">LogOut</a></li>
            </ul>
        </li>
    </ul>
</header>
<div class="admin-wrapper">


    <!-- Admin Content -->
    <div class="admin-content">
        <div class="button-group">
            <a href="create.php" class="btn btn-big">Add Post</a>
            <a href="dashbord.php" class="btn btn-big">Manage Posts</a>
        </div>


        <div class="content">

            <h2 class="page-title">Manage Posts</h2>

            <table>
                <thead>
                    <th>ID</th>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th colspan="2">Action</th>
                </thead>
                <tbody>
                    <tr>

<?php 

		 $conexion= mysqli_connect("localhost","root","","yanis");

		

		$req="SELECT * FROM article ";
    

        $reqs=mysqli_query($conexion,$req);
            
				
      
			 while ( $donnees=mysqli_fetch_array($reqs)) 
				{
               
                    echo'<td>'.$donnees['id'].'</td>';
                    echo'<td>'.$donnees['titre'].'</td>';
                   echo' <td>Yanis</td>';
                    echo'<td><a href="#" class="edit">edit</a></td>';
                    echo'<td><a href="#" class="delete">delete</a></td>';
                    
                echo'</tr>';
            }	
		
            mysqli_close($conexion);
               
            echo'</tbody>';
        echo'</table>';
	
       echo' </div>';

    echo'</div>';

    
   

echo'</div>';

?>





</body>

</html>