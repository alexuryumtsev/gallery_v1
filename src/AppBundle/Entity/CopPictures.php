<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CopPictures
 *
 * @ORM\Table(name="cop_pictures", indexes={@ORM\Index(name="owner_id", columns={"owner_id"}), @ORM\Index(name="pic_hits", columns={"hits"}), @ORM\Index(name="pic_rate", columns={"pic_rating"}), @ORM\Index(name="aid_approved", columns={"aid", "approved"}), @ORM\Index(name="pic_aid", columns={"aid", "pid"})})
 * @ORM\Entity
 */
class CopPictures
{
    /**
     * @var integer
     *
     * @ORM\Column(name="aid", type="integer", nullable=false)
     */
    private $aid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="filepath", type="string", length=255, nullable=false)
     */
    private $filepath = '';

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=255, nullable=false)
     */
    private $filename = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="filesize", type="integer", nullable=false)
     */
    private $filesize = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="total_filesize", type="integer", nullable=false)
     */
    private $totalFilesize = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="pwidth", type="smallint", nullable=false)
     */
    private $pwidth = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="pheight", type="smallint", nullable=false)
     */
    private $pheight = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="hits", type="integer", nullable=false)
     */
    private $hits = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mtime", type="datetime", nullable=false)
     */
    private $mtime = '1000-01-01 00:00:00';

    /**
     * @var integer
     *
     * @ORM\Column(name="ctime", type="integer", nullable=false)
     */
    private $ctime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="owner_id", type="integer", nullable=false)
     */
    private $ownerId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="pic_rating", type="integer", nullable=false)
     */
    private $picRating = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="votes", type="integer", nullable=false)
     */
    private $votes = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title = '';

    /**
     * @var string
     *
     * @ORM\Column(name="caption", type="text", length=65535, nullable=false)
     */
    private $caption;

    /**
     * @var string
     *
     * @ORM\Column(name="keywords", type="string", length=255, nullable=false)
     */
    private $keywords = '';

    /**
     * @var string
     *
     * @ORM\Column(name="approved", type="string", nullable=false)
     */
    private $approved = 'NO';

    /**
     * @var integer
     *
     * @ORM\Column(name="galleryicon", type="integer", nullable=false)
     */
    private $galleryicon = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="user1", type="string", length=255, nullable=false)
     */
    private $user1 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="user2", type="string", length=255, nullable=false)
     */
    private $user2 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="user3", type="string", length=255, nullable=false)
     */
    private $user3 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="user4", type="string", length=255, nullable=false)
     */
    private $user4 = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="url_prefix", type="boolean", nullable=false)
     */
    private $urlPrefix = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pic_raw_ip", type="text", length=255, nullable=true)
     */
    private $picRawIp;

    /**
     * @var string
     *
     * @ORM\Column(name="pic_hdr_ip", type="text", length=255, nullable=true)
     */
    private $picHdrIp;

    /**
     * @var string
     *
     * @ORM\Column(name="lasthit_ip", type="text", length=255, nullable=true)
     */
    private $lasthitIp;

    /**
     * @var integer
     *
     * @ORM\Column(name="position", type="integer", nullable=false)
     */
    private $position = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="guest_token", type="string", length=32, nullable=true)
     */
    private $guestToken = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="pid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pid;

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

    /**
     * @return string
     */
    public function getFilepath()
    {
        return $this->filepath;
    }

    /**
     * @param string $filepath
     */
    public function setFilepath($filepath)
    {
        $this->filepath = $filepath;
    }

    /**
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * @param string $filename
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;
    }

    /**
     * @return int
     */
    public function getFilesize()
    {
        return $this->filesize;
    }

    /**
     * @param int $filesize
     */
    public function setFilesize($filesize)
    {
        $this->filesize = $filesize;
    }

    /**
     * @return int
     */
    public function getTotalFilesize()
    {
        return $this->totalFilesize;
    }

    /**
     * @param int $totalFilesize
     */
    public function setTotalFilesize($totalFilesize)
    {
        $this->totalFilesize = $totalFilesize;
    }

    /**
     * @return int
     */
    public function getPwidth()
    {
        return $this->pwidth;
    }

    /**
     * @param int $pwidth
     */
    public function setPwidth($pwidth)
    {
        $this->pwidth = $pwidth;
    }

    /**
     * @return int
     */
    public function getPheight()
    {
        return $this->pheight;
    }

    /**
     * @param int $pheight
     */
    public function setPheight($pheight)
    {
        $this->pheight = $pheight;
    }

    /**
     * @return int
     */
    public function getHits()
    {
        return $this->hits;
    }

    /**
     * @param int $hits
     */
    public function setHits($hits)
    {
        $this->hits = $hits;
    }

    /**
     * @return \DateTime
     */
    public function getMtime()
    {
        return $this->mtime;
    }

    /**
     * @param \DateTime $mtime
     */
    public function setMtime($mtime)
    {
        $this->mtime = $mtime;
    }

    /**
     * @return int
     */
    public function getCtime()
    {
        return $this->ctime;
    }

    /**
     * @param int $ctime
     */
    public function setCtime($ctime)
    {
        $this->ctime = $ctime;
    }

    /**
     * @return int
     */
    public function getOwnerId()
    {
        return $this->ownerId;
    }

    /**
     * @param int $ownerId
     */
    public function setOwnerId($ownerId)
    {
        $this->ownerId = $ownerId;
    }

    /**
     * @return int
     */
    public function getPicRating()
    {
        return $this->picRating;
    }

    /**
     * @param int $picRating
     */
    public function setPicRating($picRating)
    {
        $this->picRating = $picRating;
    }

    /**
     * @return int
     */
    public function getVotes()
    {
        return $this->votes;
    }

    /**
     * @param int $votes
     */
    public function setVotes($votes)
    {
        $this->votes = $votes;
    }

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
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * @param string $caption
     */
    public function setCaption($caption)
    {
        $this->caption = $caption;
    }

    /**
     * @return string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * @param string $keywords
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;
    }

    /**
     * @return string
     */
    public function getApproved()
    {
        return $this->approved;
    }

    /**
     * @param string $approved
     */
    public function setApproved($approved)
    {
        $this->approved = $approved;
    }

    /**
     * @return int
     */
    public function getGalleryicon()
    {
        return $this->galleryicon;
    }

    /**
     * @param int $galleryicon
     */
    public function setGalleryicon($galleryicon)
    {
        $this->galleryicon = $galleryicon;
    }

    /**
     * @return string
     */
    public function getUser1()
    {
        return $this->user1;
    }

    /**
     * @param string $user1
     */
    public function setUser1($user1)
    {
        $this->user1 = $user1;
    }

    /**
     * @return string
     */
    public function getUser2()
    {
        return $this->user2;
    }

    /**
     * @param string $user2
     */
    public function setUser2($user2)
    {
        $this->user2 = $user2;
    }

    /**
     * @return string
     */
    public function getUser3()
    {
        return $this->user3;
    }

    /**
     * @param string $user3
     */
    public function setUser3($user3)
    {
        $this->user3 = $user3;
    }

    /**
     * @return string
     */
    public function getUser4()
    {
        return $this->user4;
    }

    /**
     * @param string $user4
     */
    public function setUser4($user4)
    {
        $this->user4 = $user4;
    }

    /**
     * @return bool
     */
    public function isUrlPrefix()
    {
        return $this->urlPrefix;
    }

    /**
     * @param bool $urlPrefix
     */
    public function setUrlPrefix($urlPrefix)
    {
        $this->urlPrefix = $urlPrefix;
    }

    /**
     * @return string
     */
    public function getPicRawIp()
    {
        return $this->picRawIp;
    }

    /**
     * @param string $picRawIp
     */
    public function setPicRawIp($picRawIp)
    {
        $this->picRawIp = $picRawIp;
    }

    /**
     * @return string
     */
    public function getPicHdrIp()
    {
        return $this->picHdrIp;
    }

    /**
     * @param string $picHdrIp
     */
    public function setPicHdrIp($picHdrIp)
    {
        $this->picHdrIp = $picHdrIp;
    }

    /**
     * @return string
     */
    public function getLasthitIp()
    {
        return $this->lasthitIp;
    }

    /**
     * @param string $lasthitIp
     */
    public function setLasthitIp($lasthitIp)
    {
        $this->lasthitIp = $lasthitIp;
    }

    /**
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param int $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * @return string
     */
    public function getGuestToken()
    {
        return $this->guestToken;
    }

    /**
     * @param string $guestToken
     */
    public function setGuestToken($guestToken)
    {
        $this->guestToken = $guestToken;
    }

    /**
     * @return int
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * @param int $pid
     */
    public function setPid($pid)
    {
        $this->pid = $pid;
    }



    /**
     * Get urlPrefix
     *
     * @return boolean
     */
    public function getUrlPrefix()
    {
        return $this->urlPrefix;
    }
}
