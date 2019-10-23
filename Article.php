<?php

require_once "config.php";
$GLOBALS['db'] = $link;

class Article {
	public $id_article;
    public $date_article;
    public $titre_article;
    public $texte_article;
    public $auteur_nom;
    public $auteur_prenom;

}
function recupererArticles() {

	$link = 	$GLOBALS['db'];

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
			$newarticle->auteur_pre	nom = $row['prenom_utilisateur'];
    		array_push($articles, $newarticle);
		}
		$link->close();
		return $articles;
     }

 $Articles = recupererArticles();
 var_dump($Articles);
?>