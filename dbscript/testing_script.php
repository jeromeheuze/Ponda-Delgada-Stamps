<?php 
include_once('simple_html_dom.php');
include('dbc.php');
$html = file_get_html('http://www.delcampe.net/list.php?submitted=Y&page=1&submitted=Y&page=1&language=E&page=1&cat=14311&page=1&sessionToken=sslLogin_045f322cac29d215b7cca2a92f5b0c4c&page=1&listitemsperpage=500&startedtodaynorenewval_dd=28&endingtodayval_hh=24&action=completed&completed_sold=Y&sort=id_enchere_DESC&listtype=gallery_Y_big&listitemsperpage=500&sale_type=sale_type_all&min_price=&max_price=&price_currency=USD&payment_method=payment_method_all&location_continent_select=NAM&location=location_country&location_country_select=US');


// grabs
echo "<ol>";
foreach($html->find('td.itemsListingList table table tr') as $a) {
	$title = $a->find('td.txt0108 a.a0409', 0)->innertext;
	$link = "http://www.delcampe.net/".$a->find('td.txt0108 a.a0409', 0)->href;
	$price = $a->find('td.txt0108 a span', 0)->innertext;
	$bids = $a->find('td.txt0108 span', 0)->innertext;
	$auctionid = $a->find('td.txt0108 span.txt0607', 0)->innertext;
	/*$month = "none";
	$day = "none";
	$year = date("Y");*/
	$fulldate = $a->find('td.txt0108 span.txt0607 span', 0)->innertext;
	if ($title != '') {
		
		echo "<li>".$title."<br />".$link."<br />".$price."<br />".$auctionid."<br />".$fulldate."<br />### ACTION: </li>";
		/*$bquery = "SELECT * FROM stampwants_list WHERE url='".$link."'";
		$result = mysql_query($bquery);// or die("Error: ". mysql_error(). " with query ". $bquery);
		$num_rows = mysql_num_rows($result);

		if ($num_rows == 0) {
			$query = "INSERT INTO stampwants_list VALUES ('','$title','$bids','$price','$auctionid','$fulldate', '$link')";
			mysql_query($query);
			echo "added</li>";
		} else {
			echo "duplicate</li>";
		}*/
	} //end if empty
}
echo "</ol>";
mysql_close();
?>