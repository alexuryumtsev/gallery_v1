<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CopAlbums
 *
 * @ORM\Table(name="cop_albums", indexes={@ORM\Index(name="alb_category", columns={"category"}), @ORM\Index(name="moderator_group", columns={"moderator_group"}), @ORM\Index(name="visibility", columns={"visibility"})})
 * @ORM\Entity
 */
class CopAlbums
{
    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title = '';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="visibility", type="integer", nullable=false)
     */
    private $visibility = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="uploads", type="string", nullable=false)
     */
    private $uploads = 'NO';

    /**
     * @var string
     *
     * @ORM\Column(name="comments", type="string", nullable=false)
     */
    private $comments = 'YES';

    /**
     * @var string
     *
     * @ORM\Column(name="votes", type="string", nullable=false)
     */
    private $votes = 'YES';

    /**
     * @var integer
     *
     * @ORM\Column(name="pos", type="integer", nullable=false)
     */
    private $pos = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="category", type="integer", nullable=false)
     */
    private $category = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="owner", type="integer", nullable=false)
     */
    private $owner = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="thumb", type="integer", nullable=false)
     */
    private $thumb = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="keyword", type="string", length=50, nullable=true)
     */
    private $keyword;

    /**
     * @var string
     *
     * @ORM\Column(name="alb_password", type="string", length=32, nullable=true)
     */
    private $albPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="alb_password_hint", type="text", length=65535, nullable=true)
     */
    private $albPasswordHint;

    /**
     * @var integer
     *
     * @ORM\Column(name="moderator_group", type="integer", nullable=false)
     */
    private $moderatorGroup = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="alb_hits", type="integer", nullable=false)
     */
    private $albHits = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="aid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $aid;

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * @param int $visibility
     */
    public function setVisibility($visibility)
    {
        $this->visibility = $visibility;
    }

    /**
     * @return string
     */
    public function getUploads()
    {
        return $this->uploads;
    }

    /**
     * @param string $uploads
     */
    public function setUploads($uploads)
    {
        $this->uploads = $uploads;
    }

    /**
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param string $comments
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
    }

    /**
     * @return string
     */
    public function getVotes()
    {
        return $this->votes;
    }

    /**
     * @param string $votes
     */
    public function setVotes($votes)
    {
        $this->votes = $votes;
    }

    /**
     * @return int
     */
    public function getPos()
    {
        return $this->pos;
    }

    /**
     * @param int $pos
     */
    public function setPos($pos)
    {
        $this->pos = $pos;
    }

    /**
     * @return int
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param int $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return int
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @param int $owner
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;
    }

    /**
     * @return int
     */
    public function getThumb()
    {
        return $this->thumb;
    }

    /**
     * @param int $thumb
     */
    public function setThumb($thumb)
    {
        $this->thumb = $thumb;
    }

    /**
     * @return string
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * @param string $keyword
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;
    }

    /**
     * @return string
     */
    public function getAlbPassword()
    {
        return $this->albPassword;
    }

    /**
     * @param string $albPassword
     */
    public function setAlbPassword($albPassword)
    {
        $this->albPassword = $albPassword;
    }

    /**
     * @return string
     */
    public function getAlbPasswordHint()
    {
        return $this->albPasswordHint;
    }

    /**
     * @param string $albPasswordHint
     */
    public function setAlbPasswordHint($albPasswordHint)
    {
        $this->albPasswordHint = $albPasswordHint;
    }

    /**
     * @return int
     */
    public function getModeratorGroup()
    {
        return $this->moderatorGroup;
    }

    /**
     * @param int $moderatorGroup
     */
    public function setModeratorGroup($moderatorGroup)
    {
        $this->moderatorGroup = $moderatorGroup;
    }

    /**
     * @return int
     */
    public function getAlbHits()
    {
        return $this->albHits;
    }

    /**
     * @param int $albHits
     */
    public function setAlbHits($albHits)
    {
        $this->albHits = $albHits;
    }

    /**
     * @return int
     */
    public function getAid()
    {
        return $this->aid;
    }

    /**
     * @param int $aid
     */
    public function setAid($aid)
    {
        $this->aid = $aid;
    }


}
