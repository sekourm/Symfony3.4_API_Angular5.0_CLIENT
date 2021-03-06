<?php

namespace ApiBundle\Repository;

/**
 * ProjectsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProjectsRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * @return array
     */
    public function getProjects() {
        $projects = $this->createQueryBuilder('u')
            ->where('u.active = :active AND (u.begin_at < :date AND u.end_at > :date)')
            ->setParameter('active', 1)
            ->setParameter('date', new \DateTime())
            ->getQuery()
            ->getArrayResult();

        return $projects;
    }

    /**
     * @param $project_id
     * @return array
     */
    public function getProject($project_id) {
        $project = $this->createQueryBuilder('u')
            ->where('u.active = :active AND u.id = :project_id')
            ->setParameter('active', 1)
            ->setParameter('project_id', $project_id)
            ->getQuery()
            ->getArrayResult();

        return $project;
    }

    /**
     * @param $name
     * @return array
     */
    public function getProjectByName($name) {
        $project = $this->createQueryBuilder('u')
            ->where('u.active = :active AND u.name = :name')
            ->setParameter('active', 1)
            ->setParameter('name', $name)
            ->getQuery()
            ->getArrayResult();

        return $project;
    }

    /**
     * @return array
     */
    public function getUserSubjects() {
        $projects = $this->createQueryBuilder('u')
            ->join('u.ProjectUsers', 't', 'WITH', 't.active = :active')
            ->where('u.active = :active AND t.id = :id')
            ->setParameter('id', 1)
            ->setParameter('active', 1)
            ->getQuery()
            ->getArrayResult();

        return $projects;
    }
}
