<?php

session_start();

require_once ("./includes/startTemplate.inc.php");
require_once ("./klassen/Klemmbausteine.inc.php");
require_once ("./klassen/Sicherheit.inc.php");
require_once ("./klassen/DbFunctions.inc.php");
require_once ("./klassen/TCPDF/tcpdf.php");
require_once ("./klassen/SVGGraph/autoloader.php");

DEFINE("MIN_GRENZE_STEINE", 1);
DEFINE("MAX_GRENZE_STEINE", 10000);
DEFINE("PATH_AND_FILENAME", "images/graph.svg");
DEFINE("ENCODING", "UTF-8");

$PHP_SELF = $_SERVER ['PHP_SELF'];
$REQUEST_METHOD = $_SERVER ['REQUEST_METHOD'];

$link = DbFunctions::connectWithDatabase();

$ueberschrift="Klemmbausteinefilter";
$smarty->assign("ueberschrift", $ueberschrift);

$themen=Klemmbausteine::holeThemen($link);

if (! ($REQUEST_METHOD == "POST"))
{       
    
    if(!isset($_SESSION["csrfToken"]))
    {
        $_SESSION["csrfToken"] = bin2hex(random_bytes(64));
    }
    $smarty->assign ( 'MIN_GRENZE_STEINE', MIN_GRENZE_STEINE);
    $smarty->assign ( 'MAX_GRENZE_STEINE', MAX_GRENZE_STEINE);
    $smarty->assign ( 'csrfToken', $_SESSION["csrfToken"]);    
	$smarty->assign ( 'PHP_SELF', $PHP_SELF );		
	$smarty->assign ( 'themen', $themen );
} 
else
{
    if(!isset($_POST["csrfToken"])||!isset($_SESSION["csrfToken"])||$_POST["csrfToken"] != $_SESSION["csrfToken"])
    {
        unset($_SESSION["csrfToken"]);
        die("CSRF Token ungültig!");
    }
    
    
    $themenNr = $_POST ['themenNr'];
    $teileMin = $_POST ['teileMin'];
    $teileMax = $_POST ['teileMax'];
    $alter = DbFunctions::escape($link, trim( $_POST ['alter'] ));
	$pdf = isset ( $_POST ['pdf'] );
	

	$correct = Sicherheit::isCorrectNumericalString($themenNr);
	$correct = $correct && Sicherheit::isCorrectAnzahl($teileMin, $teileMax);
	$correct = $correct && Sicherheit::isNumericalinBoundary($teileMin, MIN_GRENZE_STEINE, MAX_GRENZE_STEINE);
	$correct = $correct && Sicherheit::isNumericalinBoundary($teileMax, MIN_GRENZE_STEINE, MAX_GRENZE_STEINE);
	
	if (! $correct)
	{
	    $smarty->assign ( 'fehler', true );
	}
	else
	{	
	    $themenNrUndAnzahl=Klemmbausteine::holeThemenNrUndAnzahl($link, $themenNr, $alter, $teileMin, $teileMax);
	    if ($themenNrUndAnzahl == ''){
	        $smarty->assign ( 'keintreffer', true );
	    }
	    else {
	        $treffer = count($themenNrUndAnzahl);
	        $trefferMax = max($themenNrUndAnzahl);
	        $trefferMin = min($themenNrUndAnzahl);

	        $ausgabeText1="Kategorie $themen[$themenNr] mit der Altersfreigabe ab $alter Jahren sowie mindestens $teileMin und maximal $teileMax Teilen.";
	        $ausgabeText2="Die Suche enthält $treffer Einträge.";
	        $ausgabeText3="Die meisten Teile sind $trefferMax Stück, die wenigsten Teile sind $trefferMin Stück.";
	        
	       
	        $settings = array(
	            #'auto_fit' => true,
	            #'back_colour' => '#eee',
	            #'back_stroke_width' => 0,
	            #'back_stroke_colour' => '#eee',
	            #'stroke_colour' => '#000',
	            #'axis_colour' => '#333',
	            #'axis_overlap' => 2,
	            #'grid_colour' => '#666',
	            #'label_colour' => '#000',
	            #'axis_font' => 'Arial',
	            #'axis_font_size' => 10,
	            #'pad_right' => 20,
	            #'pad_left' => 20,
	            #'link_base' => '/',
	            #'link_target' => '_top',
	            #'project_angle' => 45,
	            #'minimum_grid_spacing' => 20,
	            #'show_label_amount' => true,
	            #'show_subdivisions' => true,
	            #'show_grid_subdivisions' => true,
	            #'grid_subdivision_colour' => '#ccc',
	        );
	        $width = 700;
	        $height = 300;
	        $type = 'Pie3DGraph';
	        $colours = [ ['yellow'], ['white'], ['violet'], ['green'] ];
	        
	        $graph = new Goat1000\SVGGraph\SVGGraph($width, $height, $settings);
	        $graph->colours($colours);
	        $graph->values($themenNrUndAnzahl);
	        $output=$graph->fetch($type);
	        file_put_contents(PATH_AND_FILENAME, $output);
	        
	        if ($pdf)
	        {
	            $xTextStart=10;
	            $pdf=new TCPDF();
	            $pdf->AddPage();
	            $pdf->SetFont('Helvetica', "b", 14);
	            $pdf->SetXY($xTextStart, 20);
	            $pdf->Cell(16, 3, mb_convert_encoding($ueberschrift, ENCODING));
	            $pdf->ImageSVG(PATH_AND_FILENAME,$xTextStart,30, 170);
	            $pdf->SetFont('Helvetica', "", 10);
	            $pdf->SetXY($xTextStart, 120);
	            $pdf->Cell(16, 3, mb_convert_encoding($ausgabeText1, ENCODING));;
	            $pdf->SetXY($xTextStart, 125);
	            $pdf->Cell(16, 3, mb_convert_encoding($ausgabeText2, ENCODING));
	            $pdf->SetXY($xTextStart, 130);
	            $pdf->Cell(16, 3, mb_convert_encoding($ausgabeText3, ENCODING));
	            
	            $pdf->Output();
	            exit();
	       }
	       
	       $smarty->assign ( 'ausgabeText1', $ausgabeText1);
	       $smarty->assign ( 'ausgabeText2', $ausgabeText2);
	       $smarty->assign ( 'ausgabeText3', $ausgabeText3);
	       $smarty->assign ( 'PATH_AND_FILENAME', PATH_AND_FILENAME);
	   
        }

	}
}
$smarty->display ( 'meine.tpl' );
?>