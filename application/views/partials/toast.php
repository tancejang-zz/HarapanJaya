<?php
	$duration = $this->session->userdata('notif')['duration'];
	$type = $this->session->userdata('notif')['type'];
	$message = $this->session->userdata('notif')['message'];
	$title = $this->session->userdata('notif')['title'];

?>
<script src="<?= base_url() ?>/assets/vendor/toastr/2.1.3/toastr.min.js"></script>
<script>
	if (window.toastr !== undefined) {
	  toastr.options = {
	    "closeButton": true,
	    "positionClass": "toast-bottom-right",
	    "fadeOut" : <?= $duration ?>
	  };
	  toastr["<?= $type ?>"]("<?= $message ?>", "<?= $title ?>");
	}
</script>
<?php
	$this->session->unset_userdata('notif');
?>