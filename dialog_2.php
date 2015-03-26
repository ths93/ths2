
<!DOCTYPE html>
<html>
<head> 
	<title>Page Title</title> 
	<meta name="viewport" content="minimum-scale=1.0, width=device-width, maximum-scale=0.6667, user-scalable=no" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.js"></script>
	<style>
		html { overflow-y: scroll; /* always show scrollbar */ }
	</style>
</head>	

<body> 

<div data-role="dialog">
	
		<div data-role="header" data-theme="d">
			<h1>Dialog</h1>

		</div>

		<div data-role="content" data-theme="c">
			<h1>Delete page?</h1>
			<p>This is a regular page, styled as a dialog. To create a dialog, just link to a normal page and include a transition and <code>data-rel="dialog"</code> attribute.</p>
			<a href="#" data-role="button" data-rel="back" data-theme="b">Sounds good</a>       
			<a href="#" data-role="button" data-rel="back" data-theme="c">Cancel</a>    
		</div>
	</div>


</body>
</html>
