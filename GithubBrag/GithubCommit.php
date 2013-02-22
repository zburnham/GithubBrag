<?php
/**
 * GithubCommit.php
 * Model to handle the Github payload's 'commit' property.
 * 
 * @author zburnham
 * @version 0.0.1
 */

namespace GithubBrag;

class GithubCommit extends AbstractClass
{
    /**
     * The SHA of the commit.
     *
     * @var string
     */
    protected $sha;
    
    /**
     * The git author of the commit.
     *
     * @var GithubAuthor
     */
    protected $author;
    
    /**
     * The commit message.
     *
     * @var string
     */
    protected $message;
    
    /**
     * Whether this commit is distinct from any that have been pushed before.
     *
     * @var bool
     */
    protected $distinct;
    
    /**
     * Points to the commit API resource.
     *
     * @var string
     */
    protected $url;
    
    /**
     * @return string
     */
    public function getSha()
    {
        return $this->sha;
    }

    /**
     * @param string $sha
     * @return \GithubBrag\GithubCommit
     */
    public function setSha($sha)
    {
        $this->sha = $sha;
        return $this;
    }

    /**
     * @return GithubAuthor
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param \GithubBrag\GithubAuthor $author
     * @return \GithubBrag\GithubCommit
     */
    public function setAuthor(GithubAuthor $author)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return \GithubBrag\GithubCommit
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return bool
     */
    public function getDistinct()
    {
        return $this->distinct;
    }

    /**
     * @param bool $distinct
     * @return \GithubBrag\GithubCommit
     */
    public function setDistinct(bool $distinct)
    {
        $this->distinct = $distinct;
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
     * @return \GithubBrag\GithubCommit
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }
}