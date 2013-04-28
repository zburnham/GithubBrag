<?php
/**
 * GithubComment.php
 * Model for the GithubComment comment.
 * Stored as Payload\CommitCommentEvent::object
 * 
 * @author zburnham
 * @verson 0.0.1
 */

namespace GithubBrag;

class GithubComment
{
    /**
     * Public URL for the comment.
     *
     * @var string
     */
    protected $html_url;
    
    /**
     * API URL for the comment.
     *
     * @var string
     */
    protected $url;
    
    /**
     * ID of the comment, used for comment order.
     *
     * @var int
     */
    protected $id;
    
    /**
     * Body of the comment.
     *
     * @var string
     */
    protected $body;
    
    /**
     * The file in the commit that this is a comment on. (?)
     *
     * @var string
     */
    protected $path;
    
    /**
     * Line index in the diff the comment is on.
     *
     * @var int
     */
    protected $position;
    
    /**
     * Line number in the file the comment is on.
     *
     * @var int
     */
    protected $line;
    
    /**
     * SHA hash of the commit.
     *
     * @var string
     */
    protected $commit_id;
    
    /**
     * User that made the comment.
     * TODO: create GithubUser class
     *
     * @var GithubUser
     */
    protected $user;
    
    /**
     * Time the comment was created in YYYY-MM-DDThh:mm:ssZ format. (ISO 8601)
     * UTC time.
     * example: 2011-04-14T16:00:49Z
     *
     * @var string
     */
    protected $created_at;
    
    /**
     * Time the comment was last modified in YYYY-MM-DDThh:mm:ssZ format. 
     * (ISO 8601)
     * UTC time.
     * example: 2011-04-14T16:00:49Z
     *
     * @var string
     */
    protected $updated_at;
    
    /**
     * @return string
     */
    public function getHtml_url()
    {
        return $this->html_url;
    }

    /**
     * @param string $html_url
     * @return \GithubBrag\GithubComment
     */
    public function setHtml_url($html_url)
    {
        $this->html_url = $html_url;
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
     * @return \GithubBrag\GithubComment
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return \GithubBrag\GithubComment
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param string $body
     * @return \GithubBrag\GithubComment
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * 
     * @param string $path
     * @return \GithubBrag\GithubComment
     */
    public function setPath($path)
    {
        $this->path = $path;
        return $this;
    }

    /**
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * 
     * @param int $position
     * @return \GithubBrag\GithubComment
     */
    public function setPosition($position)
    {
        $this->position = $position;
        return $this;
    }

    /**
     * @return int
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * @param int $line
     * @return \GithubBrag\GithubComment
     */
    public function setLine($line)
    {
        $this->line = $line;
        return $this;
    }

    /**
     * @return string
     */
    public function getCommit_id()
    {
        return $this->commit_id;
    }

    /**
     * @param string $commit_id
     * @return \GithubBrag\GithubComment
     */
    public function setCommit_id($commit_id)
    {
        $this->commit_id = $commit_id;
        return $this;
    }

    /**
     * @return GithubUser
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * 
     * @param GithubUser $user
     * @return \GithubBrag\GithubComment
     */
    public function setUser(GithubUser $user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * Format: YYY-MM-DDThh:mm:ssZ
     * Example: 2011-04-14T16:00:49Z
     * 
     * @return string
     */
    public function getCreated_at()
    {
        return $this->created_at;
    }

    /**
     * Format: YYY-MM-DDThh:mm:ssZ
     * Example: 2011-04-14T16:00:49Z
     *
     * @param string $created_at
     * @return \GithubBrag\GithubComment
     */
    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;
        return $this;
    }

    /**
     * Format: YYY-MM-DDThh:mm:ssZ
     * Example: 2011-04-14T16:00:49Z
     *
     * @return string
     */
    public function getUpdated_at()
    {
        return $this->updated_at;
    }

    /**
     * Format: YYY-MM-DDThh:mm:ssZ
     * Example: 2011-04-14T16:00:49Z
     *
     * @param string $updated_at
     * @return \GithubBrag\GithubComment
     */
    public function setUpdated_at($updated_at)
    {
        $this->updated_at = $updated_at;
        return $this;
    }
}