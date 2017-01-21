<section id="left-navigation">
    <!--Left navigation user details start-->
    <div class="user-image">
        <img src="<?php echo $this->webroot;?>assets/images/petit-logo.png" alt=""/>
    <!--    <div class="user-online-status"><span class="user-status is-online  "></span> </div>-->
    </div>
    <ul class="social-icon">
    <li><a href="<?php echo $this->webroot;?>Matierepremieres/index"><i ><img src="<?php echo $this->webroot;?>assets/images/achat.png" alt="" width="20px"/></i></a></li>
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
                <i ><img src="<?php echo $this->webroot;?>assets/images/client.png" alt="" width="15px"/></i> <span>Gestion du stock</span><span class="badge badge-red">8</span>
            </a>
            <ul>
                <li><a href="<?php echo $this->webroot;?>Matierepremieres/index">Stocks</a></li>
                <li><a href="<?php echo $this->webroot;?>unites/index">Unités</a></li>
                <li><a href="<?php echo $this->webroot;?>Emplacements/index">Emplacements</a></li>
                <li><a href="<?php echo $this->webroot;?>TypeStocks/index">Type des stocks</a></li>
                <li><a href="<?php echo $this->webroot;?>Machines/index">Liste des machines</a></li>
                <li><a href="<?php echo $this->webroot;?>Families/index">Familles</a></li>
                <li><a href="<?php echo $this->webroot;?>Types/index">Types MP</a></li>
                <li><a href="<?php echo $this->webroot;?>Colors/index">Couleurs</a></li>
            </ul>
        </li>

        
        <li class="">
            <a class="" href="#">
                <i ><img src="<?php echo $this->webroot;?>assets/images/stock.png" alt="" width="15px"/></i> <span>Fournisseurs</span><span class="badge badge-red">4</span>
            </a>
            
             <ul>
                <li><a href="<?php echo $this->webroot;?>fournisseurs/index">Fournisseurs</a></li>
                <li><a href="<?php echo $this->webroot;?>bcs/index">Bons de commande</a></li>
                <li><a href="<?php echo $this->webroot;?>bls/index">Bons de livraison</a></li>
                <li><a href="<?php echo $this->webroot;?>bills/index">Factures</a></li>
            </ul>
        </li>
        <li class="">
            <a class="" href="#">
                <i ><img src="<?php echo $this->webroot;?>assets/images/stock.png" alt="" width="15px"/></i> <span>Dépôts</span><span class="badge badge-red">2</span>
            </a>
            
             <ul>
                <li><a href="<?php echo $this->webroot;?>deposits/index">Dépôts</a></li>
                <li><a href="<?php echo $this->webroot;?>inventories/index">Inventaires Piéce de rechange</a></li>
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