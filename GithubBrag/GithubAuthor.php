<?php
/**
 * GithubAuthor.php
 * Model for Github commit's "author" property.
 * 
 * @author zburnham
 * @version 0.0.1
 */

namespace Githubbrag;

class GithubAuthor extends AbstractClass
{
    /**
     * Foreign key.
     *
     * @var string
     */
    protected $sha;
    
    /**
     * Email of the author.
     *
     * @var string
     */
    protected $email;
    
    /**
     * Author's name.
     *
     * @var string
     */
    protected $name; 
    
    /**
     * @return string
     */
    public function getSha()
    {
        return $this->sha;
    }

    /**
     * @param string $sha
     * @return \Githubbrag\GithubAuthor
     */
    public function setSha($sha)
    {
        $this->sha = $sha;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return \Githubbrag\GithubAuthor
     */
    public function setEmail($email)
    {
        $this->email = $email;
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
     * @return \Githubbrag\GithubAuthor
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}