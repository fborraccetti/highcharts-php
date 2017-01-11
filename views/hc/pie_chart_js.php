            {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: '<?php echo $titolo ?>'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
	            pie: {
	                allowPointSelect: true,
	                cursor: 'pointer',
	                dataLabels: {
	                    enabled: true,
	                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
	                    style: {
	                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
	                    }
	                },
	                showInLegend: <?php echo isset($legenda)?$legenda:true; ?>
	            }
	        },
            credits: {
                enabled: false
            },
            series: [{
                name: "<?php echo $nome_etichetta ?>",
                colorByPoint: true,
                data: [
                <?php $x=0; foreach($datablock as $c){
                     if($x>0)echo ",";
                ?>
                {
                    name: "<?php echo $c[$etichetta]?>",
                    y: <?php echo $c[$dimensione] ?>
                }
                <?php $x++; } ?>
                ]
            }]
        }