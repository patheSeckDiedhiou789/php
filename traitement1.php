<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>formulaire</title>
</head>
<body>
 <p> <?php echo $_POST['matricule']; 
           echo $_POST['nom'] ; 
           echo $_POST['prenom']; 
          if (isset($_POST['sexe']))
            {
                echo $_POST['masculin'];
                echo $_POST['feminiin'];
            }
 
 ?>
</body>
</html>
<>
