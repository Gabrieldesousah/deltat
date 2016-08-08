<?php
namespace App\Model\Entity;
use Cake\ORM\Entity;

class Portfolio extends Entity {

    protected $_acessible = [
        'title' => true,
        'text'  => true,
        'url'  => true,
        'thumbnail'  => true,
        'category'  => true,
        'local'  => true
    ];
}