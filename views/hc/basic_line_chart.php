<div id="<?php echo md5($titolo) ?>"></div>
<script>	
	$(function () {
	    $('#<?php echo md5($titolo) ?>').highcharts(
			<?php echo $this->load->view("hc/basic_line_chart_js",null,TRUE); ?>
	    );
	});
</script>