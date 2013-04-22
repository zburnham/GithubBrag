<?php
/**
 * GithubActor.php
 * Model for Github event's 'actor' property.
 * 
 * @author zburnham
 * @version 0.0.1
 */

namespace GithubBrag;
    
class GithubActor extends \GithubBrag\AbstractClass
{
    /**
     * Unique ID.
     * 
     * @var string
     */
    protected $id;
    
    /**
     * Foreign key.
     * 
     * @var string
     */
    protected $event_id;
    
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
     * Class constructor.  Optionally populates properties with a supplied data
     * array.
     * 
     * @param array|stdClass $data
     */
    public function __construct($data = NULL)
    {
        $this->setTable('actor');
        parent::__construct($data);
    }
    
    public function save()
    {
        $data = array();
        $columns = array(
            'id',
            'event_id',
            'login',
            'gravatar_id',
            'url',
        );
        foreach ($columns as $column) {
            $method = 'get' . ucfirst($column);
            if (NULL == $this->$method()) {
                throw new \Exception($column . ' is not set.');
            }
            $data[$column] = $this->$method();
        }
        $this->getWpdb()->insert($this->getTable(), $data);
    }
    
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
    public function getEvent_id()
    {
        return $this->event_id;
    }

    /**
     * @param string $event_id
     * @return \GithubBrag\GithubActor
     */
    public function setEvent_id($event_id)
    {
        $this->event_id = $event_id;
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