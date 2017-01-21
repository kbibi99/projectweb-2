<section id="left-navigation">
    <!--Left navigation user details start-->
    <div class="user-image">
        <img src="<?php echo $this->webroot;?>assets/images/petit-logo.png" alt=""/>
    <!--    <div class="user-online-status"><span class="user-status is-online  "></span> </div>-->
    </div>
    <?php 
$vente=  CakeSession::read('vente');
$achat=  CakeSession::read('achat');
$personnel=  CakeSession::read('personnel');
$stock=  CakeSession::read('stock');
$production=  CakeSession::read('production');
?>
<ul class="social-icon">
    <?php  if($achat=='ac'){?>
    <li><a href="<?php echo $this->webroot;?>Matierepremieres/index"><i ><img src="<?php echo $this->webroot;?>assets/images/achat.png" alt="" width="20px"/></i></a></li>
    <?php } ?>  
    <?php  if($vente=='ven'){?>
    <li><a href="<?php echo $this->webroot;?>Clients/index"><i ><img src="<?php echo $this->webroot;?>assets/images/vente.png" alt="" width="20px"/></i></a></li>
    <?php } ?>
    <?php  if($stock=='st'){?>
    <li><a href="<?php echo $this->webroot;?>Articles/index"><i ><img src="<?php echo $this->webroot;?>assets/images/stock.png" alt="" width="20px"/></i></a></li>
    <?php } ?>
    <?php  if($production=='prd'){?>
    <li><a href="<?php echo $this->webroot;?>Productions/index"><i > <img src="<?php echo $this->webroot;?>assets/images/production.png" alt="" width="20px"/></i></a></li>
    <?php } ?>
    <?php  if($personnel=='per'){?>
    <li><a href="<?php echo $this->webroot;?>Personnels/index"><i > <img src="<?php echo $this->webroot;?>assets/images/personnel.png" alt="" width="20px"/></i></a></li>
    <?php } ?>
</ul>
    <!--Left navigation user details end-->

    <!--Phone Navigation Menu icon start-->
    <div class="phone-nav-box visible-xs">
        <a class="phone-logo" href="index.html" title="">
            <h1>Fickle</h1>
        </a>
        <a class="phone-nav-control" href="javascript:void(0)">
            <span class="fa fa-bars"></span>
        </a>
        <div class="clearfix"></div>
    </div>
    <!--Phone Navigation Menu icon start-->

    <!--Left navigation start-->
    
     
    <ul class="mainNav">
        
        <?php
$gestionstock_index=  CakeSession::read('gestionstock_index'); 
if($gestionstock_index==1){
?>
        <li class="">
            <a class="" href="#">
                <i ><img src="<?php echo $this->webroot;?>assets/images/client.png" alt="" width="15px"/></i> <span>Gestion du stock</span><span class="badge badge-red">8</span>
            </a>
            <ul>
                <li><a href="<?php echo $this->webroot;?>Matierepremieres/index">Stocks</a></li>
                <li><a href="<?php echo $this->webroot;?>unites/index">Unités</a></li>
                <li><a href="<?php echo $this->webroot;?>Emplacements/index">Emplacements</a></li>
                <!--<li><a href="<?php echo $this->webroot;?>TypeStocks/index">Type des stocks</a></li>-->
                <li><a href="<?php echo $this->webroot;?>Machines/index">Liste des machines</a></li>
                <li><a href="<?php echo $this->webroot;?>Families/index">Familles</a></li>
                <!--<li><a href="<?php echo $this->webroot;?>Types/index">Types MP</a></li>-->
                <li><a href="<?php echo $this->webroot;?>Colors/index">Couleurs</a></li>
            </ul>
        </li>
<?php }?>
        <?php
$fournisseur_index=  CakeSession::read('fournisseur_index'); 
if($fournisseur_index==1){
?>
        <li class="">
            <a class="" href="#">
                <i ><img src="<?php echo $this->webroot;?>assets/images/stock.png" alt="" width="15px"/></i> <span>Fournisseurs</span><span class="badge badge-red">4</span>
            </a>
            
             <ul>
                <li><a href="<?php echo $this->webroot;?>fournisseurs/index">Fournisseurs</a></li>
                <li><a href="<?php echo $this->webroot;?>commfournisseurs/index">Bons de commande</a></li>
                <li><a href="<?php echo $this->webroot;?>livfournisseurs/index">Bons de livraison</a></li>
                <li><a href="<?php echo $this->webroot;?>facturefournisseurs/index">Factures</a></li>
            </ul>
        </li>
        <?php }?>
        <?php
$depot_index=  CakeSession::read('depot_index'); 
if($depot_index==1){
?>
        <li class="">
            <a class="" href="#">
                <i ><img src="<?php echo $this->webroot;?>assets/images/stock.png" alt="" width="15px"/></i> <span>Dépôts</span><span class="badge badge-red">2</span>
            </a>
            
             <ul>
                <li><a href="<?php echo $this->webroot;?>deposits/index">Dépôts</a></li>
                <li><a href="<?php echo $this->webroot;?>inventories/index/1">Inventaire Piéces de rechange</a></li>
                <li><a href="<?php echo $this->webroot;?>inventories/index/2">Inventaire Matières Premières</a></li>
                <li><a href="<?php echo $this->webroot;?>inventories/etatpr">Etat de stock PR</a></li>
                <li><a href="<?php echo $this->webroot;?>inventories/etatmp">Etat de stock MP</a></li>
                <li><a href="<?php echo $this->webroot;?>inventories/bordpr">Tableau de bord PR</a></li>
                <li><a href="<?php echo $this->webroot;?>inventories/bordmp">Tableau de bord MP</a></li>
            </ul>
        </li>
        <?php }?> 
        
        <li class="">
            <a class="" href="#">
                <i ><img src="<?php echo $this->webroot;?>assets/images/stock.png" alt="" width="15px"/></i> <span>Entrées</span><span class="badge badge-red">2</span>
            </a>
            
             <ul>
                <li><a href="<?php echo $this->webroot;?>entreeprs/index">Entré PR</a></li>
                <li><a href="<?php echo $this->webroot;?>entreemps/index">Entré MP</a></li>
            </ul>
        </li>
        
        <li class="">
            <a class="" href="#">
                <i ><img src="<?php echo $this->webroot;?>assets/images/stock.png" alt="" width="15px"/></i> <span>Sorties</span><span class="badge badge-red">2</span>
            </a>
            
             <ul>
                <li><a href="<?php echo $this->webroot;?>sortieprs/index">Sorti PR</a></li>
                <li><a href="<?php echo $this->webroot;?>sortiemps/index">Sorti MP</a></li>
            </ul>
        </li>
        
        
        
        
        
        
<!--        <li class="">
            <a class="" href="#">
                <i ><img src="<?php echo $this->webroot;?>assets/images/stock.png" alt="" width="15px"/></i> <span>Entrées</span><span class="badge badge-red">1</span>
            </a>
            
             <ul>
                <li><a href="<?php echo $this->webroot;?>lots/index">Lots</a></li>
            </ul>
        </li>-->
        
<!--        <li class="">
            <a class="" href="#">
                <i ><img src="<?php echo $this->webroot;?>assets/images/stock.png" alt="" width="15px"/></i> <span>Sorties</span><span class="badge badge-red">2</span>
            </a>
            
             <ul>
                <li><a href="<?php echo $this->webroot;?>demandes/index">Demandes</a></li>
                <li><a href="<?php echo $this->webroot;?>bonsorties/index">Bon sorties</a></li>
            </ul>
        </li>-->
       
        
    </ul>
    <!--Left navigation end-->
</section>