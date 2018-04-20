<?php

namespace ApiBundle\Entity;

/**
 * Users_team
 */
class Users_team
{
    /**
     * @var integer
     */
    private $id;

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
     * @var \ApiBundle\Entity\Users
     */
    private $TeamUsers;

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
     * Set active
     *
     * @param boolean $active
     *
     * @return Users_team
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
     * @return Users_team
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
     * @return Users_team
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

    /**
     * Set teamUsers
     *
     * @param \ApiBundle\Entity\Users $teamUsers
     *
     * @return Users_team
     */
    public function setTeamUsers(\ApiBundle\Entity\Users $teamUsers = null)
    {
        $this->TeamUsers = $teamUsers;

        return $this;
    }

    /**
     * Get teamUsers
     *
     * @return \ApiBundle\Entity\Users
     */
    public function getTeamUsers()
    {
        return $this->TeamUsers;
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
     * @var \ApiBundle\Entity\Team_details
     */
    private $TeamsDetails;


    /**
     * Set teamsDetails
     *
     * @param \ApiBundle\Entity\Team_details $teamsDetails
     *
     * @return Users_team
     */
    public function setTeamsDetails(\ApiBundle\Entity\Team_details $teamsDetails = null)
    {
        $this->TeamsDetails = $teamsDetails;

        return $this;
    }

    /**
     * Get teamsDetails
     *
     * @return \ApiBundle\Entity\Team_details
     */
    public function getTeamsDetails()
    {
        return $this->TeamsDetails;
    }
}
