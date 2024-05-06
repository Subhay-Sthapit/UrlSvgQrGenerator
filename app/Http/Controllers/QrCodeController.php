<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Spatie\Browsershot\Browsershot;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodeController extends Controller
{
    public function generateQrCode(Request $request)
    {
        // url should be like: http://your-domain.com/qr-code?link=https://example.com
        // Validate the incoming request to ensure it has the required input
        $request->validate([
            'link' => 'required|url',
        ]);

        // Get the link from the query parameters
        $googleMapsLink = $request->query('link');

        // Generate QR Code as SVG (not using SimpleSoftwareIO\QrCode\Facades\QrCode here)
        $qrCode = QrCode::size(1000)->generate($googleMapsLink);

        return response($qrCode, 200, ['Content-Type' => 'image/svg+xml']);
    }
}






