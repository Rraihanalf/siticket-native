<?php
require('../fpdf184/fpdf.php');
$pdf = new FPDF('L', 'mm', 'A4');
$pdf->SetLeftMargin(20);
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(0, 10, 'LAPORAN DATA TICKET', 0, 10, 'C');
$pdf->Cell(10, 7, '', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(10, 8, 'No', 1, 0, 'C');
$pdf->Cell(30, 8, 'Nama Pelapor', 1, 0, 'C');
$pdf->Cell(50, 8, 'Email', 1, 0, 'C');
$pdf->Cell(40, 8, 'Sektor', 1, 0, 'C');
$pdf->Cell(80, 8, 'Keluhan', 1, 0, 'C');
$pdf->Cell(25, 8, 'Tanggal', 1, 0, 'C');
$pdf->Cell(25, 8, 'Keterangan', 1, 0, 'C');
$pdf->SetFont('Arial', '', 10);
$pdf->Ln();
include '../connection.php';
$no = 1;
$keterangan = '';
$result = mysqli_query($con, "SELECT * FROM ticket");
while ($data = mysqli_fetch_array($result)) {
  $pdf->Cell(10, 8, $no++, 1, 0, 'C');
  $pdf->Cell(30, 8, $data['nama_pelapor'], 1, 0, );
  $pdf->Cell(50, 8, $data['email'], 1, 0);
  $pdf->Cell(40, 8, $data['sektor'], 1, 0, 'C');
  $pdf->Cell(80, 8, $data['keluhan'], 1, 0, );
  $pdf->Cell(25, 8, $data['tanggal_pelaporan'], 1, 0, 'C');
  $pdf->Cell(25, 8, $data['keterangan'], 1, 0, 'C');
  $pdf->Ln();
}
$pdf->Output();