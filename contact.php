<?php

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Contact</title>
		
	</head>
	<body>
				<form action="traitement.php" method="post">
				<div id=container></div>
				<p>
				<strong>Votre Nom <span style="color: #ff0000;">*</span><br /> </strong> <label for="nom"> </label> <input id="nom" name="nom" size="52" type="text" /> <br />
				<strong> </strong>
				
				<strong> votre adresse de couriel  <span style="color: #ff0000;">*</span> </strong><br />
				 <label for="votre adresse de couriel"> </label>
				 <input id="votre adresse de couriel" name="votre adresse de couriel" size="52" type="text" /> <br /><br /> 
				<strong> Sujet   <span style="color: #ff0000;">*</span> </strong><br /> 
				<label for="sujet"> </label> <input id="sujet" name="sujet" size="52" type="text" /> <br /><br /> 
				<strong>Adresse  <span style="color: #ff0000;">*</span> </strong><br /> 
				<label for="adresse"></label> <input id="adresse" name="adresse" size="52" type="text" /> <br /><br /> 
				
				<p>Categorie  <span style="color: #ff0000;">*</span></p>
				<label for="motif"></label>
				 <select id="motif" name="motif"> 
				 <option value="reglement">Votre avis nous intéresse</option> 
				<option value="enquete_commerciales">Pour une vidéo</option>
				<option value="enquete_civile">Pour un article</option> 
				<option value="recouvrement">Pour autre chose</option> 
				 </select>
				<p>Message <span style="color: #ff0000;">*</span> </p>
				<p><label for="message"></label> <textarea id="message" cols="52" rows="7" name="message"></textarea></p>
				<input type="radio"> M'envoyer une copie </input></br></br>
				<input type="submit" value="Envoyer un message"></input> 
				<p> </p>
				</form>
    </body>
<html>
s