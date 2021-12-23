<?php
    session_start();
	 $conexion= mysqli_connect("localhost","root","","yanis");

			$titre= htmlspecialchars($_POST['title']);
            $sujet= htmlspecialchars($_POST['topic']);
			$contenu= htmlspecialchars($_POST['body']);
           
		 

	$requete = "INSERT INTO article (titre, sujet, contenu) VALUES('$titre', '$sujet', '$contenu')";
	mysqli_query($conexion,$requete);
     header("Location: dashbord.php");

	
mysqli_close($conexion);

	?>