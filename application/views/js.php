<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>if (!window.jQuery) { document.write('<script src="<?= base_url(); ?>assets/js/jquery-2.1.4.min.js"><\/script>'); }</script>
<script src="<?= base_url(); ?>assets/js/jquery.mobile.custom.min.js"></script>
<!-- <script src="<?= base_url(); ?>assets/plugin/bootstrap/js/bootstrap-custom.min.js"></script> -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/plugin/snap/snap.svg-min.js"></script>
<!-- <script src="<?= base_url(); ?>assets/plugin/gsap/TweenLite.min.js"></script>
<script src="<?= base_url(); ?>assets/plugin/gsap/CSSPlugin.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>

<script src="<?= base_url(); ?>assets/plugin/gsap/Draggable.min.js"></script>
<script src="<?= base_url(); ?>assets/js/main.js?v=1.1"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" async defer></script>

<script type="text/javascript">
	$(function() {

	});

	function changeLanguage(lang) {
		$.ajax({
            data: {
                "<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
            },
            dataType: 'JSON',
            success: function(data) {
               window.location.reload();
            },
            type : 'POST',
            url : '<?= base_url(); ?>main/ajax_set_language/'+ lang +'/'
       });
	}

	function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        return regex.test(email);
    }
</script>