<!-- Galeria Aside -->

<?= $this->Html->css('blueimp-gallery.min.css') ?>
<?= $this->Html->css('gallery.css') ?>

<section class="gallery">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading">
                <?= $this->Html->link(__('Galería'), ['controller' => 'Galeria']) ?>
              </h2>
                <h3 class="section-subheading text-muted"></h3>
            </div>
            <!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
            <div id="blueimp-gallery" class="blueimp-gallery">
                <!-- The container for the modal slides -->
                <div class="slides"></div>
                <!-- Controls for the borderless lightbox -->
                <h3 class="title"></h3>
                <a class="prev">‹</a>
                <a class="next">›</a>
                <a class="close">×</a>
                <a class="play-pause"></a>
                <ol class="indicator"></ol>
                <!-- The modal dialog, which will be used to wrap the lightbox content -->
                <div class="modal fade">
                    <div class="modal-dialog" style="width: 70%; margin-left:15%">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" aria-hidden="true">&times;</button>
                                <h4 class="modal-title"></h4>
                            </div>
                            <div class="modal-body next"></div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default pull-left prev">
                                    <i class="glyphicon glyphicon-chevron-left"></i>
                                    Previous
                                </button>
                                <button type="button" class="btn btn-primary next">
                                    Next
                                    <i class="glyphicon glyphicon-chevron-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div id="links">
              <?php foreach($posts as $post): ?>
                <div class="col-lg-3" style="padding:0">
                    <a href="<?php echo "img/galeria/".$post->album."/".$post->url;?>" title="<?php echo $post->album;?>" data-gallery>
                        <?= $this->Html->image("galeria/".$post->album."/".$post->url, ['class'=> "img-responsive"]); ?>
                    </a>
                </div>
              <?php endforeach; ?>
            </div>


            <?= $this->Html->script('jquery.min.js') ?>
            <?= $this->Html->script('jquery.blueimp-gallery.min.js') ?>
            <?= $this->Html->script('gallery.js') ?>


        </div>
    </div>
</section>


    <div class="container">
        <div class="row">
            <div class="paginator" style="text-align:center;">
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
