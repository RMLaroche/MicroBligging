<?php
include "Article.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){
	ecrireArticle($_POST["titre"], $_POST["text"], "1");
	header("location: index.php");
	}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Ajouter un Article</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>

<div class="container">
  <h2>Ajouter un Article</h2>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div class="form-group">
      <label for="titre">Titre de l'article :</label>
      <input type="text" class="form-control" id="titre" placeholder="Titre..." name="titre">
    </div>
    <div class="form-group">
      <label for="text">Contenu de l'article:</label>
      <textarea type="text" size="250" class="form-control" id="text" placeholder="Texte..." name="text"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
    <a type="button" class="btn btn-danger" href="index.php"> Retour</a>
  </form>
</div>

</body>
</html>
