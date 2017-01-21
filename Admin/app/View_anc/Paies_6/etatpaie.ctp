<script language="JavaScript" type="text/JavaScript">
function flvFPW1(){
var v1=arguments,v2=v1[2].split(","),v3=(v1.length>3)?v1[3]:false,v4=(v1.length>4)?parseInt(v1[4]):0,v5=(v1.length>5)?parseInt(v1[5]):0,v6,v7=0,v8,v9,v10,v11,v12,v13,v14,v15,v16;v11=new Array("width,left,"+v4,"height,top,"+v5);for (i=0;i<v11.length;i++){v12=v11[i].split(",");l_iTarget=parseInt(v12[2]);if (l_iTarget>1||v1[2].indexOf("%")>-1){v13=eval("screen."+v12[0]);for (v6=0;v6<v2.length;v6++){v10=v2[v6].split("=");if (v10[0]==v12[0]){v14=parseInt(v10[1]);if (v10[1].indexOf("%")>-1){v14=(v14/100)*v13;v2[v6]=v12[0]+"="+v14;}}if (v10[0]==v12[1]){v16=parseInt(v10[1]);v15=v6;}}if (l_iTarget==2){v7=(v13-v14)/2;v15=v2.length;}else if (l_iTarget==3){v7=v13-v14-v16;}v2[v15]=v12[1]+"="+v7;}}v8=v2.join(",");v9=window.open(v1[0],v1[1],v8);if (v3){v9.focus();}document.MM_returnValue=false;return v9;
}
</script>
 <div class="row"><?php echo $this->Form->create('Paie',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); 
?>
                        <div class="col-md-8" >
                            <div class="panel panel-default" >
                                <div class="panel-heading">
                                    <h3 class="panel-title">Recherche</h3>
<!--                                    <ul class="panel-control">
                                        <li><a class="minus" href="javascript:void(0)" ><i class="fa fa-minus"></i></a></li>
                                        <li><a class="refresh" href="javascript:void(0)"><i class="fa fa-refresh"></i></a></li>   
                                    </ul>-->
                                </div>
                                <div class="panel-body">
                                    <div class="col-md-6">                  
                                        <?php 
                                       // $fn='aa';
	echo $this->Form->input('annee_id',array('empty'=>'Veuillez Choisir','value'=>$annee_id,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control') );
        echo $this->Form->input('sexe',array('empty'=>'Veuillez Choisir','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control') );
                ?></div> 
                                   
                                    <div class="form-group">
                            <div class="col-lg-9 col-lg-offset-3">
                                <input type="submit" value="Afficher" name="data[Paie][afficher]" id="afficher" class="btn btn-primary"/>
<!--                                <a class="btn btn-primary" href="<?php echo $this->webroot;?>Paies/index"/>Afficher Tout </a>-->
            <a onClick="flvFPW1(wr+'Paies/imprimeretatpaie/?annee_id=<?php echo @$annee_id;?>&sexe=<?php echo @$sexe;?>','UPLOAD','width=800,height=1150,scrollbars=yes',0,2,2);return document.MM_returnValue" href="javascript:;" ><button class="btn btn-primary">Imprimer</button> </a>
                            
                            </div>
                        </div> 
                    </div>         
                </div>          
            </div>
 </div>

<br>


<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Etat de paie des personnels'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                      <thead>
	<tr>     
            
                <th><?php echo ('Personnel'); ?></th>
	         
		<th><?php echo ('Janvier'); ?></th>
	         
		<th><?php echo ('Fevrier'); ?></th>
	         
		<th><?php echo ('Mars'); ?></th>
	         
		<th><?php echo ('Avril'); ?></th>
	         
		<th><?php echo ('Mai'); ?></th>
	         
		<th><?php echo ('Juin'); ?></th>
	         
		<th><?php echo ('Juillet'); ?></th>
                
                <th><?php echo ('Aout'); ?></th>
                
                <th><?php echo ('Septembre'); ?></th>
                
                <th><?php echo ('Octobre'); ?></th>
                
                <th><?php echo ('Novembre'); ?></th>
                
                <th><?php echo ('Decembre'); ?></th>
			
                
                
        </tr></thead><tbody>
	<?php foreach ($personnel as $person): 
           // debug($abc[$person['Personnel']['id']][1])
           // debug($personnel);die;
            ?>
	<tr>
            
            <td>
                <?php echo $this->Html->link($person['Personnel']['name'], array('controller' => 'personnels', 'action' => 'view', $person['Personnel']['id'])); ?>
            </td>
            <td style=""><?php echo $abc[$person['Personnel']['id']][1]; ?></td>
            <td style=""><?php echo $abc[$person['Personnel']['id']][2]; ?></td>
            <td style=""><?php echo $abc[$person['Personnel']['id']][3]; ?></td>
            <td style=""><?php echo $abc[$person['Personnel']['id']][4]; ?></td>
            <td style=""><?php echo $abc[$person['Personnel']['id']][5]; ?></td>
            <td style=""><?php echo $abc[$person['Personnel']['id']][6]; ?></td>
            <td style=""><?php echo $abc[$person['Personnel']['id']][7]; ?></td>
            <td style=""><?php echo $abc[$person['Personnel']['id']][8]; ?></td>
            <td style=""><?php echo $abc[$person['Personnel']['id']][9]; ?></td>
            <td style=""><?php echo $abc[$person['Personnel']['id']][10]; ?></td>
            <td style=""><?php echo $abc[$person['Personnel']['id']][11]; ?></td>
            <td style=""><?php echo $abc[$person['Personnel']['id']][12]; ?></td>
            			
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>
	
                                </div></div></div></div></div>	


