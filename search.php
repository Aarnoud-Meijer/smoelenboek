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
		),
		array(
		"first" => "Harriet",
		"last" => "Kiyai",
		"sex"	=> "female",
		),
		array(
		"first" => "Lucien",
		"last" => "Koot",
		"sex"	=> "male",
		),
		array(
		"first" => "Aarnoud",
		"last" => "Meijer",
		"sex"	=> "male",
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
		echo "\t\t<div id='". $x . "'>"; //</div>\n";
		echo "<h1>". $x . "</h1>";
			foreach($user as $y){
				//  substr ( string $string , int $start [, int $length ] ) : string
				if(substr($y['first'], 0, 1) == $x || substr($y['last'], 0, 1) == $x){
					echo "\n\t<div>\n";
					echo "\n\t\t".$y['first']." ".$y['last']."<br/>\n";
					echo "</div>\n";
				}
			//var_dump($x);
			}
		echo"</div>\n";
	}
?>
		</article>


	</body>
</html>
