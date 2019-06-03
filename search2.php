<?php
//	echo "search page";

	// create A-Z array
	$az = range('A', 'Z');

/*
	foreach($arr AS $item){
		$output .= $prefix .$item.$suffix;    
	}
*/
//	$prefixed_array = preg_filter('/^/', '#', range('A', 'Z'));			// #A, #B, #C, #D, etc
	$cssIdrange =  implode (", ", preg_filter('/^/', '#', range('A', 'Z')));

	$str = implode (", ", $az);

	// create user list
	$user = array(
		array(
		"first"	=> "Lana",
		"last"	=> "Sijsling",
		"sex"	=> "female",
		'link'	=> "lana.html",
		),
		array(
		"first" => "Harriet",
		"last" => "Kiyai",
		"sex"	=> "female",
		'link'	=> "harriet.html",
		),
		array(
		"first" => "Lucien",
		"last" => "Koot",
		"sex"	=> "male",
		'link'	=> "lucien.html",
		),
		array(
		"first" => "Aarnoud",
		"last" => "Meijer",
		"sex"	=> "male",
		'link'	=> "aarnoud.html",
		)
	);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Zoeken op smoelenboek</title>
		<link href="/style.css" rel="stylesheet" type="text/css" media="all">
		<link href="/css/search.css" rel="stylesheet" type="text/css" media="all">

		<style>
			<?=$cssIdrange?> {
		/*		display: none; */
				width: 250px;
				color: black;
				border:1px solid #111;
				text-align: center;
				float:left;
			}

<?=$cssIdrange?>{display:none}
<?php foreach($az as $x){
	echo "#".$x.":target{display: block}\n";
}
?>

		ul {
			list-style: none;
			width:100%;
		}

		ul li {
			float:left;
			padding:.5em;
		}

		article{
			width:100%;
			float:left;
			padding:1em;
			background-color:#eee;
		}

		article a{
			color:#000;
			font-weight:bold;
			text-decoration:none;
		}

		.male, .female{
			padding:5px;
		}

		.off{opacity:.5;}

		div#male, div#female {
			width: 100px;
			padding:5px;
			margin: 5px 15px;
			float:left;
			border:1px solid #555;
		}

		a#back{
			float:right;
			margin:5px 15px;
		}

		header h1{
			float:left;
			margin: 1px 25px;
		}

/*
		#checkboxmen:checked ~ * .male {
			color: blue;
			opacity: 1;
		}

		#checkboxwomen:checked ~ * .female {
			color: red;
			opacity: 1;
		}
*/

		</style>

		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript">
			// $(document).ready(function(){
			$(function(){
				$("#male").click(function(){
					toggleState("#male");
					toggleState(".male");
				});

				$("#female").click(function(){
					toggleState("#female");
					toggleState(".female");
				});

				function toggleState(item){
					console.log( item );
					// hasClass
					if($(item).hasClass("off")){
						$(item).removeClass('off');
					}else{
						$(item).addClass('off');
					}
				}

			});
		</script>
	</head>
	<body>
		<header>
		  <h1>Zoeken op Smoelenboek</h1>
		  <a href="/index.html" id="back">terug</a>
		</header>

		<div id="male" class="off"> Men </div>
		<div id="female" class="off"> women </div>

		<ul>
<?php foreach($az as $x){
	echo "\t\t<li><a href='#".$x."'>".$x."</a></li>\n";//   "#".$x.":target{display: block}";
}
?>
		</ul>

		<article>
<?php
	// loop
	foreach($az as $x){
		// create all boxes
		echo "\t\t<div id='". $x . "'>"; //</div>\n";
		echo "<h1>". $x . "</h1>";
			foreach($user as $y){
				//  substr ( string $string , int $start [, int $length ] ) : string
				if(substr($y['first'], 0, 1) == $x || substr($y['last'], 0, 1) == $x){
					echo "\n\t<div>\n";
					echo "<a href='". $y['link'] . "' class='".$y['sex']." off'>";
					echo "\n\t\t".$y['first']." ".$y['last']."<br/>\n";
					echo "</a>";
					echo "</div>\n";
				}
			}
		echo"</div>\n";
	}
?>
		</article>


	</body>
</html>
