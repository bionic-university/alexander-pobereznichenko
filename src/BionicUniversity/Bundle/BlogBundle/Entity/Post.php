<?php

namespace BionicUniversity\Bundle\BlogBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Post
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
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="text")
     */
    private $text;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAd", type="time")
     */
    private $createdAd;

    /**
     * @var ArrayCollection;
     * @ORM\OneToMany(targetEntity="BionicUniversity\Bundle\BlogBundle\Entity\Comment", mappedBy="post")
     */
    private $comments;

    /**
     * @var Category
     * @ORM\ManyToOne(targetEntity="BionicUniversity\Bundle\BlogBundle\Entity\Category", inversedBy="posts")
     */
    private $category;

    /**
     * @var User;
     * @ORM\ManyToOne(targetEntity="BionicUniversity\Bundle\BlogBundle\Entity\User", inversedBy="posts")
     */
    private $user;

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
     * Set title
     *
     * @param string $title
     * @return Post
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set text
     *
     * @param string $text
     * @return Post
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set createdAd
     *
     * @param \DateTime $createdAd
     * @return Post
     */
    public function setCreatedAd($createdAd)
    {
        $this->createdAd = $createdAd;

        return $this;
    }

    /**
     * Get createdAd
     *
     * @return \DateTime 
     */
    public function getCreatedAd()
    {
        return $this->createdAd;
    }

    /**
     * @return ArrayCollection
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @return Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser(User $user)
    {
        $this->user = $user;
    }
}
