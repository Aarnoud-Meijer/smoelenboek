<!DOCTYPE html>
<html>
	<head>
		<base href="/" />
		<meta charset="UTF-8">
		<title>jQuery op smoelenboek</title>
		<link href="/style.css" rel="stylesheet" type="text/css" media="all">
		<link href="/css/search.css" rel="stylesheet" type="text/css" media="all">
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript">
			//onDocument.ready(){
			$(function () {
				// Set our data for the post
				var user = {
					name: '....', // import php config
				};
				
				
				azCap = new Array( 26 ).fill( 1 ).map( ( _, i ) => String.fromCharCode( 65 + i ) );
				// az = new Array( 26 ).fill( 1 ).map( ( _, i ) => String.fromCharCode( 97 + i ) );
				// Use 97 instead of 65 to get the lowercase letters
				
				console.log(azCap);
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
