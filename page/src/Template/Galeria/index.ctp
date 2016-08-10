    <aside class="gallery" style="padding:120px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">GALERÍA</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>

                <div class="col-lg-12 centered ">
                    <?= $this->Html->link(__('Criar novo'), ['action'=>'add'], array('class' => 'btn btn-info')) ?>
                </div>

                <div>
                  <?php foreach($posts as $post): ?>
                    <div class="col-lg-3" style="padding:0">
                        <?php echo $this->Html->image("galeria/".$post->album."/".$post->url, ['class'=> "img-responsive"]);?>
                        <p>
                            <?= $this->Html->link(__('Editar'), ['action'=>'edit', $post->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action'=>'delete',$post->id],
                                ['confirm'=>__('Are you sure you want to delete the post * {0}?', $post->id)]
                            ) ?>
                        </p>
                    </div>
                  <?php endforeach; ?>
                </div>
            </div>
        </div>
    </aside>


    <div class="container">
        <div class="row">
            <div class="paginator">
                <ul class="pagination">
                    <?php
                    echo $this->Paginator->prev('<- Previous');
                    echo $this->Paginator->numbers();
                    echo $this->Paginator->next('Next ->');
                    ?>
                </ul>
            </div>
        </div>
    </div>
