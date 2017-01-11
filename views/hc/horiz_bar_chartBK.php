<div id="<?php echo md5($titolo) ?>"></div>
<script>
    $(document).ready(function () {
        $('#<?php echo md5($titolo) ?>').highcharts({
            chart: {
	            type: 'bar'
	        },
	        title: {
	            text: '<?php echo $titolo ?>'
	        },
	        subtitle: {
	            text: ''
	        },
	        xAxis: {
	        	labels: {
	                enabled: false
	           	},
	           	categories: [<?php $x=0; foreach($datablock as $c){ if(strlen(trim($c[$etichetta]))>0){ if($x>0)echo ","; ?>"<?php echo trim($c[$etichetta])?>"<?php $x++; }} ?>]
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
	        credits: {
	            enabled: false
	        },
            series: [{
                name: "<?php echo trim($nome_etichetta) ?>",
                colorByPoint: true,
                data: [<?php $x=0; foreach($datablock as $c){ if(strlen(trim($c[$etichetta]))>0){ if($x>0)echo ","; ?><?php echo trim($c[$dimensione]) ?><?php $x++; }} ?>]
            }]
        });
    });
</script>