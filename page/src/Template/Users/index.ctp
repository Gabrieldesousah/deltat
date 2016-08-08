<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
          
        <h1>Users</h1>

        <style>
        table thead tr th{
            text-align: center;
            text-transform:capitalize;
        }
        </style>
        <div class="posts index">
          <div class="table-container">
        	<table class="table table-condensed col-lg-12">
                <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('id')       ?></th>
                        <th><?= $this->Paginator->sort('title', 'título')    ?></th>
                        <th><?= $this->Paginator->sort('created', 'criado em:')  ?></th>
                        <th><?= $this->Paginator->sort('modified', 'modificado em:') ?></th>
                        <th><?= __("Actions") ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($users as $user): ?>
                        <tr>
                            <td><?= $user->id ?></td>
                            <td><?= $this->Html->link($user->name, ['controller'=>'Users', 'action'=>'view',$user->id]) ?></td>
                            <td><?= $user->created  ?></td>
                            <td><?= $user->modified ?></td>
                            <td>
                                <?= $this->Html->link(__('Edit'), ['action'=>'edit', $user->id]) ?>
                                |
                                <?= $this->Form->postLink(__('Delete'), ['action'=>'delete',$user->id],
                                    ['confirm'=>__('Are you sure you want to delete the post * {0}?', $user->id)]
                                ) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
          </div>
        </div>
        
        <div class="paginator">
            <ul class="pagination">
                <?php
                echo $this->Paginator->prev('<- Previous');
                echo $this->Paginator->numbers();
                echo $this->Paginator->next('Next ->');
                ?>
            </ul>
        </div>
        
        <div class="col-lg-12">
            <?= $this->Html->link(__('Criar novo'), ['action'=>'add']) ?>
        </div>

        
        
        
        
        
        
        
        
        
        
