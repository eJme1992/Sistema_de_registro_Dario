<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class correo extends Model
{


$pdf = App::make('dompdf.wrapper');
$pdf->loadHTML(utf8_decode($html));
$mipdf= $pdf->output();
file_put_contents($filename, $pdf); 
}
