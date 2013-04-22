<?php
/**
 * GithubEvent.php
 * Model for Github event data structure.
 * 
 * @author zburnham
 * @version 0.0.1
 */

namespace GithubBrag;

class GithubEvent extends AbstractClass
{
    /**
     * ID of event.
     *
     * @var string
     */
    protected $id;
    
    /**
     * Event type.
     *
     * @var string
     */
    protected $type;
    
    /**
     * Actor information.
     *
     * @var GithubActor
     */
    protected $actor;
    
    /**
     * Repository information.
     *
     * @var GithubRepo
     */
    protected $repo;
    
    /**
     * Event payload.
     *
     * @var GithubPayload
     */
    protected $payload;
    
    /**
     * Public status of event.
     *
     * @var bool
     */
    protected $public;
    
    /**
     * Date of event.
     *
     * @var string
     */
    protected $created_at;
    
    /**
     * Columns to save data into.
     *
     * @var array
     */
    protected $columns = array(
        'created_at',
        'id', 
        'public',
        'type',
    );
    
    /**
     * Child objects.
     *
     * @var array
     */
    protected $children = array(
        'actor',
        'repo',
        'payload',
    );

    /**
     * Class constructor.
     * 
     * @param array|stdClass $data
     */
    public function __construct($data)
    {
        $this->setTable('event');
        parent::__construct($data);
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
     * @return \GithubBrag\GithubEvent
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    
    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return \GithubBrag\GithubEvent
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
    
    /**
     * @return GithubActor
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * @param array $actor
     * @return \GithubBrag\GithubEvent
     */
    public function setActor($actor)
    {
        $this->actor = $actor;
        return $this;
    }
    
    /**
     * @return GithubRepo
     */
    public function getRepo()
    {
        return $this->repo;
    }

    /**
     * @param GithubRepo $repo
     * @return \GithubBrag\GithubEvent
     */
    public function setRepo(GithubRepo $repo)
    {
        $this->repo = $repo;
        return $this;
    }
    
    /**
     * @return GithubPayload
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * @param array $payload
     * @return \GithubBrag\GithubEvent
     */
    public function setPayload($payload)
    {
        $this->payload = $payload;
        return $this;
    }
    
    /**
     * @return bool
     */
    public function getPublic()
    {
        return $this->public;
    }

    /**
     * @param bool $public
     * @return \GithubBrag\GithubEvent
     */
    public function setPublic($public)
    {
        $this->public = $public;
        return $this;
    }
    
    /**
     * @return string
     */
    public function getCreated_at()
    {
        return $this->created_at;
    }

    /**
     * @param string $created_at
     * @return \GithubBrag\GithubEvent
     */
    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;
        return $this;
    }
}