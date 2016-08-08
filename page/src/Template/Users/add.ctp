<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">

        <style>
        textarea{
            width:400px;
        }
        label{
            width:200px;
            text-align:left;
            padding:0;
        }
        input{
            width:200px;
        }
        </style>
        <div class="columns medium-8 content">
            <?= $this->Form->create($user); ?>
            <fieldeset>
                <legend>Adicionar novo post</legend>
                <?php
                    echo $this->Form->input('id', ['type'=>'hidden']);
                    echo $this->Form->input('name', array('label' => array(
                            'class' => 'title',
                            'text' => 'Nome do produto'
                        )));
                    echo $this->Form->input('email', array('label' => array(
                            'class' => 'title',
                            'text' => 'Email'
                        )));
                ?>
            </fieldeset>
            <?= $this->Form->button(__('Editar post'), array('class' => 'btn button')); ?>
            <?= $this->Form->end(); ?>
        </div>

      </div>
    </div>
  </div>
</section>