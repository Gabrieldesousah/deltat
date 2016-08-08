<?php
namespace App\Model\Entity;
use Cake\ORM\Entity;

class Galeria extends Entity {

    protected $_acessible = [
        'title' => true,
        'text'  => true,
        'url'  => true,
        'thumbnail'  => true,
        'category'  => true,
        'album'  => true
    ];
}