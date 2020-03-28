<?php

namespace App\Entity;

use \DateTime;

class Article
{

    // Titre
    private $title;
    // Sous-titre
    private $subtitle;
    // Date de création
    private $createdAt;
    // Nom de l'auteur
    private $author;
    // Contenu de l'article
    private $body;
    // le chemin vers l'image sur le serveur
    private $image;

    public function getArticleTitle(): string{
        return $this->title;
    }
    function getArticleSubtitle(): string{
        return $this->subtitle;
    }
    function getArticleCreatedAt(): string{
        return $this->createdAt->format('Y-m-d H:i:s');
    }
    function getArticleAuthor(): string{
        return $this->author;
    }
    function getArticleBody(): string{
        return $this->body;
    }
    function getArticleImage(): string{
        return $this->image;
    }

    function setTitle(string $input){
        $this->title = $input;
    }
    function setSubtitle(string $input){
        $this->subtitle = $input;
    }
    function setCreatedAt(Datetime $input){
        $this->createdAt = $input;
    }
    function setAuthor(string $input){
        $this->author = $input;
    }
    function setBody(string $input){
        $this->body = $input;
    }
    function setImage(string $input){
        $this->image = $input;
    }

    function __construct() {
        $this->title = "Titre";
        $this->subtitle = "Sous-titre";
        $this->createdAt = new DateTime();
        $this->author = "Auteur";
        $this->body = "Corps";
        $this->image = "CheminImage.png";
    }

}
