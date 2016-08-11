<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'DeltaT';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php if(isset($title)){ ?>
            <?= $title ?>
        <?php }else{ ?>
            <?= $cakeDescription ?>: <?= $this->fetch('title') ?>
        <?php } ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('agency.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top"  style="background: #000;">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="pages" >Delta T</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="pages#portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="pages#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="pages#team">Team</a>
                    </li>
                    <!--
                    <li>
                        <a class="page-scroll" href="pages#contact">Contact</a>
                    </li>
                    -->
                    <!--
                    <li>
                        <a href="pages#subscribeModal" class="" data-toggle="modal">Subscribe &nbsp;&nbsp;</a>
                    </li>
                  -->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

<!-- subscribe Modal -->
    <div class="portfolio-modal modal fade" id="subscribeModal" tabindex="-1" role="dialog" aria-hidden="true">
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
                            <h2>Like the idea? Subscribe!</h2>
                            <?= $this->Form->create(); ?>
                            <fieldeset>
                                <legend>Fill the fields:</legend>
                                <?php
                                    echo $this->Form->input('id', ['type'=>'hidden']);
                                    echo $this->Form->input('name', array('label' => array(
                                            'class' => 'title',
                                            'text' => 'Your name'
                                        )));
                                    echo $this->Form->input('email', array('label' => array(
                                            'class' => 'title',
                                            'text' => 'Your email'
                                        )));
                                    echo $this->Form->input('email', array('label' => array(
                                            'class' => 'title',
                                            'text' => 'College'
                                        )));
                                ?>
                            </fieldeset>
                            <br>
                            <?= $this->Form->button(__('Subscribe'), array('class' => 'btn button')); ?>
                            <?= $this->Form->end(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--The view -->
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>
    <!--/ end-->

    <footer style="background: #ccc">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Delta T</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a style="color: #000" href="#">contact@deltatconta.com</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('agency.css') ?>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <?= $this->Html->script('bootstrap.min.js') ?>

    <?= $this->Html->script('classie.js') ?>
    <?= $this->Html->script('cbpAnimatedHeader.js') ?>
    <?= $this->Html->script('jqBootstrapValidation.js') ?>
    <?= $this->Html->script('contact_me.js') ?>
    <?= $this->Html->script('agency.js') ?>


    <?= $this->fetch('script') ?>

</body>

</html>
