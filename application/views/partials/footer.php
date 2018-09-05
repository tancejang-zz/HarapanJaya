</div>

<!-- JS Common -->
<script src="<?= base_url() ?>assets/vendor/popper/1.12.9/popper.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/highlight/9.12.0/highlight.pack.js"></script>

<!-- JS Page -->
<script src="<?= base_url() ?>assets/vendor/chartjs/2.7.0/chart.min.js"></script>

<!-- JS Custom -->
<script src="<?= base_url() ?>assets/custom/1.0.0/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/custom/1.0.0/js/script.js"></script>
<script src="<?= base_url() ?>assets/custom/1.0.0/js/source-code.js"></script>
<script>
	$(document).ready(function(){
		$('table').dataTable();	
		$('.hj-select').select2();	
	});
</script>
</body>
</html>