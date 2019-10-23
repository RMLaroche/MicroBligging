<?php

require_once "config.php";

class Article {
	public $id_article;
    public $date_article;
    public $titre_article;
    public $texte_article;
    public $auteur_nom;
    public $auteur_prenom;

}
function recupererArticles() {

	$link = $GLOBALS['db'];

     	$articles = array();
     	$sql = 'SELECT id_article, date_article, titre_article, texte_article, nom_utilisateur, prenom_utilisateur FROM `article` INNER JOIN utilisateur ON utilisateur.id_utilisateur = auteur_id';
		$res = $link->query($sql);
		while (NULL !== ($row = $res->fetch_array())) {
			$newarticle = new Article;
			$newarticle->id_article = $row['id_article'];
			$newarticle->date_article = $row['date_article'];
			$newarticle->titre_article = $row['titre_article'];
			$newarticle->texte_article = $row['texte_article'];
			$newarticle->auteur_nom = $row['nom_utilisateur'];
			$newarticle->auteur_prenom = $row['prenom_utilisateur'];
    		array_push($articles, $newarticle);
		}
		$link->close();
		return $articles;
     }

function ecrireArticle($titre_article, $texte_article, $auteur_id){
	$link = $GLOBALS['db'];
	$sql = "INSERT INTO article (date_article, titre_article, texte_article, auteur_id) VALUES ('".date("Y-m-d")."', '".$titre_article."', '".$texte_article."', '".$auteur_id."')";
	$res = $link->query($sql);
	var_dump($res);
	$link->close();	
}

function afficherArticle($article){

	$html = '<div class="card mb-4">
          <div class="card-body">
            <h2 class="card-title">'.$article->titre_article.'</h2>
            <p class="card-text">'.$article->texte_article.'</p>
          </div>
          <div class="card-footer text-muted">
            Posté le '.$article->date_article.' par
            <a href="#">'.$article->auteur_prenom.' '.$article->auteur_nom.'</a>
          </div>
        </div>';

	return $html;
}

function afficherTousArticle(){

	$html = "";
	$articles = recupererArticles();
	foreach ($articles as $key => $value) {
		$html .= afficherArticle($value);
	}

	echo $html;
}
?>