<?php
namespace App\Controller;
date_default_timezone_set('America/Sao_Paulo');

class UsersController extends AppController{
    public $components = array('Paginator');
    public $paginate = array(
        'limit' => 5,
        'order' => array(
            'User.name' => 'asc'
        )
    );

    public function index() {
        $this->set('users', $this->paginate($this->Users));
    }

    public function view($id = null){
        $user = $this->Users->get($id);
        $this->set('user', $user);
    }

    public function add(){
        $user = $this->Users->newEntity(); //Transform array data in entity object
        $this->set('user', $user);
        if($this->request->is(['user', 'post'])){
            $this->Users->patchEntity($user, $this->request->data);
            if($this->Users->save($user)){
                $this->Flash->success(__('A new user was published in the blog.'));
                //$this->redirect(['action'=>'index']);
            }else{
                $this->Flash->error(__('The user could not be saved. Try again, please.'));
            }

        }
        $this->set(compact('user'));
    }

    public function edit($id = null){

        $user = $this->Users->get($id);
        $this->set('user', $user);

        if($this->request->is(['user', 'put', 'patch'])){

            $this->Users->patchEntity($user, $this->request->data);

            if($this->Users->save($user)){
                $this->Flash->success(__("The user was edited"));
            }else{
                $this->Flash->error(__("The user could not be updated. Please, again."));
            }
        }
    }

    public function delete($id = null){
        $user = $this->Users->get($id);

        if($this->Users->delete($user)){
            $this->Flash->success(__("The user was deleted"));
        }else{
            $this->Flash->error(__("The user could not be deleted. Please, again."));
        }
        $this->redirect(['action'=>'index']);
    }
}