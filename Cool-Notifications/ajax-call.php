<?php
if ($_POST['variable'] == 'value') { 

$type = array("danger","warning","success","info");
$random_type = $type[array_rand($type)];


if ($random_type == 'danger') {
	$allow_dismiss = "false";
}else{
	$allow_dismiss = "true";
}
?>
<script>
$.notify({
	// options
	icon: 'http://notifications.local/icons/<?php echo $random_type; ?>.png',
	title: '<b><?php echo ucfirst($random_type); ?> Notification Example</b><br />',
	message: 'This is an example of a notification response from an Ajax call. <a href=\"http://google.com\">click here</a> to go to Google.com',
	url: 'https://twitter.com',
	target: '_self'
	},{
	// settings
	element: 'body',
	position: 'fixed',
	type: "<?php echo $random_type; ?>", // danger, warning, success, info
	allow_dismiss: <?php echo $allow_dismiss; ?>,
	newest_on_top: false,
	placement: {
		from: "bottom",
		align: "left"
	},
	offset: 20,
	spacing: 10,
	z_index: 1031,
	delay: 100000,
	timer: 1000,
	url_target: '_self',
	mouse_over: 'pause',
	animate: {
		enter: 'animated fadeInDown',
		exit: 'animated fadeOutUp'
	},
	onShow: null,
	onShown: null,
	// onClose: function(){alert('the notification was closed!');},
	onClose: null,
	onClosed: null,
	icon_type: 'img',
	template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
		'<button type="button" aria-hidden="true" class="close" data-notify="dismiss">x</button>' +
		'<span data-notify="icon"></span> ' +
		'<span data-notify="title">{1}</span> ' +
		'<span data-notify="message">{2}</span>' +
		'<div class="progress" data-notify="progressbar">' +
			'<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
		'</div>' +
		'<a href="{3}" target="{4}" data-notify="url"></a>' +
	'</div>' 
});
</script>
<?php } ?>