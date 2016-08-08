Mudar para enctype="multipart/form-data"
<?php echo $form->create('Upload', array('type' => 'file')); ?>

Mudar a Action:
<?php echo $form->create('User', array('action' => 'login')); ?>

Mudar completamente a página do action:
<?php echo $form->create(null, array('url' => '/recipes/add')); ?>
// ou
<?php echo $form->create(null, array('url' => array('controller' => 'recipes', 'action' => 'add'))); ?>
//Ex:
<form method="post" action="/recipes/add">

<?php echo $form->create(null, array(
    'url' => 'http://www.google.com/search',
    'type' => 'get'
)); ?>

