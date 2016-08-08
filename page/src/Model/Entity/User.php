<?php
namespace App\Model\Entity;
use Cake\ORM\Entity;

class User extends Entity {

    protected $_acessible = [
        'name' => true,
        'email'  => true
    ];
}