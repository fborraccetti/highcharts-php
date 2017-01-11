<div id="<?php echo md5($titolo) ?>"></div>
<script>
    $(document).ready(function () {
        $('#<?php echo md5($titolo) ?>').highcharts(
            <?php echo $this->load->view("hc/column_chart_js",null,TRUE); ?>
        );
    });
</script>