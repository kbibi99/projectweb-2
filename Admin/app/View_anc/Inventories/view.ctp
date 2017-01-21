<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Inventories/index/<?php echo $typ;?>"/> <i class="fa fa-reply"></i> Retour </a>
    </div>

</div>
<br>
<?php // echo'<pre>'; print_r($lines[0][]); die;  
            $lines[0]['Inventory']['date'] = date("d/m/Y", strtotime(str_replace('-', '/', $lines[0]['Inventory']['date'])));
?>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo __('Consultation Inventaire'); ?></h3>
            </div>
            <div class="panel-body">
         <?php echo $this->Form->create('Inventory',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>

                <div class="col-md-6">                         

                    <div class='form-group'>	
                        <label class='col-md-2 control-label'><?php echo __('Date'); ?></label>	


                        <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($lines[0]['Inventory']['date']); ?>'>

                        </div>



                    </div>

                    <div class='form-group'>	
                        <label class='col-md-2 control-label'><?php echo __('Numero'); ?></label>	


                        <div class='col-sm-10'><input   type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($lines[0]['Inventory']['numero']); ?>'>

                        </div>



                    </div>
                </div><div class="col-md-6">     
                    <div class='form-group'>	
                        <label class='col-md-2 control-label'><?php echo __('Deposit'); ?></label>	


                        <div class='col-sm-10'><input  type='text'  class='form-control' readonly='readonly' value='<?php echo $deposits['Deposit']['nom']; ?>'>
                        </div>



                    </div>	</div>
<?php echo $this->Form->end();?>

            </div></div></div></div>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php
                                        if($typ==1){
                                           echo 'Pièces de rechange'; 
                                        }
                                        if($typ==2){
                                           echo 'Matiéres premières'; 
                                        } 
                                        ?></h3>
            </div>
            <?php //echo'<pre>'; print_r($lines); ?>
            <div class="panel-body">



                <div class="tab-content tab-border"> 
                    <div class="tab-pane fade in active" id="famille">
                        <table class="table" id="table" style="width: 100%">
                            <thead>
                                <tr> <td style="border: 1px solid #ddd !important;" align="center" style="widtd: 35%">Nom</td>
                                                    <td style="border: 1px solid #ddd !important;" align="center" style="widtd: 15%">Référence</td>
                                                    <td style="border: 1px solid #ddd !important; <?php  if($typ==1){echo 'display: none;';}?>" align="center" style="widtd: 25%">Colis</td>
                                                    <td style="border: 1px solid #ddd !important;" align="center" style="widtd: 25%">Qte</td>                
                                </tr>
                            </thead>
                            <tbody>

                                                <?php    foreach ($lines as $key =>$value) {    ?> 
                                <tr>
    <td style="border: 1px solid #ddd !important;"><input readonly type="text" class="form-control rmv"  value="<?php echo $lines[$key]['Matierepremiere']['designation']?>">  </td>
    <td style="border: 1px solid #ddd !important;"><input readonly type="text" class="form-control rmv"  value="<?php echo $lines[$key]['Matierepremiere']['code']?>"></td>
    <td style="border: 1px solid #ddd !important; <?php if($typ==1){  echo 'display: none;';    }  ?>">
      <input readonly type="text" class="form-control rmv"  value="<?php echo $lines[$key]['Lineinventory']['colis']; ?>"></td> 
    <td style="border: 1px solid #ddd !important;">
        <input readonly type="text" class="form-control rmv" value="<?php echo $lines[$key]['Lineinventory']['qte']; ?>" ></td> 
                                </tr> 
                                                <?php }?>

                            </tbody>  
                        </table>

                    </div>

                </div></div></div></div></div>









