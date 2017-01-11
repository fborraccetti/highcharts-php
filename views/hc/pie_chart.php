<div id="<?php echo md5($titolo)?>"></div>
<script>
    $(document).ready(function () {

        // Build the chart
        $('#<?php echo md5($titolo)?>').highcharts(
            <?php echo $this->load->view("hc/pie_chart_js",null,TRUE); ?>
        );
    });
</script>	