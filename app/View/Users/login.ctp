<h1>Se connecter</h1>

<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>

<form class="form-horizontal" role="form">
  <div class="form-group">
        <?php
        echo $this->Form->input('username', array('class' => 'form-control'));
        echo $this->Form->input('password', array('class' => 'form-control'));
        echo $this->Form->end('Login', array('class' => 'btn btn-default'));
     ?>
</div>

</form>




<p class="well">Login : admin, mdp : saco</p>

