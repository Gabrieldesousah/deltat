<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <style>
        textarea{
            width:400px;
        }
        label{
            width:250px;
            text-align:left;
            padding:0;
        }
        input{
            width:240px;
        }
        textarea{
            width:490px;
        }
        @media screen and (max-width: 600px) {
        	textarea {
        		width: 240px;
        	}
        }
        </style>
        <div class="columns medium-8 content">
            <?= $this->Form->create($post); ?>
            <fieldeset>
                <legend>Adicionar novo post</legend>
                <?php
                    echo $this->Form->input('id', ['type'=>'hidden']);
                    echo $this->Form->input('title', array('label' => array(
                            'class' => 'title',
                            'text' => 'Título'
                        )));
                    echo $this->Form->input('url', array('label' => array(
                            'class' => 'title',
                            'text' => 'Url da imagem'
                        )));

                    echo $this->Form->input('album', array('label' => array(
                            'class' => 'title',
                            'text' => 'Album'
                        )));
                    echo '<br>'.$this->Form->input('text', array('label' => false, 'placeholder' => 'Informações'));
                ?>
            </fieldeset>
            <?= $this->Form->button(__('Adicionar imagem'), array('class' => 'btn button')); ?>
            <?= $this->Form->end(); ?>
        </div>

      </div>
    </div>
  </div>
</section>