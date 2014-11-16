
<h1>Ajouter un utilisateur</h1>



<?php
$this->Html->addCrumb('Utilisateurs', array('controller' => 'users', 'action' => 'index'));
$this->Html->addCrumb('Ajouter un utilisateur', array('controller' => 'users', 'action' => 'add'));
echo $this->Form->create('User');?>


<form class="form-horizontal" role="form">
  <div class="form-group">
  <?php

  echo $this->Form->input('username', array('class' => 'form-control'));
  ?>

  </div>
  <div class="form-group">
     <?php
   echo $this->Form->input('password', array('class' => 'form-control'));
     ?>
   </div>

    <div class="form-group">
       <?php
       echo $this->Form->input('role', array(
                   'options' => array('admin' => 'Admin', 'cadre_departement' => 'Cadre départemental', 'cadre_antenne' => 'Cadre d\'antenne','chef_equipe' => 'Chef d\'équipe'), 'class' => 'form-control')) ;
       ?>
     </div>

    <?php echo $this->Form->end('Ajouter', array('class' => 'btn btn-default')); ?>

</form>



