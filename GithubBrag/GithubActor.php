<?php
/**
 * GithubActor.php
 * Model for Github event's 'actor' property.
 * 
 * @author zburnham
 * @version 0.0.1
 */

namespace GithubBrag;

class GithubActor extends AbstractClass
{
    /**
     * Unique ID.
     * 
     * @var string
     */
    protected $id;
    
    /**
     * Login name of the actor.
     *
     * @var string
     */
    protected $login;
    
    /**
     * ID for Gravatar.. well, avatar.
     *
     * @var string
     */
    protected $gravatar_id;
    
    /**
     * URL for the actor's homepage on Github.
     *
     * @var string
     */
    protected $url;
    
    /**
     * Full URL to avatar image from Gravatar.
     *
     * @var string
     */
    protected $avatar_url;
    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return \GithubBrag\GithubActor
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param string $login
     * @return \GithubBrag\GithubActor
     */
    public function setLogin($login)
    {
        $this->login = $login;
        return $this;
    }

    /**
     * @return string
     */
    public function getGravatar_id()
    {
        return $this->gravatar_id;
    }

    /**
     * @param string $gravatar_id
     * @return \GithubBrag\GithubActor
     */
    public function setGravatar_id($gravatar_id)
    {
        $this->gravatar_id = $gravatar_id;
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
     * @return \GithubBrag\GithubActor
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string
     */
    public function getAvatar_url()
    {
        return $this->avatar_url;
    }

    /**
     * @param type $avatar_url
     * @return \GithubBrag\GithubActor
     */
    public function setAvatar_url($avatar_url)
    {
        $this->avatar_url = $avatar_url;
        return $this;
    }
}