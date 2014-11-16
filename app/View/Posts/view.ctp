<?php $this->Html->addCrumb('Interventions', array('controller' => 'posts', 'action' => 'index')); ?>
<?php $this->Html->addCrumb('Détails d\'une intervention')?>

<h1>
  Intervention
</h1>
<p>
  <small>
    Fiche d'intervention n°
    <?php echo h($post['Post']['id']); ?>
    créée le : 
    <?php echo $post['Post']['created']; ?>
  </small> -
<?php echo $this->Html->link(
                                                                                          'Editer',
                                                                                          array('action' => 'edit', $post['Post']['id'])
                                                                                      ); ?>
</p>


<div class="row">
  <div class="col-md-7">
    <div class="panel panel-default">
      <div class="panel-heading">
        <i class="fa fa-arrow-circle-right"></i> Bilan
      </div>
      <div class="panel-body">
        
        
        <p>
                 <?php if(h($post['Post']['intervention_plainte'])) echo "<b>Plainte principale</b> : ".nl2br(h($post['Post']['intervention_plainte'])); ?>

        </p>

        
        <p>
                 <?php if (h($post['Post']['intervention_circonstance'])) echo "<b>Circonstance</b> : ".nl2br(h($post['Post']['intervention_circonstance'])); ?>

        </p>

           <p>
                                <?php if (h($post['Post']['intervention_bilan'])) echo "<b>Bilan</b> : ".nl2br(h($post['Post']['intervention_bilan'])); ?>

           </p>
         </div>

       </div>

        <div class="panel panel-default">
             <div class="panel-heading">
               <i class="fa fa-arrow-circle-right"></i> Evolution et suite donnée
             </div>
             <div class="panel-body">


               <p>
                 <?php echo nl2br(h($post['Post']['intervention_evolution'])); ?>
               </p>
             </div>

           </div>
    
  </div>
  <div class="col-md-5">
    <div class="panel panel-default">
      <div class="panel-heading">
        Identification de la victime
      </div>
      <div class="panel-body">
        
        
        <p>
         <?php echo h($post['Post']['victime_prenom']); ?> <?php echo h($post['Post']['victime_nom']); ?>
        </p>
        <p>
          <?php if(h($post['Post']['victime_sexe'])) echo h($post['Post']['victime_sexe']); ?><?php if (h($post['Post']['victime_date_naissance'])) echo ", ".date_create(h($post['Post']['victime_date_naissance']))->diff(date_create('today'))->y." ans";?>
<?php if(h($post['Post']['victime_date_naissance'])) echo " - Né(e) le ".h($post['Post']['victime_date_naissance']); ?><?php if(h($post['Post']['victime_lieu_naissance'])) echo " à ".h($post['Post']['victime_lieu_naissance']); ?>
        </p>
        <p>


<?php
echo h($post['Post']['victime_adresse']); ?>        </p>
        <p>
          <?php if(h($post['Post']['victime_personne_a_prevenir'])) echo "Personne à prévenir : ".h($post['Post']['victime_personne_a_prevenir']); ?>
        </p>
      </div>
      
    </div>
    
    <div class="panel panel-default">
          <div class="panel-heading">
            Intervention
          </div>
          <div class="panel-body">

                <p>
                  Date et heure : <?php echo h($post['Post']['intervention_date_heure']); ?>
                </p>


            <p>Poste :
<?php echo h($post['Post']['intervention_poste']); ?>                        </p><p>
                                         Adresse de l'intervention : <?php echo h($post['Post']['intervention_adresse']); ?>
                                         </br><i><a href="https://www.google.fr/maps/search/<?php echo h($post['Post']['intervention_adresse']); ?>" target="_blank">Voir sur Google Maps</a></i>



                        </p>
            <hr>
            <p>
              Chef d'équipe :  <?php echo h($post['Post']['chef']); ?>

            </p>
          </div>
        </div>
  </div>