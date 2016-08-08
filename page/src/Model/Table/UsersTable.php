<?php
namespace App\Model\Table;
use Cake\ORM\Table;

use Cake\Validation\Validator;

$validator = new Validator();

class UsersTable extends Table {

    public function initialize(array $config){
        $this->addBehavior('Timestamp');
        $this->displayField('name');
    }

    public function validationDefault(Validator $validator){
        $validator
            ->requirePresence('name', 'create') //Requere o campo title na hora do create)
            ->notEmpty('name');
        $validator
            ->requirePresence('email', 'create')
            ->notEmpty('email');
        return $validator;
    }
}