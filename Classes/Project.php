<?php


class Project
{
    public $id;
    public $name;
    public $image;
    public $discription;
    public $link;
    public $github_link;

    public function __construct()
    {
        settype($this->id, 'integer');       
    }
}