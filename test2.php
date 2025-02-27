<?php
$images = [


    // University Logos
    'https://www.onlinephdcourse.com/wp-content/themes/alfa-theme/assets/images/u-logo.png',
    'https://www.onlinephdcourse.com/wp-content/themes/alfa-theme/assets/images/u-logo1.jpg',
    'https://www.onlinephdcourse.com/wp-content/themes/alfa-theme/assets/images/u-logo2.jpg',
    'https://www.onlinephdcourse.com/wp-content/themes/alfa-theme/assets/images/u-logo3.jpg',
    'https://marketingexperts.in/projects/fasttrack/dynamic/assets/images/nmims.jpeg',
    'https://www.onlinephdcourse.com/wp-content/themes/alfa-theme/assets/images/u-logo6.jpg',
    'https://marketingexperts.in/projects/fasttrack/dynamic/assets/images/chandigarh-university.jpg',
    'https://marketingexperts.in/projects/fasttrack/dynamic/assets/images/bimtech.jpg',
    'https://marketingexperts.in/projects/fasttrack/dynamic/assets/images/amrita.jpg'
];

if (isset($_POST['download_all'])) {
    $zip = new ZipArchive();
    $zipFileName = "images.zip";

    if ($zip->open($zipFileName, ZipArchive::CREATE) === TRUE) {
        foreach ($images as $imageUrl) {
            $imageName = basename($imageUrl);
            $imageContent = file_get_contents($imageUrl);
            
            if ($imageContent !== false) {
                $zip->addFromString($imageName, $imageContent);
            }
        }
        $zip->close();

        // Force file download
        header('Content-Type: application/zip');
        header('Content-Disposition: attachment; filename="' . $zipFileName . '"');
        header('Content-Length: ' . filesize($zipFileName));
        readfile($zipFileName);
        
        // Remove the ZIP file after download
        unlink($zipFileName);
        exit;
    } else {
        echo "Failed to create ZIP file.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download All Images</title>
</head>
<body>
    <form method="post">
        <button type="submit" name="download_all">Download All Images</button>
    </form>
</body>
</html>
