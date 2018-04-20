<?php

namespace ApiBundle\Entity;

/**
 * Team_details
 */
class Team_details
{
    /**
     * @var int
     */
    private $id;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @var string
     */
    private $name;

    /**
     * @var boolean
     */
    private $active = 1;

    /**
     * @var \DateTime
     */
    private $created_at;

    /**
     * @var \DateTime
     */
    private $update_at;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return Team_details
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
     * Set active
     *
     * @param boolean $active
     *
     * @return Team_details
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Team_details
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updateAt
     *
     * @param \DateTime $updateAt
     *
     * @return Team_details
     */
    public function setUpdateAt($updateAt)
    {
        $this->update_at = $updateAt;

        return $this;
    }

    /**
     * Get updateAt
     *
     * @return \DateTime
     */
    public function getUpdateAt()
    {
        return $this->update_at;
    }

    public function insertCreatedAtAuto()
    {
        $this->setCreatedAt(new \DateTime());
    }
    public function insertUpdateAtAuto()
    {
        $this->setUpdateAt(new \DateTime());
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $TeamUsersDetails;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->TeamUsersDetails = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add teamUsersDetail
     *
     * @param \ApiBundle\Entity\Users_team $teamUsersDetail
     *
     * @return Team_details
     */
    public function addTeamUsersDetail(\ApiBundle\Entity\Users_team $teamUsersDetail)
    {
        $this->TeamUsersDetails[] = $teamUsersDetail;

        return $this;
    }

    /**
     * Remove teamUsersDetail
     *
     * @param \ApiBundle\Entity\Users_team $teamUsersDetail
     */
    public function removeTeamUsersDetail(\ApiBundle\Entity\Users_team $teamUsersDetail)
    {
        $this->TeamUsersDetails->removeElement($teamUsersDetail);
    }

    /**
     * Get teamUsersDetails
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTeamUsersDetails()
    {
        return $this->TeamUsersDetails;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $TeamSubject;


    /**
     * Add teamSubject
     *
     * @param \ApiBundle\Entity\Subjects_team $teamSubject
     *
     * @return Team_details
     */
    public function addTeamSubject(\ApiBundle\Entity\Subjects_team $teamSubject)
    {
        $this->TeamSubject[] = $teamSubject;

        return $this;
    }

    /**
     * Remove teamSubject
     *
     * @param \ApiBundle\Entity\Subjects_team $teamSubject
     */
    public function removeTeamSubject(\ApiBundle\Entity\Subjects_team $teamSubject)
    {
        $this->TeamSubject->removeElement($teamSubject);
    }

    /**
     * Get teamSubject
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTeamSubject()
    {
        return $this->TeamSubject;
    }
    /**
     * @var integer
     */
    private $tokens_credit;


    /**
     * Set tokensCredit
     *
     * @param integer $tokensCredit
     *
     * @return Team_details
     */
    public function setTokensCredit($tokensCredit)
    {
        $this->tokens_credit = $tokensCredit;

        return $this;
    }

    /**
     * Get tokensCredit
     *
     * @return integer
     */
    public function getTokensCredit()
    {
        return $this->tokens_credit;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $TeamTokens;


    /**
     * Add teamToken
     *
     * @param \ApiBundle\Entity\Tokens_transaction $teamToken
     *
     * @return Team_details
     */
    public function addTeamToken(\ApiBundle\Entity\Tokens_transaction $teamToken)
    {
        $this->TeamTokens[] = $teamToken;

        return $this;
    }

    /**
     * Remove teamToken
     *
     * @param \ApiBundle\Entity\Tokens_transaction $teamToken
     */
    public function removeTeamToken(\ApiBundle\Entity\Tokens_transaction $teamToken)
    {
        $this->TeamTokens->removeElement($teamToken);
    }

    /**
     * Get teamTokens
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTeamTokens()
    {
        return $this->TeamTokens;
    }
}
