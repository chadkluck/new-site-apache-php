<?php

$status = getStatus();

$pageTitle = "Hello, World!";
if ( $status !== 200 ) {
	$pageTitle = "Hmmm, that's a ".$status;
}

$site = $_SERVER['SERVER_NAME'];

function getStatus() {
	$s = intval(getenv("REDIRECT_STATUS"));
	
	if ($s === 0) {
		$s = 200;
	}
	
	return $s;
}

function isStatus($test) {
	return $test === getStatus();
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $pageTitle; ?></title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

	<body class="status<?php echo $status; ?>" >
		<style>
		
		/*
		 *************************************************************
		 * DEFAULT CSS FOR PLAIN PAGES
		 *************************************************************
		 Chad Kluck - https://chadkluck.net
			
		 Makes a single 800px (80rem) responsive column centered on 
		 the page with larger font
		 *************************************************************
		 */
		  
		html {
			font-size: 62.5%; /* http://snook.ca/archives/html_and_css/font-size-with-rem */
			/* at 62.5% 1.6rem is 16px, 1.2rem is 12px. Easy to calc relative to px */
		}

		body {
			font-size: 1.6rem; /* = 16px when html font-size: 62.5% */
		}

		html, body {
			width: 100%;
			height: 100%;
			margin: 0;
			padding: 0;
		}

		body > div {
			padding-right: 1.0rem;
			padding-left: 1.0rem;
			max-width: 80.0rem;
			margin-right: auto;
			margin-left: auto;
		}
		
		/* **********************************************************
		 * END DEFAULT CSS FOR PLAIN PAGES 
		 ************************************************************ */

			body {
				background-color: white;
				font-family: Gotham, "Helvetica Neue", Helvetica, Arial, "sans-serif";
			}
			
			body.status200 {
				
			}
		</style>
		<div>
			<h1><?php echo $pageTitle; ?></h1>
			
			<p>You have reached <?php echo $site; ?> but nothing more.</p>
			
			<?php
			
				// using if/else instead of switch/case on purpose
				if ( isStatus(200) ) {
					?>
					<p>Here's a picture of Snow White in a snow storm:</p>
					<div style="width:100%;height:20.0rem;max-width:30.0rem;max-height:20.0rem;border: 0.1rem solid #000000" title="Snow White in a snow storm. It's cold, the wind is blowing, the 7 dwarves are buried in a bank..."></div>
					<p>What, you were expecting more?</p>
					<p><a href="https://chadkluck.net">YES</a> <a href="https://diversion.chadkluck.net">NO</a></p>
					<?php
				} else if ( isStatus(404) ) {
					?>
					<p>Yeah, that thing you're looking for, well, it seems I can't find it. Have you tried calling it? That's what I do when I lose my dog and/or phone. And my children. And even my spouse. Sometimes they like to hide from me. Or pretend they don't know me. What were you looking for again?</p>
					<?php
				} else if ( isStatus(401) ) {
					?>
					<p>You're not on the list. And, no, Abraham and his two friends George Washington and George Washington aren't either.</p>
					<?php
				} else if ( isStatus(403) ) {
					?>
					<p>I'm afraid I can't do that.</p>
					<?php
				} else if ( isStatus(500) ) {
					?>
					<p>Internally, I don't feel so good. Too many hot dogs. Oh, I think I'm going to be sick&#151;</p>
					<?php
				} else {
					?>
					<p>You can't see me if I close my eyes.</p>
					<?php
				}
			?>
		
		</div>
	</body>
</html>