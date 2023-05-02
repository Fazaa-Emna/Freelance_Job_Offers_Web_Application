<?php
namespace App\Services;
use Endroid\QrCode\QrCode;

class QRCodeService
{
public function generateQRCode(string $text): QrCode
{
$qrCode = new QrCode($text);

return $qrCode;
}

}
