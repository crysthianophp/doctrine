<?php

namespace Repository;

include_once "Entity/User.php";
include_once "Mapper/User.php";

use Mapper\User as UserMapper;
use Entity\User as UserEntity;

class User
{
    private $em;
    private $mapper;
    
    public function __construct($em) {
        $this->mapper = new UserMapper();
        $this->em = $em;
    }
    
    public function findOneById($id)
    {
        $userData = $this->em
                         ->query("SELECT * FROM users WHERE id = " . $id)
                         ->fetch();
        return $this->mapper->populate($userData, new UserEntity());
    }
}