{
            chart: {
                type: 'column'
            },
            title: {
                text: '<?php echo $titolo?>'
            },
            subtitle: {
                text: '<?php echo $sottotitolo ?>'
            },
            xAxis: {
                categories: [
                    <?php $c=0; foreach($dimensione_y as $y){
                    	if($c>0)
    						echo ","; 
                    	echo "'".$y."'";
    					$c++;
    				} ?>
                ],
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: '<?php echo $assex ?>'
                }
            },
                credits: {
    	            enabled: false
    	        },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} <?php echo $um_x ?></b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                },
                showInLegend: <?php echo isset($legenda)?$legenda:true; ?>
            },
            series: [
            <?php $x=0; foreach($datablock as $k=>$dblock ){ ?>
            <?php if($x>0) echo ","; ?>
            {
                name: '<?php echo $k ?>',
                data: [
                	<?php $c=0; foreach($dblock as $r ){
                		if($c>0)
    						echo ",";
                		echo $r[$dimensione];
    					$c++;
                	} ?>
                	]
    
            }
    		<?php $x++; } ?>
            ]
}

<?php /*
                $sconto_categoria=array(
                    "titolo"=>"Distribuzione sconto per Categoria ",
                    "sottotitolo"=>"",
                    "um_x"=>"%",
                    "etichetta"=>"categoria",
                    "assex"=>"Sconto",
                    "dimensione"=>"totale",
                    "dimensione_y"=>$dim_y,
                    "legenda"=>"false",
                    "datablock"=>$resu
                );
 */ ?>