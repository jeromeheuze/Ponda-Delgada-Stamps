<?php

include 'php-ofc-library/open-flash-chart.php';

$year = array();
$unused = array();
$used = array();
$year[] = '1944'; $unused[] = 1.50; $used[] = 1.50;
$year[] = '1947'; $unused[] = 1.50; $used[] = 1.50;
$year[] = '1948'; $unused[] = 1.50; $used[] = 1.50;
$year[] = '1952'; $unused[] = 1.50; $used[] = 1.50;
$year[] = '1956'; $unused[] = 2.00; $used[] = 2.00;
$year[] = '1958'; $unused[] = 2.00; $used[] = 2.00;
$year[] = '1965'; $unused[] = 3.25; $used[] = 3.00;
$year[] = '1969'; $unused[] = 3.50; $used[] = 3.00;
$year[] = '1987'; $unused[] = 10.00; $used[] = 8.00;
$year[] = '1992'; $unused[] = 10.50; $used[] = 8.50;
$year[] = '1996'; $unused[] = 10.50; $used[] = 8.50;
$year[] = '1999'; $unused[] = 11.00; $used[] = 6.50;
$year[] = '2005'; $unused[] = 11.00; $used[] = 9.00;
$year[] = '2007'; $unused[] = 11.00; $used[] = 9.00;
$year[] = '2008'; $unused[] = 11.00; $used[] = 9.00;
$year[] = '2009'; $unused[] = 11.00; $used[] = 9.00;
$year[] = '2010'; $unused[] = 11.00; $used[] = 9.00;
$year[] = '2011'; $unused[] = 11.00; $used[] = 9.00;

$title = new title( "Ponta Delgada - 80r" );


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
$y->set_range( 0, 11.25, 1 ); 

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