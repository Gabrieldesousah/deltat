<?php
namespace App\Model\Table;
use Cake\ORM\Table;

use Cake\Validation\Validator;

$validator = new Validator();

class GaleriaTable extends Table {

    public function initialize(array $config){
        $this->addBehavior('Timestamp');
        $this->displayField('title');
    }

    public function validationDefault(Validator $validator){
        $validator
            ->requirePresence('album', 'create'); //Requere o campo title na hora do create)


        $validator
            ->requirePresence('url', 'create')
            ->notEmpty('url');
        return $validator;
    }
}