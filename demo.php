<?php


/*** funzione per generare grafici in png ***/

function hc($opt=null){
    
    $data=array();
    $data['async']="true";
    $data['content']="options";
    $data['options']=$opt;
    $data['type']="image/png";
    $data['width']="";
    $data['scale']="";
    $data['constr']="Chart";
    $data['callback']="";
    
    return curl_send_post("http://export.highcharts.com",$data);
}

$char_option=array( 
                    "titolo"=>"% di sconto per Categoria ",
                    "sottotitolo"=>"",
                    "um_x"=>"%",
                    "etichetta"=>"categoria", 
                    "nome_etichetta"=>"% di sconto",
                    "assex"=>"Sconto",
                    "dimensione"=>"totale",
                    "dimensione_y"=>$dim_y,
                    "legenda"=>"false",
                    "newdata"=>true,
                    "datablock"=>$resu
                );


$chart_js = $this->load->view("hc/column_chart",$char_option,TRUE ); 
$chart_png = hc($this->load->view("hc/column_chart_js",$char_option,TRUE ));

?>


<script src="//code.highcharts.com/highcharts.js"></script>
<script src="//code.highcharts.com/modules/exporting.js"></script>

<?php echo $chart_js ?>

<img src="http://export.highcharts.com/<?php echo $chart_png ?>"><br/>

