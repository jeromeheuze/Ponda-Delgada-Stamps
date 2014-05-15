<?php
include 'php-ofc-library/open-flash-chart.php';

$year = array();
$unused = array();
$used = array();
$year[] = '1944'; $unused[] = 4.00; $used[] = 4.00;
$year[] = '1947'; $unused[] = 4.00; $used[] = 4.00;
$year[] = '1948'; $unused[] = 4.00; $used[] = 4.00;
$year[] = '1952'; $unused[] = 4.00; $used[] = 4.00;
$year[] = '1956'; $unused[] = 5.00; $used[] = 5.00;
$year[] = '1958'; $unused[] = 7.50; $used[] = 6.50;
$year[] = '1965'; $unused[] = 12.00; $used[] = 10.00;
$year[] = '1969'; $unused[] = 15.00; $used[] = 13.50;
$year[] = '1987'; $unused[] = 35.00; $used[] = 30.00;
$year[] = '1992'; $unused[] = 35.00; $used[] = 30.00;
$year[] = '1996'; $unused[] = 35.00; $used[] = 30.00;
$year[] = '1999'; $unused[] = 62.50; $used[] = 30.00;
$year[] = '2005'; $unused[] = 70.00; $used[] = 32.50;
$year[] = '2007'; $unused[] = 70.00; $used[] = 32.50;
$year[] = '2008'; $unused[] = 70.00; $used[] = 32.50;
$year[] = '2009'; $unused[] = 40.00; $used[] = 30.00;
$year[] = '2010'; $unused[] = 30.00; $used[] = 30.00;
$year[] = '2011'; $unused[] = 30.00; $used[] = 30.00;


$title = new title( "Ponta Delgada - 150r" );





$line_dot = new line_dot();

$line_dot->set_width( 4 );

$line_dot->set_colour( '#DFC329' );

$line_dot->set_dot_size( 5 );

$line_dot->set_values( $unused );

$line_dot->set_key( 'Unused Value', 12 );



$line_hollow = new line_hollow();

$line_hollow->set_colour( '#6363AC' );

$line_hollow->set_values( $used );

$line_hollow->set_halo_size( 1 );

$line_hollow->set_width( 6 );

$line_hollow->set_dot_size( 4 );

$line_hollow->set_key( 'Used Value', 12 );





$x = new x_axis();

$x->set_colour( '#009900' );

$x->set_grid_colour( '#cccccc' );

$x->set_steps( 1 );

$x->set_labels_from_array( $year );





$y_legend = new y_legend( 'Amount in US$' );

$y_legend->set_style( '{font-size: 22px; color: #778877}' );

$y = new y_axis();

$y->set_colour( '#009900' );

$y->set_grid_colour( '#cccccc' );

$y->set_range( 3.50, 75, 10 ); 



$chart = new open_flash_chart();

$chart->set_title( $title );

$chart->set_bg_colour( '#FFFFFF' );

$chart->set_y_axis( $y );

$chart->set_x_axis( $x );

$chart->set_y_legend( $y_legend );



$chart->add_element( $line_dot );

$chart->add_element( $line_hollow );



echo $chart->toPrettyString();





?>