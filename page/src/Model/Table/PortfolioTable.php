<?php
namespace App\Model\Table;
use Cake\ORM\Table;

use Cake\Validation\Validator;

$validator = new Validator();

class PortfolioTable extends Table {

    public function initialize(array $config){
        $this->addBehavior('Timestamp');
        $this->displayField('title');
    }

    public function validationDefault(Validator $validator){
        $validator
            ->requirePresence('title', 'create') //Requere o campo title na hora do create)
            ->notEmpty('title');
        $validator
            ->requirePresence('text', 'create')
            ->notEmpty('text');
        $validator
            ->requirePresence('url', 'create')
            ->notEmpty('url');
        return $validator;
    }
}