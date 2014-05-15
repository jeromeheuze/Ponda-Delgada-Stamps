<?php 
include_once('simple_html_dom.php');
include('dbc.php');
$html = file_get_html('http://stampwants-stamps.bidstart.com/Ponta-Delgada-/2898/c.html?keywords=&closed=1&viewSize=noimages');


// grabs
//echo "<ol>";
foreach($html->find('div.disp') as $a) {
	$title = htmlentities($a->find('div.disp_itemname a', 0)->innertext);
	$link = htmlentities($a->find('div.disp_itemname a', 0)->href);
	$price = htmlentities($a->find('div.disp_price', 0)->innertext);
	$bids = "none";
	$month = "none";
	$day = "none";
	$year = date("Y");
	$edateepoch = "none";
	if ($title != '') {
		//echo "<li>".$title."<br />".$link."<br />".$price." ### ACTION: ";
		echo $title." - ".$link." - ".$price." ### ACTION: ";
		$bquery = "SELECT * FROM stampwants_list WHERE url='".$link."'";
		$result = mysql_query($bquery);// or die("Error: ". mysql_error(). " with query ". $bquery);
		$num_rows = mysql_num_rows($result);

		if ($num_rows == 0) {
			$query = "INSERT INTO stampwants_list VALUES ('','$title','$bids','$price','$month','$day','$year','$edateepoch', '$link')";
			mysql_query($query);
			echo "added\n";
		} else {
			echo "duplicate\n";
		}
	} //end if empty
}
//echo "</ol>";
mysql_close();
?>