<?php
class Database
{
    public $config;
    
    public function __construct($config)
    {
        $this->config = $config;
    }

    function selecAll($table){
        return fetchAllTasks(connectDB($this->config));
    }
}