<?php

$services = [
    [
        "title" => "Architecture Design",
        "description" => "We offer holistic design services including architecture, interior design, site design, planning, and feasibility services.",
        "image" => "icon2-4-2.png"
    ],
    [
        "title" => "Urban Design",
        "description" => "Expertise on shaping character of the neighborhood, connecting places and people.",
        "image" => "icon1-4-2.png"
    ],
    [
        "title" => "Master Planning",
        "description" => "Specially skilled in planning, designing and construction of building projects. Development and implementation of master plans and layouts.",
        "image" => "icon3-4-2.png"
    ],
    [
        "title" => "Institutional",
        "description" => "Expertise in designing immersive institutional experiences integrating technology and various construction methods.",
        "image" => "icon4-2-2.png"
    ],
    [
        "title" => "Hospitality",
        "description" => "Designing and conceptualizing bespoke spaces that communicate a brand's message and curating a memorable space for the consumers.",
        "image" => "icon5-2-2.png"
    ],
    [
        "title" => "Interior Design",
        "description" => "Conceptualizing, creating and executing the interior environment that directly impacts the well-being of the consumers.",
        "image" => "icon6-2-2.png"
    ],
    [
        "title" => "Vastu Consultancy",
        "description" => "Fostering a connection between the science of construction and vedics with the design, we promote blissful living.",
        "image" => "icon2-4-2.png"
    ],
    [
        "title" => "Peer Review",
        "description" => "Consultancy, review, problem-solving of plans and designs is our forte.",
        "image" => "icon1-4-2.png"
    ],
    [
        "title" => "Landscape Design",
        "description" => "Advisory and expertise on the design, planning and creation of recreational spaces.",
        "image" => "icon3-4-2.png"
    ]
];


if (isset($_GET['download'])) {
    $zip = new ZipArchive();
    $zipFile = "images.zip";
    
    if ($zip->open($zipFile, ZipArchive::CREATE) === TRUE) {
        foreach ($services as $service) {
            $imageUrl = $service['image'];
            $imageData = file_get_contents($imageUrl);
            $imageName = basename($imageUrl);
            $zip->addFromString($imageName, $imageData);
        }
        $zip->close();
    }
    
    header('Content-Type: application/zip');
    header('Content-Disposition: attachment; filename="' . $zipFile . '"');
    header('Content-Length: ' . filesize($zipFile));
    readfile($zipFile);
    unlink($zipFile);
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Images</title>
</head>
<body>
    <h2>Image Gallery</h2>
    <div>
        <?php foreach ($services as $service): ?>
            <div style="display:inline-block; margin: 10px; text-align: center;">
                <img src="<?= $service['image']; ?>" alt="<?= $service['title']; ?>" width="100"><br>
                <a href="<?= $service['image']; ?>" download>Download</a>
            </div>
        <?php endforeach; ?>
    </div>
    <br>
    <a href="?download=true"><button>Download All Images</button></a>
</body>
</html>