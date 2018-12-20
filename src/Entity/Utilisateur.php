<?php
/**
 * Created by PhpStorm.
 * User: Horakle
 * Date: 20/12/2018
 * Time: 16:10
 */

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UtilisateurRepository")
 */

class Utilisateur
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
    private $_email;

    /**
     * @ORM\Column(type="string",length=255)
     */
    private $_pseudo;

    /**
     * @ORM\Column(type="string",length=255)
     */
    private $_ndc;

    /**
     * @ORM\Column(type="string",length=255)
     */
    private $_mdp;

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->_email = $email;
    }

    /**
     * @return mixed
     */
    public function getPseudo()
    {
        return $this->_pseudo;
    }

    /**
     * @param mixed $pseudo
     */
    public function setPseudo($pseudo): void
    {
        $this->_pseudo = $pseudo;
    }

    /**
     * @return mixed
     */
    public function getNdc()
    {
        return $this->_ndc;
    }

    /**
     * @param mixed $ndc
     */
    public function setNdc($ndc): void
    {
        $this->_ndc = $ndc;
    }

    /**
     * @return mixed
     */
    public function getMdp()
    {
        return $this->_mdp;
    }

    /**
     * @param mixed $mdp
     */
    public function setMdp($mdp): void
    {
        $this->_mdp = $mdp;
    }
}