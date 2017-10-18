<<<<<<< HEAD
<?php

require 'fpdf.php';

$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('helvetica','B', 8);
$pdf->SetTextColor(0, 0, 0);

$x = 2; $y=2; $row=1; $col=1;
for ($i=0; $i<=5; $i++)
{
    $pdf->Image($i.'.png', $x, $y);
    $temp_x = $x+15; $temp_y = $y+30;
    $pdf->SetXY($temp_x, $temp_y);
    $pdf->Write(0, $i);

    if (($i+1)%8 == 0)
    {
        $col += 1;

        if ($col > 6)
        {
            $col = 1;
            $pdf->AddPage();
            $x = 5; $y = 2;
        }
        else
            $x += 33; $y = 2;
    }
    else
    {
        $y += 33;
    }
}

$pdf->Output();
=======
<?php

require 'fpdf.php';

$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('helvetica','B', 8);
$pdf->SetTextColor(0, 0, 0);

$x = 2; $y=2; $row=1; $col=1;
for ($i=0; $i<=5; $i++)
{
    $pdf->Image($i.'.png', $x, $y);
    $temp_x = $x+15; $temp_y = $y+30;
    $pdf->SetXY($temp_x, $temp_y);
    $pdf->Write(0, $i);

    if (($i+1)%8 == 0)
    {
        $col += 1;

        if ($col > 6)
        {
            $col = 1;
            $pdf->AddPage();
            $x = 5; $y = 2;
        }
        else
            $x += 33; $y = 2;
    }
    else
    {
        $y += 33;
    }
}

$pdf->Output();
>>>>>>> fbe19222ece1a682b8feaa3d00689f3dc8ad3829
exit;