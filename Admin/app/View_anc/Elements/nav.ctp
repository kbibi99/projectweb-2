<script>
$(document).ready(function() 
{
   fonction=$('#fonction').val();
        if(fonction==1){
        livraison();
        }
        if(fonction==2){
        envoie();
        }
  $('#notifprod').on('click',function(){
      //alert(fonction);
    $.ajax({
            type: "POST",
            url: wr+"Fonctions/notiff/",
            dataType : "html"
        }).done(function(data){
            $('#notifprod').hide();
            $('#spannotif').html(0);
            window.location.href=wr+'ligneproductions/index';
          });	  
  });
  $('#notifenvoie').on('click',function(){
      //alert(fonction);
    $.ajax({
            type: "POST",
            url: wr+"Fonctions/envoiee/",
            dataType : "html"
        }).done(function(data){
            $('#notifenvoie').hide();
            $('#spanenvoie').html(0);
            window.location.href=wr+'Entreecaisses/validatee';
          });	  
  }) 
});
function livraison(){
var prevCuisNotif=null;	
if(prevCuisNotif) {
            clearInterval(prevCuisNotif);
        }
prevCuisNotif = setInterval(function () {
$.ajax({
            type: "POST",
            url: wr+"Fonctions/notif/",
            dataType : "html"
        }).done(function(data){
            if(data==1){
            $('#notifprod').show();
            ion.sound.play("bell_ring"); 
            $('#spannotif').html(data);
            }else{
             $('#notifprod').hide(); 
             $('#spannotif').html('0');
            }
		});	
},1000);

    }
    function envoie(){
var prevCuisNotif=null;	
if(prevCuisNotif) {
            clearInterval(prevCuisNotif);
        }
prevCuisNotif = setInterval(function () {
$.ajax({
            type: "POST",
            url: wr+"Fonctions/envoie/",
            dataType : "html"
        }).done(function(data){
            if(data==1){
            $('#notifenvoie').show();
            ion.sound.play("bell_ring"); 
            $('#spanenvoie').html(data);
            }else{
             $('#notifenvoie').hide(); 
             $('#spanenvoie').html('0');
            }
		});	
},1000);

    }
</script>    
<div class="container-fluid">
<!--Logo text start-->
<div class="header-logo">
    <a href="index.html" title="">
        <h1 style="font-size: 15px !important">CHAUSSETTES KINDA</h1>
    </a>
</div>
<!--Logo text End-->
<div class="top-navigation">
<!--Collapse navigation menu icon start -->
<div class="menu-control hidden-xs">
    <a href="javascript:void(0)">
        <i class="fa fa-bars"></i>
    </a>
</div>
<!--<div class="search-box">
    <ul>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)">
                <span class="fa fa-search"></span>
            </a>
            <div class="dropdown-menu  top-dropDown-1">
                <h4>Search</h4>
                <form>
                    <input type="search" placeholder="what you want to see ?">
                </form>
            </div>

        </li>
    </ul>
</div>-->

<!--Collapse navigation menu icon end -->
<!--Top Navigation Start-->

<ul>
    <li class="dropdown">
        <!--All task drop down start-->
        <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)">
            <span class="fa fa-tasks"></span>
            <span class="badge badge-lightBlue">5</span>
        </a>
        
        
        <?php 
