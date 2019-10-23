<?php include('Article.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Micro blogging</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.html">Micro Blogging</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse row" id="navbarNavAltMarkup">
    <div class="navbar-nav col-sm-12">

      <div class="col-sm-5 offset-sm-3">
        <input class="form-control" type="text" placeholder="Search" aria-label="Search">
      </div>
      <div class="col-sm-1 offset-sm-3">
        <a class="nav-item nav-link" href="account.html">Mon compte</a>
      </div>

    </div>
  </div>
</nav>

<div class="row col-sm-12" style="margin-top: 80px;">
  <div class="col-sm-2" style="margin-left: 0px;">
  <a type="button" class="btn btn-primary col-sm-12" href="ecrireArticle.php"> Ecrire un article</a>
  <button type="button" class="btn btn-secondary col-sm-12" style="margin-top: 5px;"> A la une</button>
  <button type="button" class="btn btn-secondary col-sm-12" style="margin-top: 5px;"> Dernières nouvelles</button>
  <button type="button" class="btn btn-secondary col-sm-12" onclick="getArticle()" style="margin-top: 5px;"> Articles enregistrés</button>
  </div>
  <div class="col-sm-8 offset-sm-2">
  	<?php afficherTousArticle(); ?>
  </div>
</div>

	

	<script src="index.js"></script>
	<script src="Article.php"></script>
</body>


</html>