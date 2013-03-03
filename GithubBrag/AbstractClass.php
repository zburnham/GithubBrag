<?php
/**
 * AbstractClass.php
 * Abstract class to provide some common methods.
 * 
 * @author zburnham
 * @version 0.0.1
 */

namespace GithubBrag;

class AbstractClass
{
    /**
     * Database table name.
     *
     * @var string
     */
    protected $table;
    
    /**
     * WordPress database connection object.
     *
     * @var wpdb
     */
    protected $wpdb;
    
    /**
     * Class variables not intended for storage.
     *
     * @var array
     */
    protected $metadata;
    
    /**
     * Full table name with Wordpress prefix.
     *
     * @var string
     */
    protected $wpdb_table;
    
    /**
     * Columns to save data to in database.
     *
     * @var array
     */
    protected $columns;
    
    /**
     * Names of child objects.
     * 
     * @var array
     */
    protected $children;
    
    /**
     * Class constructor.
     * 
     * @param array $data
     */
    public function __construct(array $data = array())
    {
        if (count($data))
        {
            $this->hydrate($data);
        }
    }
    
    /**
     * Persists the object and all child objects.
     * 
     * @throws \Exception
     */
    public function save()
    {
        $data = array();
        $columns = $this->getColumns();
        foreach ($columns as $column) {
            $method = 'get' . ucfirst($column);
            if (NULL == $this->$method()) {
                throw new \Exception($column . ' is not set.');
            }
            $data[$column] = $this->$method();
        }
        $this->getWpdb()->insert($this->getTable(), $data);
        
        $children = $this->getChildren();
        foreach ($children as $child)
        {
            $child->save();
        }
    }
    
    /**
     * Get values from database.
     * 
     * @param string $column
     * @param string $value
     * @return \GithubBrag\AbstractClass
     */
    public function load($column, $value)
    {
        $query = "SELECT * FROM `" . $this->getTable() .
                "` WHERE `" . $column . "` = '" . $value . "'";
        $data = $this->getWpdb()->get_row($query, ARRAY_A);
        $this->hydrate($data);
        return $this;
    }
    
    /**
     * Populate the object properties and child objects.
     * 
     * @param array $data
     */
    public function hydrate(array $data)
    {
        foreach($data as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (is_array($value)) {
                $class = 'Github' . ucfirst($key);
                $this->$method(new $class($value));
            } else {
                $this->$method($value);
            }
        }
    }
    
    /**
     * @return string
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * @param string $table
     * @return \GithubBrag\AbstractClass
     */
    public function setTable($table)
    {
        $this->table = $table;
        return $this;
    }

    /**
     * @return wpdb
     */
    public function getWpdb()
    {
        return $this->wpdb;
    }

    /**
     * 
     * @param \wpdb $wpdb
     * @return \GithubBrag\AbstractClass
     */
    public function setWpdb(\wpdb $wpdb)
    {
        $this->wpdb = $wpdb;
        return $this;
    }

    /**
     * Get variables that are not to be persisted in database, like wpdb
     * object, table name, etc.
     * 
     * @return array
     */
    public function getMetadata()
    {
        if (!is_array($this->metadata) || !count($this->metadata))
        {
            $this->setMetadata('wpdb', 'table', 'metadata'); // waaaaaay meta.
        }
        return $this->metadata;
    }

    /**
     * @param array $metadata
     * @return \GithubBrag\AbstractClass
     */
    public function setMetadata(array $metadata)
    {
        $this->metadata = $metadata;
        return $this;
    }

    public function getColumns()
    {
        return $this->columns;
    }

    public function setColumns($columns)
    {
        $this->columns = $columns;
    }

    public function getChildren()
    {
        return $this->children;
    }

    public function setChildren($children)
    {
        $this->children = $children;
    }
}