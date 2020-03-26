<?php
	$sql = new Model\php\ModelClass;
	$db = $sql->sqlConn();
  $chk = new Model\php\chk;
  if(isset($_GET['ref']) && $_GET['ref'] == ""){
    $ak = explode("-", $_GET['p']);
    $a = $ak[0];
  }else{
    $a = $_GET['ref'];
  }
  
forcer_utilisateur_connecte();  

$colors = array(
'default'=> '#222-#ebebeb',
'sky'=>'red-green'
);


$color = explode("-", $colors[$_SESSION['adm_info']['theme']]); 
?>

<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <title>Dr karamoko</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="title" content="Echange cash">
  <meta name="keywords" content="business, earn, argent, money, trading, investissement" />
  <meta name="description" content="Site aidant les jeunes entrepreneurs à gagner de l'argent et enrichir leur connaissance du trading">
  <meta name="author" content="Webdevpro">
  <meta charset="UTF-8">        
  <link rel="stylesheet" href="<?=$chk->cp_chk("css", "templatemo_main.css")?>">
  <link rel="stylesheet" href="<?=$chk->vd_chk("DataTable", "datatables.min.css")?>">
  <link rel="stylesheet" href="<?=$chk->cp_chk("css", "root.css")?>">
</head>

<style>
      .navbar{
        background-color: <?=$color[0]?> !important;
      }

      .templatemo-sidebar{
        background-color: <?=$color[1]?> !important;
      } 

</style>
<body>



  <div class="navbar navbar-inverse">
      <div class="navbar-header">
        <div class="logo"><h1>Espace administrateur</h1></div>
        <button type="button" class="navbar-toggle">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button> 
      </div>   
    </div>
    <div class="template-page-wrapper">
      <div class="templatemo-sidebar">
        <ul class="templatemo-sidebar-menu">
          <li>
            <h6 class="center"><i class="fa fa-user"></i> <?=$_SESSION['adm_info']['adm_name']?></h6> 
          </li>
          <li class="adm"><a href="<?=$chk->rt()?>adm/"><i class="fa fa-home"></i>Dashboard</a></li>
          <li class="sub open add_category modifyanddelete_category add modifyanddelete">
            <a href="javascript:;">
              <i class="fa fa-database"></i> Articles et catégories <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li class="add_category"><a href="<?=$chk->rt()?>adm_post/add_category">Ajouter une catégorie</a></li>
              <li class="modifyanddelete_category"><a href="<?=$chk->rt()?>adm_post/modifyanddelete_category">Modifier ou supprimer une catégorie</a></li>
              <li class="add"><a href="<?=$chk->rt()?>adm_post/add">Ajouter un article</a></li>             
              <li class="modifyanddelete"><a href="<?=$chk->rt()?>adm_post/modifyanddelete">Modifier ou supprimer un article</a></li>
            
            </ul>
          </li>
          <li class="settings"><a href="<?=$chk->rt()?>adm_post/settings"><i class="fa fa-cubes"></i>Paramètres</a></li>
          <li class="notifications"><a href="<?=$chk->rt()?>adm_post/notifications"><i class="glyphicon glyphicon-bell"></i>Notifications</a></li>
          <!--<li><a href="maps.html"><i class="fa fa-map-marker"></i><span class="badge pull-right">42</span>Maps</a></li>-->
          <!--<li><a href="tables.html"><i class="fa fa-users"></i><span class="badge pull-right">NEW</span>options admin</a></li>-->
          <li><a href="<?=$chk->rt()?>logout/"><i class="fa fa-sign-out"></i>Se déconnecter</a></li>
        </ul>
      </div><!--/.navbar-collapse -->
      <!-- Modal -->
      <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">êtes-vous sure de vouloir vous déconnecter ?</h4>
            </div>
            <div class="modal-footer">
              <a href="<?=$chk->rt()?>logout/" class="btn btn-primary">Yes</a>
              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
            </div>
          </div>
        </div>
      </div>

    <?php
      
      