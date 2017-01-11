<div id="<?php echo md5($titolo) ?>"></div>
<script>
    $(document).ready(function () {
        $('#<?php echo md5($titolo) ?>').highcharts(
            <?php echo $this->load->view("hc/horiz_bar_chart_js",null,TRUE); ?>
        );
    });
</script>