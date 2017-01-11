        {
        chart: {
            type: 'line'
        },
        title: {
            text: '<?php echo $titolo?>'
        },
        subtitle: {
            text: '<?php echo $sottotitolo ?>'
        },
        xAxis: {
            categories: [<?php $c=0; foreach($dimensione_y as $y){
                	if($c>0)
						echo ","; 
                	echo "'".$y."'";
					$c++;
				} ?>],
            tickmarkPlacement: 'on',
            title: {
                enabled: false
            }
        },
        yAxis: {
            title: {
                text: '<?php echo $assex?>'
            },
            labels: {
                formatter: function () {
                    return this.value;
                }
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
            valueSuffix: '€',
            useHTML: true
        },
        plotOptions: {
            area: {
                stacking: 'normal',
                lineColor: '#666666',
                lineWidth: 1,
                marker: {
                    lineWidth: 1,
                    lineColor: '#666666'
                }
            },
            line: {
                dataLabels: {
                    enabled: true
                },
                enableMouseTracking: false
            }
            
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