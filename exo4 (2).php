<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>exercice4</title>
		
	</head>
	<body>
    <form action="traitement1.php" method="POST">
                 <div id=container></div>
                <p>
				<strong>Matricule <span style="color: #ff0000;"></span><br /> </strong> 
                <label for="matricule"> </label> <input id="matricule" name="matricule" size="52" type="text" /> <br />
				
				<strong>Nom <span style="color: #ff0000;"></span><br /> </strong> 
                <label for="nom"> </label> <input id="nom" name="nom" size="52" type="text" /> <br />
                <strong>Prenom <span style="color: #ff0000;"></span><br /> </strong> <label for="prenom"> </label> <input id="prenom" name="prenom" size="52" type="text" /> <br />
                Sexe: <input type="radio">Masculin</input>  
                  <input type="radio">Feminin</input></br></br></br></br>
                <p>Adresse <span style="color: #ff0000;"></span> </p>
				<p><label for="adresse"></label>
                 <textarea id="message" cols="52" rows="7" name="adressse">
                 </textarea></p>
                 Service 
				<label for="motif"></label>
				 <select id="motif" name="motif"> 
				 <option value="reglement">choisir</option></select>
                <p> Fonction  
				<label for="motif1"></label>
				 <select id="motif1" name="motif1"> 
				 <option value="fonction">choisir</option></p> </select></br></br>
                 <input type="submit" value="Valider"></input>  
                 <input type="submit" value="Réinitialiser">
                 </input> 
                </p>
                </forms>




    </body>

    </html>