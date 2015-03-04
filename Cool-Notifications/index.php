<!DOCTYPE html>
<html lang="en">
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="bootstrap.min.js"></script>
<script src="bootstrap-notify.min.js"></script>
<link href="bootstrap.css" rel="stylesheet">
<link href="animate.css" rel="stylesheet">


<!-- notification documentation http://bootstrap-notify.remabledesigns.com -->
<style>
[data-notify="progressbar"] {
	margin-bottom: 0px;
	position: absolute;
	bottom: 0px;
	left: 0px;
	width: 100%;
	height: 5px;
}
    .col-sm-3 {
        width: 25%;
    }
</style>
</head>
<body>

<p>This is the notifications page. This page will run an ajax call every 15 seconds to see if there's a notification available.</p>

<p>If there is a notification available it will return it in the response so it will show the notification in realtime on the page.</p>

<script>

	function nullFunction() {
      // do nothing
    }

	function ajax_redial(){
		$.post("ajax-call.php",
			{variable:"value"},
			function(data,status){
				// in here run an if statement where if status == success then run the function again
				// otherwise the script has failed so display an alert message that lets us know the script is not working and to try again
			
				// status callback responses are "success", "notmodified", "error", "timeout", or "parsererror"
				if (status == "success") {
					// wait 15 seconds for the code to think about what it's done, then execute the ajax cron again
					
					$("#content").html(data);
      				nullFunction();
					
					setTimeout(ajax_redial, 15000);
				}else{
					alert(status+ ' something bad happened');
				}
			}
		);	
	}
	ajax_redial();
</script>
			
<div id="content"></div>
</body>
</html>