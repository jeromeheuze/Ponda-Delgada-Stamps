<?php
	include('dbc.php');
	$doc = new DOMDocument();
	$doc->load("http://www.ebay.com/csc/Portugal-Colonies-/4746/i.html?LH_PrefLoc=0&LH_Complete=1&rt=nc&_nkw=ponta+delgada&_catref=1&_dlg=1&_fsct=&_jgr=1&_rss=1&_sc=1&_sop=13");
	$title = "";
	$bids = "";
	date_default_timezone_set('PDT');
	$edateepoch = "";
	$price = "";
	$link = "";
	//echo "<ul>";
  	foreach ($doc->getElementsByTagName('item') as $node) {
		$title = $node->getElementsByTagName('title')->item(0)->nodeValue;
		echo $title;
		$bids = $node->getElementsByTagName('BidCount')->item(0)->nodeValue;
		echo $bids;
		$link = $node->getElementsByTagName('link')->item(0)->nodeValue;
		echo $link;
		$edateepoch = $node->getElementsByTagName('EndTime')->item(0)->nodeValue;
		$year = strftime('%Y', floor($edateepoch/1000));
		$month = strftime('%m', floor($edateepoch/1000));
		$day = strftime('%d', floor($edateepoch/1000));
		$price = $node->getElementsByTagName('CurrentPrice')->item(0)->nodeValue / 100;
		echo $price;
		/*if ($bids != "0") {
			echo $title." [".$bids."] - [".$month."/".$day."/".$year." PDT] - [".$price."] #### ACTION: ";
			$b4query = "SELECT epoch FROM ebay_list WHERE epoch=$edateepoch";
			$result = mysql_query($b4query);
			$num = mysql_num_rows($result);
			if ($num == 0) {
				$query = "INSERT INTO ebay_list VALUES ('','$title','$bids','$price','$month','$day','$year','$edateepoch', '$link')";
				mysql_query($query);
				echo "added\n";
			} else {
				echo "duplicate\n";
			}

		}*/
	}
	//echo "</ul>";
	mysql_close();
?>