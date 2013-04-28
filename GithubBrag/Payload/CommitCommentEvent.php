<?php
/**
 * CommitCommentEvent.php
 * Model for the CommitComment event.
 * 
 * @author zburnham
 * @version 0.0.1
 */

namespace GithubBrag\Payload;

use GithubBrag\AbstractClass;
use GithubBrag\GithubComment;

class CommitCommentEvent extends AbstractClass
{
    /**
     * The comment itself.
     * 
     * @var GithubComment
     */
    protected $object;
    
    public function getObject()
    {
        return $this->object;
    }

    public function setObject(GithubComment $object)
    {
        $this->object = $object;
        return $this;
    }
}