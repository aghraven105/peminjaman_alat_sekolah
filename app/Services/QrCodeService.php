<?php

namespace App\Services;

use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

class QrCodeService
{
    private $qrCode;

    public function __construct($text)
    {
        $this->qrCode = new QrCode($text);
    }

    public function generate()
    {
        $writer = new PngWriter();
        $result = $writer->write($this->qrCode);

        // Save the QR code to a file
        $result->saveToFile('path/to/qr-code.png');

        return $result->getDataUri();
    }
}