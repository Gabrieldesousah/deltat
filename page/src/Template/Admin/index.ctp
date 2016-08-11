<aside class="gallery" style="padding:120px">
<h2 class=" text-center">Manage your page</h2>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
          <div>
            <h3 class="section-heading">GALERÍA</h3>
            <?= $this->Html->link(__('Criar novo'), ['controller' => 'Galeria', 'action'=>'add'], array('class' => 'btn btn-info')) ?>
          </div>
          <div>
            <h3 class="section-heading">PORTFOLIO</h3>
            <?= $this->Html->link(__('Criar novo'), ['controller' => 'Portfolio', 'action'=>'add'], array('class' => 'btn btn-info')) ?>
          </div>

        </div>

    </div>
</div>
</aside>
