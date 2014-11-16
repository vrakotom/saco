<?php $this->Html->addCrumb('Utilisateurs', array('controller' => 'users', 'action' => 'index')); ?>

<h1>Utilisateurs</h1>

<table class="table">
    <tr class="active">
        <th>ID</th>
        <th>Nom d'utilisateur</th>
        <th>Rôle</th>
        <th>Modifié le</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user['User']['id']; ?></td>
                <td><?php echo $user['User']['username']; ?></td>
                <td><?php echo $user['User']['role']; ?></td>
                <td><?php echo $user['User']['modified']; ?></td>




    </tr>


    <?php endforeach; ?>
    <?php unset($user); ?>
</table>

 <?php
                      echo $this->Html->link(
                          'Ajouter un utilisateur',
                          '/users/add',
                          array('class' => 'btn btn-default')
                      );
                      ?>