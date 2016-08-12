    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in"></div>
                <div class="intro-heading">Representación de Contaduría Pública y Estrategia Financiera 2016</div>
                <a href="#about" class="page-scroll btn btn-xl">ACERCA DE NOSOTROS</a>
            </div>
        </div>
    </header>



<section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">
                      <?= $this->Html->link(__('Portfolio'), ['controller' => 'Portfolio']) ?>
                    </h2>
                    <h3 class="section-subheading text-muted">Here, the our images.</h3>
                </div>
            </div>
            <div class="row">
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




    <!-- About Section -->
        <section id="about" class="bg-light-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">ACERCA DE NOSOTROS</h2>
                        <h3 class="section-subheading text-muted"></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="team-member">
                            <i class="fa fa-shield fa-5x" aria-hidden="true"></i>
                            <h4>MISIÓN</h4><br>
                            <p class="text-muted" style="text-align:left">
                            Formarnos como una representación que empodere al contador itamita proveyéndole las herramientas, los conocimientos y todo el apoyo necesario para que aproveche su potencial y logre así generar un impacto tanto dentro como fuera del ITAM
                            </p>

                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="team-member">
                            <i class="fa fa-eye fa-5x" aria-hidden="true"></i>
                            <h4>VISIÓN</h4><br>
                            <p class="text-muted" style="text-align:left">En un año, habremos revolucionado la imagen del contador público del ITAM y generado un impacto en la vida de los alumnos, en su desarrollo tanto personal como profesional, dejando un legado que perdure en las próximas generaciones.
    </p>

                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="team-member">
                            <i class="fa fa-check fa-5x" aria-hidden="true"></i>
                            <h4>VALORES</h4><br>

                            <ul style="text-align:left; color: #777">
                                <li>Responsabilidad</li>
                                <li>Unión</li>
                                <li>Honestidad</li>
                                <li>Compromiso</li>
                                <li>Creatividad</li>
                                <li>Respeto</li>
                                <li>Cooperación</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


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
                  <?php foreach($imgsgaleria as $imggaleria): ?>
                    <div class="col-lg-3" style="padding:0">
                        <a href="<?php echo "img/galeria/".$imggaleria->album."/".$imggaleria->url;?>" title="<?php echo $imggaleria->album;?>" data-gallery>
                            <?= $this->Html->image("galeria/".$imggaleria->album."/".$imggaleria->url, ['class'=> "img-responsive"]); ?>
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

    <!-- Team Section -->
        <section id="team" class="bg-light-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">EQUIPO</h2>
                        <h3 class="section-subheading text-muted">Our members</h3>
                    </div>
                </div>
                <div class="col-lg-12">
<<<<<<< HEAD
                    <?= $this->Html->image("galeria/Equipo/3.jpg", ['class'=> "img-responsive"]); ?>
=======
                    <?= $this->Html->image("galeria/equipo/3.jpg", ['class'=> "img-responsive"]); ?>
>>>>>>> 176738ab94c2a9e9f490ffe9a77229f92910f65e
                </div>
            </div>
        </section>



    <!-- Contact Section
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    -->
