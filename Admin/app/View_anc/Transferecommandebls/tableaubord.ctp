<!--<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Releves/add"/> <i class="fa fa-plus-circle"></i> Ajouter </a>
    </div>
    
</div>-->


<script language="JavaScript" type="text/JavaScript">
function flvFPW1(){
var v1=arguments,v2=v1[2].split(","),v3=(v1.length>3)?v1[3]:false,v4=(v1.length>4)?parseInt(v1[4]):0,v5=(v1.length>5)?parseInt(v1[5]):0,v6,v7=0,v8,v9,v10,v11,v12,v13,v14,v15,v16;v11=new Array("width,left,"+v4,"height,top,"+v5);for (i=0;i<v11.length;i++){v12=v11[i].split(",");l_iTarget=parseInt(v12[2]);if (l_iTarget>1||v1[2].indexOf("%")>-1){v13=eval("screen."+v12[0]);for (v6=0;v6<v2.length;v6++){v10=v2[v6].split("=");if (v10[0]==v12[0]){v14=parseInt(v10[1]);if (v10[1].indexOf("%")>-1){v14=(v14/100)*v13;v2[v6]=v12[0]+"="+v14;}}if (v10[0]==v12[1]){v16=parseInt(v10[1]);v15=v6;}}if (l_iTarget==2){v7=(v13-v14)/2;v15=v2.length;}else if (l_iTarget==3){v7=v13-v14-v16;}v2[v15]=v12[1]+"="+v7;}}v8=v2.join(",");v9=window.open(v1[0],v1[1],v8);if (v3){v9.focus();}document.MM_returnValue=false;return v9;
}
</script>

<br><input type="hidden" id="page" value="1"/>

<div class="col-md-12" >
                            <div class="panel panel-default">
                                 <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Recherche'); ?></h3>
                                </div>
                                <div class="panel-body">
        <?php echo $this->Form->create('Transferecommandebl',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>

            <div class="col-md-6">                  
              	<?php 
		
		echo $this->Form->input('Date_debut',array('label'=>'Date debut','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','required data-bv-notempty-message'=>'Champ Obligatoire','type'=>'text') );
                
		echo $this->Form->input('marque_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'Veuillez choisir') );
		
	?></div>
  <div class="col-md-6"> 
       	<?php 
        echo $this->Form->input('Date_fin',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','required data-bv-notempty-message'=>'Champ Obligatoire','type'=>'text') );
	echo $this->Form->input('client_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'Veuillez choisir','id'=>'ClientReleve') );			
        ?>
  </div>   

                <div class="form-group">
                                            <div class="col-lg-9 col-lg-offset-3" >
                                                <button  id="breleve" type="submit" class="btn btn-primary" >Afficher</button> 
       <a  onClick="flvFPW1(wr+'Transferecommandebls/imprimerrecherche?Date_debut=<?php echo @$Date_debut;?>&marque_id=<?php echo @$marque_id;?>&Date_fin=<?php echo @$Date_fin;?>&client_id=<?php echo @$client_id;?>','UPLOAD','width=800,height=1150,scrollbars=yes',0,2,2);return document.MM_returnValue" href="javascript:;" ><button class="btn btn-primary">Imprimer</button> </a>
          

                                            </div>
                                        </div>
 
<?php echo $this->Form->end();?>





</div>
                            </div>
                        </div>




<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Tableau Bord'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="">
                      <thead>
	<tr>
                
                <td align="center"><?php echo ('Nom Famille'); ?></td>
                <td align="center"><?php echo ('Quantite Dem'); ?></td>
                <td align="center"><?php echo ('Quantite  Liv'); ?></td>
                <td align="center"><?php echo ('Ecart ')?></td>
                <td align="center"><?php echo ('Valeur de Liv ')?></td>
                
                <td align="center"><?php echo ('Pourcentage Val Liv')?></td>
                <td align="center"><?php echo ('Pourcentage Qte Liv')?></td>
         
        </tr></thead><tbody>
	<?php //debug($famille);
        
        $tot_Qte_Dem=0;$tot_ecart=0;
        
         if(!empty($famille)){
        foreach ($famille as $famille): 
            $tot=0;$Qte_Dem=0;$Qte_Liv=0;$Total_HT=0;$prcliv=0;$ec=0;$prcQte=0;
           // debug($famille);die;
         foreach($lignecommande as $c=>$comm){
            if($famille['Famille']['id']==$comm[0]['famille']){
                $Qte_Dem=$comm[0]['Qte_Dem'];   
                $tot_Qte_Dem=$tot_Qte_Dem+$Qte_Dem;
            }
         }
         foreach ($lignebonlivraison as $l=>$bl){
             if($famille['Famille']['id']==$bl[0]['famille']){
                 $Qte_Liv=$bl[0]['Qte_Liv'];
                 $prcQte=($Qte_Liv/$total_Qte)*100;
                 //$tot_Qte_Liv=$tot_Qte_Liv+$Qte_Liv;
                 
                 $Total_HT=$bl[0]['Total_HT'];
                 $prcliv=($Total_HT/$total_liv)*100;
                 
             }
         }
         $ec=$Qte_Dem-$Qte_Liv;
        $tot_ecart=$tot_ecart+$ec;
             $prcliv=sprintf('%.2f',$prcliv);
             $prcQte=sprintf('%.2f',$prcQte);
                ?>
	<tr>
		<td><?php echo h($famille['Famille']['name']); ?></td>
                <td align="center"><?php echo h($Qte_Dem); ?></td>
                <td align="center"><?php echo h($Qte_Liv)?></td>
                <td align="center"><?php echo h($ec)?></td>
                <td align="center"><?php echo h($Total_HT)?></td>
                <td align="center"><?php echo h($prcliv)?>%</td>
                <td align="center"><?php echo h($prcQte)?>%</td>
        </tr>
<?php endforeach;
         }
        ?>
                          </tbody>
                          <tr>
                              <td colspan="1" align="center"></td>
                              <td  align="center"><strong><?php echo h($tot_Qte_Dem)?></strong></td>
                              <td  align="center"><strong><?php echo h($total_Qte)?></strong></td>
                              <td align="center"><strong><?php echo  h($tot_ecart)?></strong></td>   
                              <td  align="center"><strong><?php echo h($total_liv)?></strong></td>
                          </tr>
                         
	</table>
                                </div></div></div></div></div>	


