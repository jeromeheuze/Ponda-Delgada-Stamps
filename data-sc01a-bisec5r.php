<?php

include 'php-ofc-library/open-flash-chart.php';

$year = array();
$used = array();
$year[] = '1944'; $used[] = 0;
$year[] = '1947'; $used[] = 0;
$year[] = '1948'; $used[] = 0;
$year[] = '1952'; $used[] = 0;
$year[] = '1956'; $used[] = 0;
$year[] = '1958'; $used[] = 0;
$year[] = '1965'; $used[] = 0;
$year[] = '1969'; $used[] = 0;
$year[] = '1987'; $used[] = 2.50;
$year[] = '1992'; $used[] = 2.50;
$year[] = '1996'; $used[] = 2.50;
$year[] = '1999'; $used[] = 17.50;
$year[] = '2005'; $used[] = 17.50;
$year[] = '2007'; $used[] = 17.50;
$year[] = '2008'; $used[] = 17.50;
$year[] = '2009'; $used[] = 17.50;
$year[] = '2010'; $used[] = 17.50;
$year[] = '2011'; $used[] = 17.50;

$title = new title( "Ponta Delgada - Bisec 5r on paper" );


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
$y->set_range( 0, 18, 1 ); 

$chart = new open_flash_chart();
$chart->set_title( $title );
$chart->set_bg_colour( '#FFFFFF' );
$chart->set_y_axis( $y );
$chart->set_x_axis( $x );
$chart->set_y_legend( $y_legend );

$chart->add_element( $line_hollow );

echo $chart->toPrettyString();


?>