
<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Collections/index"/> <i class="fa fa-reply"></i> Retour </a>
    </div>
    
</div>
<br>
<div class="row" >
                        <div class="col-md-12" >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Ajout Collection'); ?></h3>
                                </div>
                                <div class="panel-body">
        <?php echo $this->Form->create('Collection',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>

            <div class="col-md-6">                  
              	<?php
		echo $this->Form->input('Numero',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','value'=>$mm) );
		echo $this->Form->input('boncommande_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','type'=>'hidden') );
	?></div><div class="col-md-6"><?php
		echo $this->Form->input('Date',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','type'=>'text','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('utilisateur_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','type'=>'hidden') );
	?>
  </div>   
                                    <div style="display: none" class="clown"></div>
                                  
                                
                                <div class="panel-body">
                                    <!--Table Wrapper Start-->
                                      <div class="panel-body">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs icon-tab">
                                        <?php  //debug($familles);die; 
                                        foreach($familles as $vc=>$f){ //debug($f);
                                            ?>
                                        <li class="<?php if($vc==0){?> active <?php } ?>"><a href="#famille<?php echo $vc;?>" data-toggle="tab"> <span><?php echo $f['name'];?> </span></a></li>
                                        <?php }?>
                                    </ul>
                                    <div class="tab-content tab-border">
                                     
                                    <?php 
                                    $i=0;
                                    foreach($familles as $vc=>$f){ //debug($f);
                                        $f_id=$f['id'];
                                            ?>
                                           <div class="tab-pane fade<?php if($vc==0){?> in active <?php } ?>"   id="famille<?php echo $vc;?>">
                                    <div class="table-responsive ls-table">
                                        <?php //debug($Lignecommande[$vc]['Qte']);die;
                                       // foreach($depot as $i=>$d)
                                          {  ?>     <div class="col-md-6">                  
              	<?php
		echo $this->Form->input('qte_demander',array('label'=>'Quantiter demander','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','value'=>$Lignecommande[$vc]['Qte'],'name'=>'data[Lignecollection]['.$vc.'][Qte_d]','id'=>'Lignecollection'.$vc.'Qte_d' ,'index'=>$vc) );
                echo $this->Form->input('qte_demander',array('label'=>'Quantiter demander','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','value'=>$Lignecommande[$vc]['famille_id'],'name'=>'data[Lignecollection]['.$vc.'][famille_id]' ,'type'=>'hidden') );
		echo $this->Form->input('qte_demander',array('label'=>'Quantiter demander','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','value'=>$Lignecommande[$vc]['id'],'name'=>'data[Lignecollection]['.$vc.'][lignecommande_id]' ,'type'=>'hidden') );
	?></div><div class="col-md-6"><?php
		echo $this->Form->input('qte_aff',array('label'=>'Quantiter affecter','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','type'=>'text','required data-bv-notempty-message'=>'Champ Obligatoire','value'=>'0.000','name'=>'data[Lignecollection]['.$vc.'][Qte]','id'=>'Lignecollection'.$vc.'Qte','index'=>$vc) );
		
	?>
  </div> 
                                        <table  class="table table-bordered table-striped table-bottomless tabecollection" id="ls-editable-table">
                                            <thead>
                                            <tr >
                                                
                                                <td >Nom</td>
                                                 <td >Référence</td>
                                                  <td >Image</td>
                                                  <td >Dêpot</td>
                                                 <td > Qte disponible</td>
                                                <td >Qte a livrer </td>
                                                

                                        </tr>
                                            </thead>
                                                  
                                            <tbody>
                                                
                                            <?php //debug($art);//die; 
                                            foreach($artstock as $g=>$li ){
                                               // debug($li);die;
                                                if($li['Article']['famille_id']==$f_id  ){ ?>
                                            <tr >                                                
                                             <td ><?php echo $li['Article']['name']; ?></td>
                                                 <td ><?php echo $li['Article']['reference']; ?></td>
                                                 <td >
                                                 <?php //if($g<=10)
                                                     { ?>
                            <div class="ls-image-fluid-box">
                               
                                                 <div class="col-md-12">
                                                     <div class="ls-fluid-box-gallery">
                                            <a href="<?php echo $this->webroot;?>files/reference/<?php echo $li['Article']['image']; ?>" title="" data-fluidbox class="col-1 imgg">
                                                         <img src="<?php echo $this->webroot;?>files/reference/<?php echo $li['Article']['image']; ?>" width="30" height="30" class="imgg"/>
                                            
                                            </a>
                                                     </div></div>
                                                 </div><?php } ?>
<!--                                                     <div class="ls-image-fluid-box">
                               
                                                 <div class="col-md-12">
                                                     <div class="ls-fluid-box-gallery">
                                            <a href="/kinda/files/reference/Chrysanthemum.jpg" title="" data-fluidbox="" class="col-1 fluidbox"><div class="fluidbox-wrap" style="z-index: 990;">
                                                     <img src="/kinda/files/reference/Chrysanthemum.jpg" width="30" height="30" style="opacity: 1;"><div class="fluidbox-ghost" style="width: 30px; height: 30px; top: 0px; left: 9.5px;"></div>
                                            
                                            </div></a></div></div>-->
                                                 </div> 
                                            </td>
                                             
                                            <td ><?php echo $li['Depot']['name']; ?></td>
                                                 <td > <?php echo $li['Stockdepot']['qte_packet']; ?></td>
                                                 <td ><input type="text" name="data[LigneLignecollectionx][<?php echo $vc;?>][<?php echo $g;?>][Qte]" table="Lignelignecollection"  champ="Qte" id="LigneLignecollectionx<?php echo $vc;?>_<?php echo $g;?>Qte" index="<?php echo $g;?>" index2="<?php echo $vc; ?>" value="0.000" class="form-control collection"> 
                                                 <input type="hidden" name="data[LigneLignecollectionx][<?php echo $vc;?>][<?php echo $g;?>][article_id]" table="Lignelignecollection" champ="article_id" id="LigneLignecollectionx<?php echo $vc;?>_<?php echo $g;?>article_id" index="<?php echo $g;?>" index2="<?php echo $vc; ?>" value="<?php echo $li['Article']['id']; ?>" class="form-control">
                                                 <input type="hidden" name="data[LigneLignecollectionx][<?php echo $vc;?>][<?php echo $g;?>][Stockdepot]" table="Lignelignecollection" champ="Stockdepot" id="LigneLignecollectionx<?php echo $vc;?>_<?php echo $g;?>article_id" index="<?php echo $g;?>" index2="<?php echo $vc; ?>" value="<?php echo $li['Stockdepot']['id']; ?>" class="form-control">
                                                  <input type="hidden" name="data[LigneLignecollectionx][<?php echo $vc;?>][<?php echo $g;?>][depot_id]" table="Lignelignecollection" champ="depot_id" id="LigneLignecollectionx<?php echo $vc;?>_<?php echo $g;?>depot_id" index="<?php echo $g;?>" index2="<?php echo $vc; ?>" value="<?php echo $li['Stockdepot']['depot_id']; ?>" class="form-control">
                                                     <input type="hidden" name="data[LigneLignecollectionx][<?php echo $vc;?>][<?php echo $g;?>][qte_packet]" table="Lignelignecollection" champ="qte_packet" id="LigneLignecollectionx<?php echo $vc;?>_<?php echo $g;?>qte_packet" index="<?php echo $g;?>" index2="<?php echo $vc; ?>" value="<?php echo $li['Stockdepot']['qte_packet']; ?>" class="form-control">
                                                 </td>
                                               

                                                
                                            </tr>
  <?php $i++; } ?>
                                          <?php } ?>
                                            
                                            </tbody>
                                            <input type="hidden" name="index[<?php echo $vc; ?>]" id="index<?php echo $vc;?>"  value="<?php echo $g; ?>"/>
                                        </table>
                                         <input type="hidden" value="<?php echo $i; ?>" class="index" id="index">
                                        <?php }?>
                                    </div>
                                           </div>
                                    <?php }?>
                                    </div>
                                    <!--Table Wrapper Finish-->
                                </div>
                            </div>
                        
<div class="form-group">
                                            <div class="col-lg-9 col-lg-offset-3">
                                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                                            </div>
                                        </div>
<?php echo $this->Form->end();?>
</div>
                            </div>
                        </div>
</div>

