<?php
/**
 * GithubRepo.php
 * Model for Github events 'repo' property.
 * 
 * @author zburnham
 * @version 0.0.1
 */

namespace GithubBrag;

class GithubRepo extends AbstractClass
{
    /**
     * Unique ID.
     *
     * @var string
     */
    protected $id;
    
    /**
     * Name of the repository, in :user/:repo format.
     *
     * @var string
     */
    protected $name;
    
    /**
     * URL to call the API for further information about the repository.
     *
     * @var string
     */
    protected $url;
    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string$id
     * @return \GithubBrag\GithubRepo
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return \GithubBrag\GithubRepo
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return \GithubBrag\GithubRepo
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }
}