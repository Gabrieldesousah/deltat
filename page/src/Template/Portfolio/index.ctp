    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Portfolio</h2>
                    <h3 class="section-subheading text-muted">Here, the our images.</h3>
                </div>


            <?php $i = 1; ?>
              <?php foreach($posts as $post): ?>
                <div class="col-md-6 col-sm-6 portfolio-item">
                    <a href="#portfolioModal<?= $i ?>" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <?= $this->Html->image("portfolio/$post->url", ['class'=> "img-responsive"]); ?>
                    </a>
                    <div class="portfolio-caption">
                        <h4><?= $post->title ?></h4>
                        <p class="text-muted"><?= $post->category ?></p>

                    </div>
                </div>
                <?php $i++; ?>
              <?php endforeach; ?>
            </div>

        </div>
    </section>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->
    <?php $i = 1; ?>
    <?php foreach($posts as $post): ?>
    <div class="portfolio-modal modal fade" id="portfolioModal<?= $i ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2><?= $post->title ?></h2>
                            <p class="item-intro text-muted"><?= $post->category ?></p>
                            <?= $this->Html->image("portfolio/$post->url", ['class'=> "img-responsive"]); ?>
                            <p><?= $post->text ?><p>

                            <ul class="list-inline">
                                <li>Date: <?= $post->created ?></li>
                                <li>Local: <?= $post->local ?></li>
                                <li>Category: <?= $post->category ?></li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $i++; ?>
    <?php endforeach; ?>


    <div class="container">
        <div class="row">
            <div class="paginator text-center">
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
