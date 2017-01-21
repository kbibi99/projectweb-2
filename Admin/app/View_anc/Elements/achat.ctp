<section id="left-navigation">
    <!--Left navigation user details start-->
    <div class="user-image">
        <img src="<?php echo $this->webroot;?>assets/images/petit-logo.png" alt=""/>
    <!--    <div class="user-online-status"><span class="user-status is-online  "></span> </div>-->
    </div>
    <ul class="social-icon">
        <li><a href="<?php echo $this->webroot;?>Fournisseurs/index"><i ><img src="<?php echo $this->webroot;?>assets/images/achat.png" alt="" width="20px"/></i></a></li>
        <li><a href="<?php echo $this->webroot;?>Clients/index"><i ><img src="<?php echo $this->webroot;?>assets/images/vente.png" alt="" width="20px"/></i></a></li>
        <li><a href="<?php echo $this->webroot;?>Articles/index"><i ><img src="<?php echo $this->webroot;?>assets/images/stock.png" alt="" width="20px"/></i></a></li>
        <li><a href="<?php echo $this->webroot;?>Productions/index"><i > <img src="<?php echo $this->webroot;?>assets/images/production.png" alt="" width="20px"/></i></a></li>
        <li><a href="<?php echo $this->webroot;?>Personnels/index"><i > <img src="<?php echo $this->webroot;?>assets/images/personnel.png" alt="" width="20px"/></i></a></li>
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
        <li class="">
            <a class="" href="#">
                <i ><img src="<?php echo $this->webroot;?>assets/images/client.png" alt="" width="15px"/></i> <span>Gestion du stock</span><span class="badge badge-red">7</span>
            </a>
            <ul>
                <li><a href="<?php echo $this->webroot;?>Matierepremieres/index">Stocks</a></li>
                <li><a href="<?php echo $this->webroot;?>unites/index">Unités</a></li>
                <li><a href="<?php echo $this->webroot;?>Emplacements/index">Emplacements</a></li>
                
                <li><a href="<?php echo $this->webroot;?>Machines/index">Liste des machines</a></li>
                <li><a href="<?php echo $this->webroot;?>Families/index">Familles</a></li>
                
                <!--<li><a href="<?php echo $this->webroot;?>Types/index">Types MP</a></li>-->
                <li><a href="<?php echo $this->webroot;?>Colors/index">Couleurs</a></li>
                <li><a href="<?php echo $this->webroot;?>TypeStocks/index">Type des stocks</a></li>
            </ul>
        </li>

        
        <li class="">
            <a class="" href="#">
                <i ><img src="<?php echo $this->webroot;?>assets/images/stock.png" alt="" width="15px"/></i> <span>Fournisseurs</span><span class="badge badge-red">5</span>
            </a>
            
             <ul>
                <li><a href="<?php echo $this->webroot;?>Famillefournisseurs/index">Famille Fournisseur</a></li>
                <li><a href="<?php echo $this->webroot;?>fournisseurs/index">Fournisseurs</a></li>
                <li><a href="<?php echo $this->webroot;?>commfournisseurs/index">Bons de commande</a></li>
                <li><a href="<?php echo $this->webroot;?>livfournisseurs/index">Bons de livraison</a></li>
                <li><a href="<?php echo $this->webroot;?>facturefournisseurs/index">Factures</a></li>
                <li><a href="<?php echo $this->webroot;?>mpreglements/index">Réglement</a></li>
                <li><a href="<?php echo $this->webroot;?>mpreglements/etatfact">Etat BLs/FACT (sans ligne)</a></li>
                <li><a href="<?php echo $this->webroot;?>mpreglements/etatfactligne">Etat BLs/FACT (avec ligne)</a></li>
            </ul>
        </li>
        <li class="">
            <a class="" href="#">
                <i ><img src="<?php echo $this->webroot;?>assets/images/stock.png" alt="" width="15px"/></i> <span>Dépôts</span><span class="badge badge-red">3</span>
            </a>
            
             <ul>
                <li><a href="<?php echo $this->webroot;?>deposits/index">Dépôts</a></li>
                <li><a href="<?php echo $this->webroot;?>inventories/index/1">Inventaire Piéces de rechange</a></li>
                <li><a href="<?php echo $this->webroot;?>inventories/index/2">Inventaire Matières Premières</a></li> 
             </ul>
        </li>
        
        
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
        
        <li class="">
            <a class="" href="#">
                <i ><img src="<?php echo $this->webroot;?>assets/images/stock.png" alt="" width="15px"/></i> <span>Statistique</span><span class="badge badge-red">4</span>
            </a>
            
             <ul> 
                <li><a href="<?php echo $this->webroot;?>inventories/etatpr">Etat de stock PR</a></li>
                <li><a href="<?php echo $this->webroot;?>inventories/etatmp">Etat de stock MP</a></li>
                <li><a href="<?php echo $this->webroot;?>inventories/bordpr">Tableau de bord PR</a></li>
                <li><a href="<?php echo $this->webroot;?>inventories/bordmp">Tableau de bord MP</a></li>
             </ul>
        </li>
        
        <li class="">
            <a class="" href="#">
                <i ><img src="<?php echo $this->webroot;?>assets/images/stock.png" alt="" width="15px"/></i> <span>Chèques et Traites</span><span class="badge badge-red">3</span>
            </a>
            
             <ul> 
                <li><a href="<?php echo $this->webroot;?>Mppiecereglements/etatchequetraite">Etat Chèques/Traites</a></li>
                <li><a href="<?php echo $this->webroot;?>Mpreglements/cheque">Chèques</a></li>
                <li><a href="<?php echo $this->webroot;?>Mpreglements/traite">Traites</a></li> 
             </ul>
        </li>
       
        
    </ul>
    <!--Left navigation end-->
</section>