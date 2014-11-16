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
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'PPE SACO');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
			<?php echo $this->fetch('title')." - "; ?>

		<?php echo $cakeDescription ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('sb-admin-2');
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('bootstrap.min');

		echo $this->Html->css('font-awesome/css/font-awesome.min');

		echo $this->Html->script('jquery-1.11.0');
		echo $this->Html->script('plugins/metisMenu/metisMenu');
		echo $this->Html->script('plugins/metisMenu/metisMenu.min');
		echo $this->Html->script('plugins/dataTables/jquery.dataTables');
		echo $this->Html->script('plugins/dataTables/dataTables.bootstrap');



		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php
                                      echo $this->Html->link(
                                          'SACO - Interface d\'administration',
                                          '/',
                                          array('class' => 'navbar-brand')
                                      );
                                      ?>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Profil Utilisateur</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Paramètres Utilisateur</a>
                        </li>
                        <li class="divider"></li>
                        <li>

                        <?php
                                                              echo $this->Html->link(
                                                                  '<i class="fa fa-sign-out fa-fw"></i> Se déconnecter',
                                                                  '/users/logout',                                                     array('class' => 'button','escape' => false)
);
                                                              ?>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse" id="leftCol">
                    <ul class="nav nav-stacked" id="sidebar">


                        <li>
                      <?php
                      echo $this->Html->link(
                          '<i class="fa fa-files-o fa-fw"></i> Interventions',
                          '/posts',
                                                    array('class' => 'button','escape' => false)

                      );
                      ?>                        </li>
<li>
                      <?php

                      echo $this->Html->link(
                          '<i class="fa fa-users"></i> Utilisateurs',
                          '/users',
                          array('class' => 'button','escape' => false)
                      );
                      ?>                        </li>



                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">

        <div class="row">



<p><?php echo $this->Html->getCrumbs(' > ', 'Accueil'); ?></p>
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>

</div>








        </div>
        <!-- /#page-wrapper -->

    </div>


<script>

$('#sidebar').affix({
      offset: {
        top: 245
      }
});

var $body   = $(document.body);
var navHeight = $('.navbar').outerHeight(true) + 10;

$body.scrollspy({
    target: '#leftCol',
    offset: navHeight
});


    $(document).ready(function() {
    $('#dataTables-example').dataTable( {
        "language": {
            "url": "<?php echo constant('APP'); ?>webroot\resources\fr_FR.txt"
         }
    } );
} );

    $(document).ready(function() {
    $('#dataTables-example1').dataTable( {
        "language": {
            "url": "<?php echo constant('APP'); ?>webroot\resources\fr_FR.txt"
        }
    } );
} );

    </script>

<?php 		echo $this->Html->script('jquery-1.11.0.js'); ?>
<?php 		echo $this->Html->script('bootstrap.min.js'); ?>
<?php 		echo $this->Html->script('plugins/metisMenu/metisMenu.min.js'); ?>
<?php 		echo $this->Html->script('plugins/dataTables/jquery.dataTables.js'); ?>
<?php 		echo $this->Html->script('plugins/dataTables/dataTables.bootstrap.js'); ?>
<?php 		echo $this->Html->script('sb-admin-2.js'); ?>
<?php 		echo $this->Html->script('sb-admin-2.js'); ?>

    <script>

$('#sidebar').affix({
      offset: {
        top: 245
      }
});

var $body   = $(document.body);
var navHeight = $('.navbar').outerHeight(true) + 10;

$body.scrollspy({
    target: '#leftCol',
    offset: navHeight
});


    $(document).ready(function() {
    $('#dataTables-example').dataTable( {
        "language": {
            "url": "resources/fr_FR.txt"
        }
    } );
} );

    $(document).ready(function() {
    $('#dataTables-example1').dataTable( {
        "language": {
            "url": "resources/fr_FR.txt"
        }
    } );
} );

    </script>


</body>
</html>
