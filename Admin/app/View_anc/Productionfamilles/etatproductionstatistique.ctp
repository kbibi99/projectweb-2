
<br>
<div class="row" >
                       
    <div class="col-md-12" >
                            <div class="panel panel-default">
                                 <div class="panel-heading">
                                     <h3 class="panel-title"><strong><?php echo __('Recherche'); ?></strong></h3>
                                </div>
                                <div class="panel-body">
        <?php echo $this->Form->create('Productionfamille',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>
                        <div class="col-md-6">                  
                        <?php 
                            echo $this->Form->input('Date_debut',array('label'=>'Date début','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','required data-bv-notempty-message'=>'Champ Obligatoire','type'=>'text') );               
                            echo $this->Form->input('marque_id',array('value'=>$marque_id,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'Veuillez choisir') );
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
                                                <a href="<?php echo $this->webroot;?>Productionfamilles/etatproductionstatistique" class="btn btn-primary">Afficher Tout</a>
<!--       <a  onClick="flvFPW1(wr+'Productionfamilles/imprimeretatstockfamilleproduction?marque_id=<?php echo @$marque_id;?>&famille_id=<?php echo @$famille_id;?>&Date_debut=<?php echo @$Date_debut;?>&Date_fin=<?php echo @$Date_fin;?>','UPLOAD','width=800,height=1150,scrollbars=yes',0,2,2);return document.MM_returnValue" href="javascript:;" ><button class="btn btn-primary">Imprimer</button> </a>-->
          

                                            </div>
                                        </div>
 
<?php echo $this->Form->end();?>





</div>
                            </div>
                        </div>
    </div>
    


<!-- Main Content Element  Start-->
                    <div class="row" style="display: none;">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Real Time</h3>
                                </div>
                                <div class="panel-body">
                                    <div id="realTimeChart" class="flotChartRealTime">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<div class="row">
<!--    ------------ Production--------------------->
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title" align="center"><strong>Statistique Production "Secteur"</strong></h3>
                                    
                                </div>
                                <div class="panel-body">
                                    <div id="flotPieChart" class="flotPieChart"></div>
                                    <div class="paiChartAction">
                                        <h3 id="title">Production</h3>
                                        <p id="description"></p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
<!--         -----------------  Vente--------------->
                    <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title" align="center"><strong>Statistique Vente "Secteur"</strong></h3>
                                    
                                </div>
                                <div class="panel-body">
                                    <div id="flotPieChart1" class="flotPieChart"></div>
                                    <div class="paiChartAction">
                                        <h3 id="title1">Vente</h3>
                                        <p id="description1"></p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>






    <div class="row">
                <div class="col-md-12">
                         <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title" align="center"><strong>Statistique "Histogramme" Production / Vente</strong></h3>
                        </div>
                        <div class="panel-body">
                            <div class="bar_chart_canvas_box">
                                <canvas id="bar_chart_canvas" height="300" width="600"></canvas>
                            </div>
                            <table align="right" style="width: 50%">
                                <tr>
                                    <td align="right"><strong>Production : &nbsp;</strong></td>
                                    <td align="left"><div style="background-color: #FF7878;height: 15px;width: 20px;"></div></td>
                                </tr><tr>
                                    <td align="right"><strong>Vente : &nbsp;</strong></td>
                                    <td align="left"><div style="background-color: #1fb5ad;height: 15px;width: 20px;"></div></td>
                                </tr>
                            </table>
                            
                        </div>
                    </div>

                </div>
            </div>

                    
    
    <?php //debug($ligneproductions);die; 
    $fam="";$var="";$qte_tot=0;$qte1_tot=0;
    
    $secteur=array();
    $secteur1=array();
    $vente=array();
    
    foreach($ligneproductions as $k=>$ligneproduction){
        $qte_tot+=$ligneproduction[0]['qte'];
    }
    foreach($lignebonlivraisons as $k=>$lignebonlivraison){
        $qte1_tot+=$lignebonlivraison[0]['qte'];
    }
    foreach($lignebonlivraisons as $k=>$lignebonlivraison){
       $secteur1[$k]['famille']=$lignebonlivraison['Famille']['Name'];
       $secteur1[$k]['qte_prc']=($lignebonlivraison[0]['qte']/$qte_tot)*100;
    }
   // debug($secteur1);die;
    
    foreach($ligneproductions as $k=>$ligneproduction){
     $vent=0;
        foreach ($lignebonlivraisons as $liv){
            if($liv[0]['famille']==$ligneproduction[0]['famille']){
               $vent=$liv[0]['qte']; 
               $vente[$k]=$liv[0]['famille'];
            }
        }
            if($k==0){
                $fam.='"'.utf8_encode($ligneproduction['Famille']['Name']).'"'; 
                 $var.=$ligneproduction[0]['qte']; 
                 $v=$vent;
               }else{
                  $fam.=',"'.utf8_encode($ligneproduction['Famille']['Name']).'"';
                  $var.=', '.$ligneproduction[0]['qte'];
                  $v.=', '.$vent;
              }
        $secteur[$k]['famille']=$ligneproduction['Famille']['Name'];
        $secteur[$k]['qte_prc']=($ligneproduction[0]['qte']/$qte_tot)*100;
             
    }
    foreach ($lignebonlivraisons as $liv){
               $b=0;
           foreach ($vente as $ll){ 
            if($liv[0]['famille']==$ll){
               $b=1;
           }}
           if($b==0){
              $fam.=',"'.utf8_encode($liv['Famille']['Name']).'"';
                  $var.=', 0';
                  $v.=', '.$liv[0]['qte']; 
           }
        }
   
     //debug($secteur);die;
 
    ?>
 
<script type="text/javascript" src="<?php echo $this->webroot;?>assets/js/color.js"></script>
<script src="<?php echo $this->webroot;?>assets/js/chart/chartjs/Chart.min.js"></script>

<script>
function flot_pie_chart(){
    'use strict';

    $flotPieChart.unbind();

        $("#title").text("PRODUCTION");
        $("#description").text("");

        $.plot($flotPieChart, pieData, {
            series: {
                pie: {
                    show: true,
                    combine: {
                        color: "#999",
                        threshold: 0.05
                    }
                }
            },
            legend: {
                show: false
            },
            colors: [$fillColor2, $lightBlueActive, $redActive, $blueActive, $brownActive, $greenActive]
        });
        $flotPieChart1.unbind();

        $("#title1").text("Vente");
        $("#description1").text("");

        $.plot($flotPieChart1, pieData1, {
            series: {
                pie: {
                    show: true,
                    combine: {
                        color: "#999",
                        threshold: 0.05
                    }
                }
            },
            legend: {
                show: false
            },
            colors: [$fillColor2, $lightBlueActive, $redActive, $blueActive, $brownActive, $greenActive]
        });
}    
var $flotPieChart = $('#flotPieChart');
var pieData = [],
    series = <?php echo $k;?>
<?php foreach($secteur as $h=>$sect){ ?> 
    pieData[<?php echo $h;?>] = {
        label: "<?= $sect['famille'] ?>",  
        data: <?= $sect['qte_prc'] ?>
   
}
<?php } ?>
var $flotPieChart1 = $('#flotPieChart1');
var pieData1 = [],
    series = <?php echo $k;?>
<?php foreach($secteur1 as $h=>$sect){ ?> 
    pieData1[<?php echo $h;?>] = {
        label: "<?= $sect['famille'] ?>",  
        data: <?= $sect['qte_prc'] ?>
   
}
<?php } ?>
    jQuery(document).ready(function($) {
    'use strict';
    chartLoad();
});

var sizeId;
$(window).resize(function() {
    clearTimeout(sizeId);
    sizeId= setTimeout(chartSize, 1000);

});
/******** Chart js Data set Start********/
var randomScalingFactor = function(){ return Math.round(Math.random()*10)};
var barChartData = {
    labels : [<?php echo $fam;?>],
    datasets: [
        {
            fillColor: $redActive,
            data: [<?php echo $var;?>]
        },
                {
                    fillColor: $lightGreen,
                     data: [<?php echo $v;?>]
                }
    ]

}


/******** Chart js Defaults Global Value Set End ********/
var myBar;
var myLine;
var myPie;
var myDoughnut;
var myPolarArea;
var myRadar;
function chartLoad(){
    'use strict';
    var ctx = document.getElementById("bar_chart_canvas").getContext("2d");
    myBar = new Chart(ctx).Bar(barChartData, {responsive : true, barShowStroke: false });

    var ctx = document.getElementById("pie-chart-area").getContext("2d");
    myPie = new Chart(ctx).Pie(pieData, {responsive : true});

    var ctx = document.getElementById("doughnut-chart-area").getContext("2d");
    myDoughnut = new Chart(ctx).Doughnut(doughnutData, {responsive : true});

    var ctx = document.getElementById("polar-chart-area").getContext("2d");
    myPolarArea = new Chart(ctx).PolarArea(polarData, {
        responsive:true
    });
    myRadar = new Chart(document.getElementById("radar-chart-area").getContext("2d")).Radar(radarChartData, {responsive: true });
    var ctx = document.getElementById("line-chart-area").getContext("2d");
    myLine  = new Chart(ctx).Line(lineChartData, { responsive: true });
}
function chartSize(){
    //console.log('LOG');
    myLine.destroy();
    myBar.destroy();
    myPie.destroy();
    myDoughnut.destroy();
    myPolarArea.destroy();
    myRadar.destroy();
    chartLoad();
}
</script>