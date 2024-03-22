<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dic
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\DicRepository")
 */
class Dic
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="genre", type="smallint")
     */
    private $genre;

    /**
     * @var integer
     *
     * @ORM\Column(name="open", type="smallint")
     */
    private $open;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="dic", type="string", length=255)
     */
    private $dic;

    /**
     * @var string
     *
     * @ORM\Column(name="descript", type="text")
     */
    private $descript;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set genre
     *
     * @param integer $genre
     * @return Dic
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return integer 
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set open
     *
     * @param integer $open
     * @return Dic
     */
    public function setOpen($open)
    {
        $this->open = $open;

        return $this;
    }

    /**
     * Get open
     *
     * @return integer 
     */
    public function getOpen()
    {
        return $this->open;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Dic
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set dic
     *
     * @param string $dic
     * @return Dic
     */
    public function setDic($dic)
    {
        $this->dic = $dic;

        return $this;
    }

    /**
     * Get dic
     *
     * @return string 
     */
    public function getDic()
    {
        return $this->dic;
    }

    /**
     * Set descript
     *
     * @param string $descript
     * @return Dic
     */
    public function setDescript($descript)
    {
        $this->descript = $descript;

        return $this;
    }

    /**
     * Get descript
     *
     * @return string 
     */
    public function getDescript()
    {
        return $this->descript;
    }
}
