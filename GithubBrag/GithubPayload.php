<?php
/**
 * GithubPayload.php
 * Model for Github event's 'payload' property.
 *
 * @author zburnham
 * @version 0.0.1
 */

namespace GithubBrag;

use GithubCommit;

class GithubPayload extends AbstractClass
{
    /**
     * Unique id for the push in question.
     *
     * @var string
     */
    protected $push_id;
    
    /**
     * The number of commits in the push.
     *
     * @var int
     */
    protected $size;
    
    /**
     * No idea. TODO  
     *
     * @var int 
     */
    protected $distinct_size;
    
    /**
     * The full Git ref that was pushed. Example: “refs/heads/master”
     *
     * @var string 
     */
    protected $ref;
    
    /**
     * The SHA of the HEAD commit on the repository.
     *
     * @var string
     */
    protected $head;
    
    /**
     * ?? TODO
     *
     * @var string
     */
    protected $before;
    
    /**
     * Commits in the push event.
     *
     * @var array
     */
    protected $commits;
    
    public function __construct(array $data = array())
    {
        $this->setTable('payload');
        parent::__construct($data);
    }

    /**
     * @return string
     */
    public function getPush_id()
    {
        return $this->push_id;
    }

    /**
     * @param string $push_id
     * @return \GithubBrag\GithubPayload
     */
    public function setPush_id($push_id)
    {
        $this->push_id = $push_id;
        return $this;
    }

    /**
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param int $size
     * @return \GithubBrag\GithubPayload
     */
    public function setSize($size)
    {
        $this->size = $size;
        return $this;
    }

    /**
     * @return int
     */
    public function getDistinct_size()
    {
        return $this->distinct_size;
    }

    /**
     * @param int $distinct_size
     * @return \GithubBrag\GithubPayload
     */
    public function setDistinct_size($distinct_size)
    {
        $this->distinct_size = $distinct_size;
        return $this;
    }

    /**
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * @param string $ref
     * @return \GithubBrag\GithubPayload
     */
    public function setRef($ref)
    {
        $this->ref = $ref;
        return $this;
    }

    /**
     * @return string
     */
    public function getHead()
    {
        return $this->head;
    }

    /**
     * @param string $head
     * @return \GithubBrag\GithubPayload
     */
    public function setHead($head)
    {
        $this->head = $head;
        return $this;
    }

    /**
     * @return string
     */
    public function getBefore()
    {
        return $this->before;
    }

    /**
     * @param type $before
     * @return \GithubBrag\GithubPayload
     */
    public function setBefore($before)
    {
        $this->before = $before;
        return $this;
    }

    /**
     * @return array
     */
    public function getCommits()
    {
        return $this->commits;
    }

    /**
     * @param array $commits
     * @return \GithubBrag\GithubPayload
     */
    public function setCommits(array $commits)
    {
        $this->commits = $commits;
        return $this;
    }
}