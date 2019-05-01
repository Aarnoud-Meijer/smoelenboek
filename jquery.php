<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>jQuery op smoelenboek</title>
		<link href="/style.css" rel="stylesheet" type="text/css" media="all">
		<link href="/css/search.css" rel="stylesheet" type="text/css" media="all">
		<script type="text/javascript" src="//code.jquery.com/jquery-3.4.0.slim.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript">
			$(function () {
				// Set our data for the post
				var post = {
					user: '....', // import php config
				};
			});
		</script>
		<style>
			header{
				width:100%;
				background-color:#eee;
				
			}
			
			article{
				border:1px solid #aaa;
			}

		</style>
	</head>
	<body>
		<header>Using jQuery to do the same thing</header>
		<article>
<?php
include('config.php');

?>
		</article>
		<footer></footer>
	</body>
</html>
