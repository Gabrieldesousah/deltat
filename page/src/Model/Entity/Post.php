<?php
namespace App\Model\Entity;
use Cake\ORM\Entity;

class Posts extends Entity {

    protected $_acessible = [
        'title' => true,
        'text'  => true
    ];
}