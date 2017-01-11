{
            chart: {
	            type: 'column'
	        },
	        title: {
	            text: '<?php echo $titolo ?>'
	        },
	        subtitle: {
	            text: ''
	        },
	        xAxis: {
	        	labels: {
                    rotation: -45,
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                },
	           	categories: [<?php $x=0; foreach($dimensione_y as $c){ if(strlen(trim($c[$etichetta]))>0){ if($x>0)echo ","; ?>"<?php echo trim($c[$etichetta])?>"<?php $x++; }} ?>]
	        }, 
	        yAxis: {
	            min: 0,
	            title: {
	                text: '<?php echo trim($nome_etichetta) ?>'
	            }
	        }, 
	        plotOptions: {
	            bar: {
	                dataLabels: {
	                    enabled: true
	                }
	            }
	        },
	        legend: {
                enabled: false
            },
	        credits: {
	            enabled: false
	        },
	        dataLabels: {
                enabled: true,
                rotation: -90,
                color: '#FFFFFF',
                align: 'right',
                format: '{point.y:.1f}', // one decimal
                y: 10, // 10 pixels down from the top
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            },
	        <?php if(FALSE){?>
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
	        <?php }else{ ?>
            series: [{
                name: "<?php echo trim($nome_etichetta) ?>",
                colorByPoint: true,
                data: [<?php $x=0; foreach($datablock as $c){ if(strlen(trim($c[$etichetta]))>0){ if($x>0)echo ","; ?><?php echo trim($c[$dimensione]) ?><?php $x++; }} ?>]
            }] 
            <?php } ?>
        }