$vente=  CakeSession::read('vente');
$achat=  CakeSession::read('achat');
$personnel=  CakeSession::read('personnel');
$stock=  CakeSession::read('stock');
$production=  CakeSession::read('production');
$fonction=  CakeSession::read('fonction');
//debug($notif);die;
?>
        <input type="hidden" value="<?php echo $fonction;?>" id="fonction"/>    
        <div class="dropdown-menu right top-dropDown-1">
            <h4>TOUT LES MENU</h4>
            <ul class="goal-item">
                <?php  if($achat=='ac'){?>
                <li>
                    <a href="<?php echo $this->webroot;?>Fournisseurs/index">
                        <div class="goal-user-image">
                            <img class="rounded" src="<?php echo $this->webroot;?>assets/images/achat.png" alt="user image" />
                        </div>
                        <div class="goal-content">
                            Achat
<!--                            <div class="progress progress-striped active">
                                <div class="progress-bar ls-light-blue-progress six-sec-ease-in-out" aria-valuetransitiongoal="0"></div>
                            </div>-->
                        </div>
                    </a>
                </li>
                <?php } ?>  
    <?php  if($vente=='ven'){?>
                <li>
                    <a href="<?php echo $this->webroot;?>Clients/index">
                        <div class="goal-user-image">
                            <img class="rounded" src="<?php echo $this->webroot;?>assets/images/vente.png" alt="user image" />
                        </div>
                        <div class="goal-content">
                            Vente
<!--                            <div class="progress progress-striped active">
                                <div class="progress-bar ls-red-progress six-sec-ease-in-out" aria-valuetransitiongoal="0"></div>
                            </div>-->
                        </div>
                    </a>
                </li>
                <?php } ?>
    <?php  if($stock=='st'){?>
                <li>
                    <a href="<?php echo $this->webroot;?>Articles/index">
                        <div class="goal-user-image">
                            <img class="rounded" src="<?php echo $this->webroot;?>assets/images/stock.png" alt="user image" />
                        </div>
                        <div class="goal-content">
                            Stock
<!--                            <div class="progress progress-striped active">
                                <div class="progress-bar ls-light-green-progress six-sec-ease-in-out" aria-valuetransitiongoal="0"></div>
                            </div>-->
                        </div>
                    </a>
                </li>
                <?php } ?>
    <?php  if($production=='prd'){?>
                                <li>
                    <a href="<?php echo $this->webroot;?>Productions/index">
                        <div class="goal-user-image">
                            <img class="rounded" src="<?php echo $this->webroot;?>assets/images/production.png" alt="user image" />
                        </div>
                        <div class="goal-content">
                            Production
<!--                            <div class="progress progress-striped active">
                                <div class="progress-bar ls-light-green-progress six-sec-ease-in-out" aria-valuetransitiongoal="0"></div>
                            </div>-->
                        </div>
                    </a>
                </li>
                
                <?php } ?>
    <?php  if($personnel=='per'){?>
                <li>
                    <a href="<?php echo $this->webroot;?>Personnels/index">
                        <div class="goal-user-image">
                            <img class="rounded" src="<?php echo $this->webroot;?>assets/images/personnel.png" alt="user image" />
                        </div>
                        <div class="goal-content">
                            Personnel
<!--                            <div class="progress progress-striped active">
                                <div class="progress-bar ls-light-green-progress six-sec-ease-in-out" aria-valuetransitiongoal="0"></div>
                            </div>-->
                        </div>
                    </a>
                </li>
                <?php } ?>
                <li class="only-link">
                    <a href="javascript:void(0)">Voir tout</a>
                </li>
            </ul>
        </div>
        <!--All task drop down end-->
    </li>
    <li class="dropdown">
<!--        Notification drop down start-->
        <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)">
            <span class="fa fa-bell-o"></span>
            <?php if($fonction==1){?>
            <span class="badge badge-red" id="spannotif"></span>
            <?php }?>
            <?php if($fonction==2){?>
            <span class="badge badge-red" id="spanenvoie"></span>
            <?php }?>
            <?php if(($fonction!=1)&&($fonction!=2)){?>
            <span class="badge badge-red" id="">0</span>
            <?php }?>
        </a>

        <div class="dropdown-menu right top-notification">
            <h4>Notification</h4>
            <ul class="ls-feed">
                <?php if($fonction==1){?>
                <li id="notifprod" style="display: none">
                    <a>
                    <span class="label label-red">
                    <i class="fa fa-check white"></i>
                    </span>
                        Production
                    </a>
                </li>
                <?php } ?>
                <?php if($fonction==2){?>
                <li id="notifenvoie" style="display: none">
                    <a>
                    <span class="label label-red">
                    <i class="fa fa-check white"></i>
                    </span>
                        Livraison Caisse
                    </a>
                </li>
                <?php } ?>
                <li class="only-link">
                    <a href="javascript:void(0)">View All</a>
                </li>
            </ul>
        </div>
        <!--Notification drop down end-->
    </li>
<!--    <li class="dropdown">
        Email drop down start
        <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)">
            <span class="fa fa-envelope-o"></span>
            <span class="badge badge-red">3</span>
        </a>

        <div class="dropdown-menu right email-notification">
            <h4>Email</h4>
            <ul class="email-top">
                <li>
                    <a href="javascript:void(0)">
                        <div class="email-top-image">
                            <img class="rounded" src="<?php echo $this->webroot;?>assets/images/demo/avatar-80.png" alt="user image" />
                        </div>
                        <div class="email-top-content">
                            John Doe <div>Sample Mail 1</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <div class="email-top-image">
                            <img class="rounded" src="<?php echo $this->webroot;?>assets/images/demo/avatar-80.png" alt="user image" />
                        </div>
                        <div class="email-top-content">
                            John Doe <div>Sample Mail 2</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <div class="email-top-image">
                            <img class="rounded" src="<?php echo $this->webroot;?>assets/images/demo/avatar-80.png" alt="user image" />
                        </div>
                        <div class="email-top-content">
                            John Doe <div> Sample Mail 4</div>
                        </div>
                    </a>
                </li>
                <li class="only-link">
                    <a href="mail.html">View All</a>
                </li>
            </ul>
        </div>
        Email drop down end
    </li>
    <li class="hidden-xs">
        <a class="right-sidebar" href="javascript:void(0)">
            <i class="fa fa-comment-o"></i>
        </a>
    </li>
    <li class="hidden-xs">
        <a class="right-sidebar-setting" href="javascript:void(0)">
            <i class="fa fa-cogs"></i>
        </a>
    </li>
    <li>
        <a href="lock-screen.html">
            <i class="fa fa-lock"></i>
        </a>
    </li>-->
    <li>
        <a href="<?php echo $this->webroot;?>Utilisateurs/login">
            <i class="fa fa-power-off"></i>
        </a>
    </li>

</ul>
<!--Top Navigation End-->
</div>
</div>