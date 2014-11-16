<!-- File: /app/View/Posts/index.ctp -->
<?php $this->Html->addCrumb('Interventions', array('controller' => 'posts', 'action' => 'index')); ?>

<h1>Interventions</h1>
<table class="table table-hover">
    <tr class="active">
        <th>ID</th>
        <th>Date</th>
                <th>Intervention</th>                <th>Poste/Garde</th>

                <th>Chef (CE, CEPS)</th>
                <th>Etat</th>
        <th>Action</th>
    </tr>

    <!-- Here is where we loop through our $Posts array, printing out Post info -->

    <?php foreach ($post as $post): ?>
    <tr>
        <td><?php echo $post['Post']['id']; ?></td>
               <td><?php echo $post['Post']['created']; ?></td>


         <td>
                            <?php echo $this->Html->link($post['Post']['intervention_plainte'],
                            array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?>
                        </td>

                          <td><?php echo $post['Post']['intervention_poste']; ?></td>
                          <td><?php echo $post['Post']['chef']; ?></td>
 <td><span class="label label-warning">En cours</span></td>
                                                   <td>


                                                                                      <?php echo $this->Html->link(
                                                                                          'Editer',
                                                                                          array('action' => 'edit', $post['Post']['id'])
                                                                                      ); ?>

                                                                                  </td>

    </tr>


    <?php endforeach; ?>
    <?php unset($post); ?>
</table>

 <?php
                      echo $this->Html->link(
                          'Ajouter une intervention',
                          '/posts/add',
                          array('class' => 'btn btn-default')
                      );
                      ?>