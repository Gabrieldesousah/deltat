    <aside class="gallery" style="padding:120px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">GALERÍA</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>

                <div>
                  <?php foreach($posts as $post): ?>
                    <div class="col-lg-3" style="padding:0">
                        <?php echo $this->Html->image("galeria/".$post->album."/".$post->url, ['class'=> "img-responsive"]);?>
                    </div>
                  <?php endforeach; ?>
                </div>
            </div>
        </div>
    </aside>


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
