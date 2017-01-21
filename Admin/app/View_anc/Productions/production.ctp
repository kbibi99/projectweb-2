
<input type="hidden" class="page" value="production">
<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Productions/index"/> <i class="fa fa-reply"></i> Retour </a>
    </div>
    
</div>
<br>
<div class="row" >
                        <div class="col-md-12" >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Modidication Production'); ?></h3>
                                </div>
                                <div class="panel-body">
        <?php echo $this->Form->create('Production',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>

            <div class="col-md-6">                  
              	<?php
              //  debug($this->request->data );die;
                     $date2 = explode('-', $this->request->data['Production']['date']);
            $new_date1 = $date2[2] . '/' . $date2[1] . '/' . $date2[0];
            //$this->request->data['Production']['date'] = $new_date1;
            //debug($new_date1);die;
		echo $this->Form->input('id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('date',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','required data-bv-notempty-message'=>'Champ Obligatoire','type'=>'text','value'=>$new_date1) );
	?></div><div class="col-md-6"><?php
		echo $this->Form->input('numero',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
	?>
  </div> 
                                    <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Article production</h3>
                                   
                                   
                                </div>
                                <div class="panel-body">
                                    <!--Table Wrapper Start-->
                                      <div class="panel-body">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs icon-tab">
                                        <?php foreach($familles as $vc=>$f){ //debug($f);
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
                                        
                                        <table id="table" class="table" >
                                            <thead>
                                            <tr >
                                                
                                                <td >Nom</td>
                                                 <td >Référence</td>
                                                 <td ></td>
                                                 <td ></td>
                                                <td >Production</td>
                                                <td >Quantité livré</td>
                                                 <td >Quantité  non livré</td>
                                                <td >Quantité restante</td>
                                                <td ></td>

                                        </tr>
                                            </thead>
                                                  
                                            <tbody>
                                                
                                            <?php foreach($this->request->data['Ligneproduction'] as $g=>$li ){
                                                if($li['Article']['famille_id']==$f['id']){?>
                                            <tr >
                                                
                                                <td > 
                                                    <?php 
                                                    ?><?php echo $li['Article']['name'];?>
                                                    <input type="hidden" name="data[Ligneproduction][<?php echo $i ?>][id]" value="<?php echo $li['id']; ?>" id="id<?php echo $i; ?>">
                                                </td>
                                                <td > 
                                                 <?php echo $li['Article']['reference'];?>
                                                    </td>
                                                    <td ><input index="<?php echo $i;?>" id="sesiproduction<?php echo $i;?>" class="form-control sesiproduction" style="color: #c9302c;font-size: 22px;"></td>
                                                 
                                                 <td ><i index="<?php echo $i;?>"  class="fa fa-plus-circle produit" style="color: #c9302c;font-size: 22px;"></td>
                                                 <td > 
                                                    <?php //echo $this->Form->input('qte', array('label' => '', 'id' => 'qte'.$i, 'name' => 'data[Ligneproduction]['.$i.'][qte]','table'=>'Ligneproduction','champ'=>'qte','index'=>$i,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control   ','required data-bv-notempty-message'=>'Champ Obligatoire','value'=>$li['qte']) );
                                                    ?> 
                                                      <input name='data[Ligneproduction][<?php echo $i; ?>][qte]' id="qte<?php echo $i; ?>" index="<?php echo $i;?>" value="<?php echo $li['qte'];?>" class='form-control production' >
                                                </td>
                                                <td > 
                                                   
                                                     <input name='data[Ligneproduction][<?php echo $i; ?>][qte_liv]' id="qte_liv<?php echo $i;?>" index="<?php echo $i;?>" value="<?php echo $li['qte_liv'];?>" class='form-control' readonly="readonly">
                                                </td>
                                                <td > 
                                                   
                                                    <input name='data[Ligneproduction][<?php echo $i; ?>][qte_nnliv]' id="qte_nnliv<?php echo $i; ?>" index="<?php echo $i;?>" value="<?php echo ($li['qte']-$li['qte_liv']);?>" class='form-control' readonly="readonly" >
                                                </td>
                                                <td > 
                                                    
                                                     <input name='data[Ligneproduction][<?php echo $i; ?>][qte_rest]' id='qte_rest<?php echo $i; ?>' index="<?php echo $i;?>" value="<?php echo $li['qte_rest'];?>" class='form-control rest '>
                                                </td>

                                                <td >
<!--                                                    <a href="#" class="" >-->
                                                        <span class="label label-light-green liv" index="<?php echo $i;?>">Livré</span>
<!--                                                </a>-->
                                                   </td>
                                            </tr>
  <?php $i++; } ?>
                                            <?php } ?>
                                            
                                            </tbody>
                                        </table>
                                         <input type="hidden" value="<?php echo $i; ?>" class="index" id="index">
                                    </div>
                                           </div>
                                    <?php }?>
                                    </div>
                                    <!--Table Wrapper Finish-->
                                </div>
                            </div>
                        </div>
                                     <div class="panel-body">
                                    <!-- Nav tabs -->
                                   

                                    <!-- Tab panes -->
<!--                                   
<div class="form-group">
    
                                            <div class="col-lg-9 col-lg-offset-3">
                                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                                            </div>
                                        </div>-->
<?php echo $this->Form->end();?>
</div>
                            </div>
                        </div>
</div>

