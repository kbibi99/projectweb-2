<?php $test=""; ?>
<script language="JavaScript" type="text/JavaScript">

function flvFPW1(){

var v1=arguments,v2=v1[2].split(","),v3=(v1.length>3)?v1[3]:false,v4=(v1.length>4)?parseInt(v1[4]):0,v5=(v1.length>5)?parseInt(v1[5]):0,v6,v7=0,v8,v9,v10,v11,v12,v13,v14,v15,v16;v11=new Array("width,left,"+v4,"height,top,"+v5);for (i=0;i<v11.length;i++){v12=v11[i].split(",");l_iTarget=parseInt(v12[2]);if (l_iTarget>1||v1[2].indexOf("%")>-1){v13=eval("screen."+v12[0]);for (v6=0;v6<v2.length;v6++){v10=v2[v6].split("=");if (v10[0]==v12[0]){v14=parseInt(v10[1]);if (v10[1].indexOf("%")>-1){v14=(v14/100)*v13;v2[v6]=v12[0]+"="+v14;}}if (v10[0]==v12[1]){v16=parseInt(v10[1]);v15=v6;}}if (l_iTarget==2){v7=(v13-v14)/2;v15=v2.length;}else if (l_iTarget==3){v7=v13-v14-v16;}v2[v15]=v12[1]+"="+v7;}}v8=v2.join(",");v9=window.open(v1[0],v1[1],v8);if (v3){v9.focus();}document.MM_returnValue=false;return v9;

} 
</script>
<br>
<div class="row" >
    <div class="col-md-12" >
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo __('Etat de stock Matières premières'); ?></h3>
            </div>
            <div class="panel-body">
        <?php echo $this->Form->create('Inventory',array('autocomplete' => 'off','class'=>'form-horizontal ls_form')); ?>

                <div class="col-md-6">                  
              	<?php 
		echo $this->Form->input('deposit_id',array('empty'=>'veuillez choisir','id'=>'' ,'champ'=>'deposit_id','table'=>'Deposit','depot_id','div'=>'form-group','label'=>'Dépôt','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','empty'=>'veuillez choisir')); 
	?></div><div class="col-md-6"><?php
		echo $this->Form->input('matierepremiere_id',array('empty'=>'veuillez choisir','div'=>'form-group','label'=>'Matiéres premières','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','empty'=>'veuillez choisir'));
	?>
                </div>      
 
                <div class="form-group">
                    <div class="col-lg-9 col-lg-offset-3">
                        <button type="submit" class="btn btn-primary" id="aff" name="btn" value="cher">Chercher</button>  
                      <a class="btn btn-primary" href="<?php echo $this->webroot;?>Inventories/etatmp"/>Afficher Tout </a>
                     <?php 
                                if(@$this->request->data['Inventory']['deposit_id']=="")
                                $this->request->data['Inventory']['deposit_id']="0"; 
                                if(@$this->request->data['Inventory']['matierepremiere_id']=="")
                                $this->request->data['Inventory']['matierepremiere_id']="0"; 
                                ?>
                        <a onClick="flvFPW1(wr+'Inventories/imp_mp?dep='+<?php echo @$this->request->data['Inventory']['deposit_id'];?>+'&mat='+<?php echo $this->request->data['Inventory']['matierepremiere_id']; ?>,'UPLOAD','width=800,height=1150,scrollbars=yes',0,2,2);return document.MM_returnValue" href="javascript:;" >
                            <button class='btn btn-primary' > Imprimer <i class='fa fa-print'></i></button></a>
</div>
                </div>
            </div>
<?php echo $this->Form->end();?>
        </div>
    </div>
</div> 
<div class="row">
    
<!--    
    'imp_mp?dep='.@$this->request->data['Inventory']['deposit_id'].
                                     '&mat='.@$this->request->data['Inventory']['matierepremiere_id'],-->
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"> Matiéres premières </h3> 
                                  
                            </div>
                            <div class="panel-body"> 
                                <div class="tab-content tab-border">

                                    <div class="tab-pane fadein active" id="famille">
                                        <table class="table" id="table" style="width: 100%">
                                            <thead>
                                                <tr>
                                                    <td style="border: 1px solid #ddd !important;" align="center" >Référence</td>
                                                    <td style="border: 1px solid #ddd !important;" align="center" >Désignation</td>
                                                    <td style="border: 1px solid #ddd !important; " align="center">Prix</td>
                                                    <td style="border: 1px solid #ddd !important; " align="center">Colis</td>
                                                    <td style="border: 1px solid #ddd !important;" align="center" >Qte</td>
                                                    <td style="border: 1px solid #ddd !important;" align="center" >Total</td>
                                                </tr>
                                            </thead>
                                            <tbody>

                                       <?php 
                                      // debug($stock);
                                       $ttcolis=0;
                                       $ttqte=0;
                                       $ttprix=0;
                                       foreach ($stock as $key =>$value ) {
                                           if(($value[0]['sumcolis']!=0)||($value[0]['sumqte']!=0)){ 
                                          $colis=$value[0]['sumcolis'];
                                          $qte=$value[0]['sumqte'];  
                                          $ttcolis+=$colis;
                                          $ttqte+=$qte;
                                          
                                          $tot_prix=$value['Matierepremiere']['prixachat']*$qte;
                                          $ttprix+=$tot_prix;
                                           ?>  
                                        <tr>
                                            <td style="border: 1px solid #ddd !important;"><?php echo $value['Matierepremiere']['code']?></td>
                                            <td style="border: 1px solid #ddd !important;"><?php echo $value['Matierepremiere']['designation']?></td>
                                            <td style="border: 1px solid #ddd !important;" align="right"><?php echo $value['Matierepremiere']['prixachat'] ?></td>
                                            <td style="border: 1px solid #ddd !important;" align="right"><?php echo $colis?></td>
                                            <td style="border: 1px solid #ddd !important;" align="right"><?php echo $qte?></td>
                                            <td style="border: 1px solid #ddd !important;" align="right"><?php echo $tot_prix?></td>
                                        </tr>  
                                             <?php } } ?> 

                                            </tbody> 
                                            <tfoot>
                                               <tr>
                                                   <td colspan="3" style="border: 1px solid #ddd !important;" align="left" >Total</td> 
                                                    <td style="border: 1px solid #ddd !important; " align="right" ><?php echo $ttcolis?></td>
                                                    <td style="border: 1px solid #ddd !important;" align="right" ><?php echo $ttqte?></td>
                                                    <td style="border: 1px solid #ddd !important;" align="right" ><?php echo $ttprix?></td>
                                                </tr> 
                                            </tfoot>
                                        </table>

                                    </div>

                                </div>
                                <br>
                            
                            </div></div></div></div>
