<?php
namespace App\Controller;
date_default_timezone_set('America/Sao_Paulo');

class PortfolioController extends AppController{
    public $components = array('Paginator');
    public $paginate = array(
        'limit' => 5,
        'order' => array(
            'Portfolio.title' => 'asc'
        )
    );

    public function index(){
        $this->set('posts', $this->paginate($this->Portfolio));
    }

    public function view($id = null){
        $post = $this->Portfolio->get($id);
        $this->set('post', $post);
    }

    public function add(){
        $post = $this->Portfolio->newEntity(); //Transform array data in entity object
        $this->set('post', $post);
        if($this->request->is(['post', 'post'])){
            $this->Portfolio->patchEntity($post, $this->request->data);
            if($this->Portfolio->save($post)){
                $this->Flash->success(__('A new post was published in the blog.'));
                //$this->redirect(['action'=>'index']);
            }else{
                $this->Flash->error(__('The post could not be saved. Try again, please.'));
            }
        }
        $this->set(compact('post'));
    }

    public function edit($id = null){

        $post = $this->Portfolio->get($id);
        $this->set('post', $post);

        if($this->request->is(['post', 'put', 'patch'])){

            $this->Portfolio->patchEntity($post, $this->request->data);

            if($this->Portfolio->save($post)){
                $this->Flash->success(__("The post was edited"));
            }else{
                $this->Flash->error(__("The post could not be updated. Please, again."));
            }
        }
    }

    public function delete($id = null){
        //$this->request->allowMethod(['post', 'delete']);

        $post = $this->Portfolio->get($id);

        if($this->Portfolio->delete($post)){
            $this->Flash->success(__("The post was deleted"));
        }else{
            $this->Flash->error(__("The post could not be deleted. Please, again."));
        }
        $this->redirect(['action'=>'index']);
    }
}
