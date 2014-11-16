<?php $this->Html->addCrumb('Interventions', array('controller' => 'posts', 'action' => 'index')); ?>
<?php $this->Html->addCrumb('Ajouter une intervention')?>


<h1>
Ajouter une intervention </h1>
<?php
echo $this->
 Form-> create('Post'); ?>
<form role="form">
	<div class="row">
		<div class="col-md-7">
			<div class="panel panel-default">
				<div class="panel-heading">
					<i class="fa fa-arrow-circle-right">
					</i>
					Bilan
				</div>
				<div class="panel-body">
					<p>
						<?php       echo $this->
						 Form-> input('intervention_plainte', array('label' => 'Plainte principale','class' => 'form-control')); ?>
					</p>
					<p>
						<?php       echo $this->
						 Form-> input('intervention_circonstance', array('label' => 'Circonstance','class' => 'form-control', 'rows' => '5')); ?>
					</p>
					<p>
						<?php       echo $this->
						 Form-> input('intervention_bilan', array('label' => 'Bilan','class' => 'form-control', 'rows' => '9')); ?>
					</p>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<i class="fa fa-arrow-circle-right">
					</i>
					Evolution et suite donnée
				</div>
				<div class="panel-body">
					<p>
						<?php       echo $this->
						 Form-> input('intervention_evolution', array('label' => 'Evolution et suite donnée','class' => 'form-control', 'rows' => '5')); ?>
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-5">
			<div class="panel panel-default">
				<div class="panel-heading">
					 Identification de la victime
				</div>
				<div class="panel-body ">
					<p>
						<?php echo $this->
						 Form-> input('victime_nom', array( 'label' => 'Nom','class' => 'form-control')); ?> <?php echo $this->
						 Form-> input('victime_prenom', array( 'label' => 'Prenom','class' => 'form-control')); ?>
						 						<?php echo $this->Form->input('victime_date_naissance', array( 'label' => 'Date de naissance (format AAAA-MM-JJ)','type' => 'text','dateFormat' => 'DMY','class' => 'form-control')); ?>
						 						<?php echo $this->Form->input('victime_lieu_naissance', array( 'label' => 'Lieu de naissance','type' => 'text','class' => 'form-control'));

						 						?>

					</p>
					<p>
						<?php  echo $this->
						 Form-> input('victime_sexe', array('label' => 'Sexe', 'class' => 'form-control', 'options' => array("Homme" => "Homme", "Femme" => "Femme"), 'empty' => 'Non spécifié' )); ?>
					</p>
					<p>
						<?php echo $this->
						 Form-> input('victime_adresse', array( 'label' => 'Adresse','class' => 'form-control')); ?>
					</p>
					<p>
						<?php echo $this->
						 Form-> input('victime_personne_a_prevenir', array( 'label' => 'Personne à prévenir','class' => 'form-control')); ?>
					</p>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					 Intervention
				</div>
				<div class="panel-body">
					<p class="form-inline">
						<?php echo $this->Form->dateTime('intervention_date_heure', 'DMY', '24', array( 'label' => 'Date/Heure', 'empty' => false,'class' => 'form-control ')); ?>
					</p>


					<p>
<?php echo $this->Form-> input('intervention_poste', array( 'label' => 'Poste','class' => 'form-control')); ?>
										</p>
					<p>
                                    <?php echo $this->Form-> input('intervention_etat', array( 'label' => 'Etat de l\'intervention (en cours, fini...)','options' => array("en cours" => "En cours", "fini" => "Fini"),'class' => 'form-control')); ?>
                					</p>

					<hr>
					<p>
						<?php echo $this->
						 Form-> input('chef', array('label' => 'Chef d\'équipe','class' => 'form-control')); ?>
					</p>
				</div>
			</div>
		</div>



		<?php echo $this->
		 Form-> input('id', array('type' => 'hidden'));
		 echo $this-> Form-> end('Sauvegarder l\'intervention', array('class' => 'btn btn-default')); ?>
		</div></form>
