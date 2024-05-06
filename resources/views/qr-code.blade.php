<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code</title>
</head>
<body>
    <h1>QR Code Generator</h1>

    {{-- Replace 'latitude' and 'longitude' with actual coordinates --}}
    <img src="{{ route('qr-code.generate') }} alt="QR Code">

    <p>Scan the QR code above to view the location on Google Maps.</p>
</body>
</html>
