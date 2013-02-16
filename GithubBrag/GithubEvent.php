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
     * Event type.
     *
     * @var string
     */
    protected $type;
    
    /**
     * Public status of event.
     *
     * @var bool
     */
    protected $public;
    
    /**
     * Event payload.
     *
     * @var GithubEventPayload
     */
    protected $payload;
    
    /**
     * Date of event.
     *
     * @var string
     */
    protected $created_at;
    
    /**
     * ID of event.
     *
     * @var string
     */
    protected $id;
    
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
    public function setPublic(bool $public)
    {
        $this->public = $public;
        return $this;
    }

    /**
     * @return GithubEventPayload
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * @param type $payload
     * @return \GithubBrag\GithubEvent
     */
    public function setPayload($payload)
    {
        $this->payload = $payload;
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
}