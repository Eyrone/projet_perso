<?php
/**
 * Created by PhpStorm.
 * User: Horakle
 * Date: 20/12/2018
 * Time: 16:23
 */

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArticleRepository")
 */

class Article
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="id_utilisateur",type="integer")
     */
    private $_id;

    /**
     * @ORM\Column(type="string",length=255)
     */
    private $_titre;

    /**
     * @ORM\Column(type="string",length=255)
     */
    private $_contenu;
}