<?php
//	echo "search page";

	// create A-Z array
	$az = range('A', 'Z');

/*
	foreach($arr AS $item){
		$output .= $prefix .$item.$suffix;    
	}
*/
//	$prefixed_array = preg_filter('/^/', '#', range('A', 'Z'));
	$cssIdrange =  implode (", ", preg_filter('/^/', '#', range('A', 'Z')));	// #A, #B, #C, #D, etc

	$str = implode (", ", $az);

	// create user list
	$user = array(
		[0] => array(
		"first" => "Lana",
		"last" => "Sijsling"
		),
		[1] => array(
		"fisrt" => "Harriet",
		"last" => "Kiyai",
		),
		[2] => array(
		"first" => "Lucien",
		"last" => "Koot",
		),
		[3] => array(
		"fisrt" => "Aarnoud",
		"last" => "Meijer",
		)
	);

// var_dump ($user);

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
				width: 25px;
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

		</style>
	</head>
	<body>
		<header>
		  <h1>Zoeken op Smoelenboek</h1>
		  <a href="/index.html" id="back">terug</a>
		</header>

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
		//var_dump $x;
		echo "\t\t<div id='". $x . "'>".$x."</div>\n";
	}
?>
		</article>


	</body>
</html>

