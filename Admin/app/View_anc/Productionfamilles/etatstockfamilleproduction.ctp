<script language="JavaScript" type="text/JavaScript">
function flvFPW1(){
var v1=arguments,v2=v1[2].split(","),v3=(v1.length>3)?v1[3]:false,v4=(v1.length>4)?parseInt(v1[4]):0,v5=(v1.length>5)?parseInt(v1[5]):0,v6,v7=0,v8,v9,v10,v11,v12,v13,v14,v15,v16;v11=new Array("width,left,"+v4,"height,top,"+v5);for (i=0;i<v11.length;i++){v12=v11[i].split(",");l_iTarget=parseInt(v12[2]);if (l_iTarget>1||v1[2].indexOf("%")>-1){v13=eval("screen."+v12[0]);for (v6=0;v6<v2.length;v6++){v10=v2[v6].split("=");if (v10[0]==v12[0]){v14=parseInt(v10[1]);if (v10[1].indexOf("%")>-1){v14=(v14/100)*v13;v2[v6]=v12[0]+"="+v14;}}if (v10[0]==v12[1]){v16=parseInt(v10[1]);v15=v6;}}if (l_iTarget==2){v7=(v13-v14)/2;v15=v2.length;}else if (l_iTarget==3){v7=v13-v14-v16;}v2[v15]=v12[1]+"="+v7;}}v8=v2.join(",");v9=window.open(v1[0],v1[1],v8);if (v3){v9.focus();}document.MM_returnValue=false;return v9;
}
</script>

<br><input type="hidden" id="page" value="1"/>
<div class="row">
                        
    
    
    
     <div class="col-md-12" >
                            <div class="panel panel-default">
                                 <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Recherche'); ?></h3>
                                </div>
                                <div class="panel-body">
        <?php echo $this->Form->create('Productionfamille',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>

            <div class="col-md-6">                  
              	<?php 
		echo $this->Form->input('Date_debut',array('label'=>'Date début','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','required data-bv-notempty-message'=>'Champ Obligatoire','type'=>'text') );               
		echo $this->Form->input('marque_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'Veuillez choisir') );
		
	?></div>
  <div class="col-md-6"> 
       	<?php 
                echo $this->Form->input('Date_fin',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','required data-bv-notempty-message'=>'Champ Obligatoire','type'=>'text') );
       		echo $this->Form->input('famille_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'Veuillez choisir') );
?>
  </div>   

                <div class="form-group">
                                            <div class="col-lg-9 col-lg-offset-3" >
                                                <button  id="breleve" type="submit" class="btn btn-primary" >Afficher</button> 
                                                <a href="<?php echo $this->webroot;?>Productionfamilles/etatstockfamilleproduction" class="btn btn-primary">Afficher Tout</a>
       <a  onClick="flvFPW1(wr+'Productionfamilles/imprimeretatstockfamilleproduction?marque_id=<?php echo @$marque_id;?>&famille_id=<?php echo @$famille_id;?>&Date_debut=<?php echo @$Date_debut;?>&Date_fin=<?php echo @$Date_fin;?>','UPLOAD','width=800,height=1150,scrollbars=yes',0,2,2);return document.MM_returnValue" href="javascript:;" ><button class="btn btn-primary">Imprimer</button> </a>
          

                                            </div>
                                        </div>
 
<?php echo $this->Form->end();?>





</div>
                            </div>
                        </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Etat Stock Famille'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="">
                      <thead>
	<tr>
                 <td align="center"><?php echo ('Nom'); ?></td>
                <td align="center" ><?php echo ('Prix'); ?></td>
                <td align="center" ><?php echo ('Sotck unitial'); ?></td>
                <td align="center" ><?php echo ('Production'); ?></td>
                <td align="center" ><?php echo ('Vente'); ?></td>
                <td align="center" ><?php echo ('Stock'); ?></td>
<!--                <td align="center" ><?php echo ('Quantité  Pair'); ?></td>-->
                <td align="center" ><?php echo ('Valeur Stock')?></td>
        </tr></thead><tbody>
	<?php //debug($famille);
        $somme=0;$somPRO=0;$somVEN=0;$somSTK=0;$somQTE_Pair=0;$sommeqte=0;
        foreach ($famille as $famille): 
            $qte_packet=0;$qteBL=0;$prixstock=0;$qteR=0;$prix=0;$qte_pair=0;$qte_liv=0;
          //debug($stockdepot);die;  
         foreach($stockdepot as $s=>$stock){
            if($famille['Famille']['id']==$stock['Ligneinventairefamille']['famille_id']){
                $qte_packet=$stock['Ligneinventairefamille']['qte'];  
                $sommeqte=$sommeqte+$stock['Ligneinventairefamille']['qte'];
            }
         }
         foreach($ligneproduction as $lp=>$prod){
            if($famille['Famille']['id']==$prod[0]['famille']){
                $qte_liv=$prod[0]['qte_liv'];   
            }
         }
         
         
         foreach ($lignebonlivraison as $l=>$ligne){
             if($famille['Famille']['id']==$ligne[0]['famille']){
                 $qteBL=$ligne[0]['Qte'];   
             }
         }
           
            //$qteR=$qte_packet-$qteBL;
            $qteR=($qte_liv+$qte_packet)-$qteBL;
            $qte_pair=$qteR*12;
            $prix=$qteR*$famille['Famille']['Prix'];
            
            $somPRO=$somPRO+$qte_liv;
            $somVEN=$somVEN+$qteBL;
            $somSTK=$somSTK+$qteR;
            $somQTE_Pair=$somQTE_Pair+$qte_pair;
            $somme=$somme+$prix;
            
            $somme=sprintf('%.3f',$somme);
            $prix=sprintf('%.3f',$prix);
                ?>
	<tr>
                <td><?php echo h($famille['Famille']['name']); ?></td>
                <td align="right"><?php echo h($famille['Famille']['Prix']); ?></td>
                <td align="center"><?php echo h($qte_packet)?></td>
                <td align="center"><?php echo h($qte_liv)?></td>
                <td align="center"><?php echo h($qteBL)?></td>
                <td align="center"><?php echo h($qteR)?></td>
<!--                <td align="center"><?php echo h($qte_pair)?></td>-->
                <td align="right"><?php echo h($prix); ?></td>
                
	</tr>
<?php endforeach;
        ?>
        <tr>
            <td align="right" colspan="2"><strong>Total</strong></td>
               <td align="center"><strong><?php echo $sommeqte; ?></strong></td>
               <td align="center"><strong><?php echo $somPRO; ?></strong></td>
               <td align="center"><strong><?php echo $somVEN; ?></strong></td>
               <td align="center"><strong><?php echo $somSTK; ?></strong></td>
<!--               <td align="center"><strong><?php echo $somQTE_Pair; ?></strong></td>-->
                <td align="center"><strong><?php echo $somme; ?></strong></td>
         </tr>
                          </tbody>
                         
	</table>
	
                                </div></div></div></div></div>	


