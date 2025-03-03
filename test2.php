<?php
$teamMembers = [
    // Founders
    // [
    //     "image" => "https://www.horizonarchitects.co.in/wp-content/uploads/2025/02/hemal-1024x682.jpg",
    //     "name" => "AR. HEMAL SHAH",
    //     "position" => "Founder",
    //     "department" => "Founders"
    // ],
    // [
    //     "image" => "https://www.horizonarchitects.co.in/wp-content/uploads/2024/11/Screenshot-2024-11-06-173144-e1730895092870.png",
    //     "name" => "AMITA SHAH",
    //     "position" => "Founder",
    //     "department" => "Founders"
    // ],

    // Design Team
    [
        "image" => "https://www.horizonarchitects.co.in/wp-content/uploads/2024/11/2-1-200x300.png",
        "name" => "AR. DHARMIK CHHABHAYIA",
        "position" => "Architect",
        "department" => "Design Team"
    ],
    [
        "image" => "https://www.horizonarchitects.co.in/wp-content/uploads/2024/11/3-200x300.png",
        "name" => "AR. NEHA DOSHI",
        "position" => "Architect",
        "department" => "Design Team"
    ],
    [
        "image" => "https://www.horizonarchitects.co.in/wp-content/uploads/2024/11/4-200x300.png",
        "name" => "AR. VRUTIKA GOHIL",
        "position" => "Architect",
        "department" => "Design Team"
    ],
    [
        "image" => "https://www.horizonarchitects.co.in/wp-content/uploads/2024/11/5-200x300.png",
        "name" => "AR. SIDDHARTH PATEL",
        "position" => "Architect",
        "department" => "Design Team"
    ],

    // Working Drawing Team
    [
        "image" => "https://www.horizonarchitects.co.in/wp-content/uploads/2024/11/23-200x300.png",
        "name" => "AR. ABHAY DIWALE",
        "position" => "Architect",
        "department" => "Working Drawing Team"
    ],
    [
        "image" => "https://www.horizonarchitects.co.in/wp-content/uploads/2024/11/24-200x300.png",
        "name" => "AR. ATHARVA TATKARE",
        "position" => "Architect",
        "department" => "Working Drawing Team"
    ],

    // Interior Design Team
    [
        "image" => "https://www.horizonarchitects.co.in/wp-content/uploads/2024/11/34-200x300.png",
        "name" => "DHARANA SHAH",
        "position" => "Interior Designer",
        "department" => "Interior Design Team"
    ],
    [
        "image" => "https://www.horizonarchitects.co.in/wp-content/uploads/2024/11/35-200x300.png",
        "name" => "DHWANI VAGHASIYA",
        "position" => "Interior Designer",
        "department" => "Interior Design Team"
    ],
    [
        "image" => "https://www.horizonarchitects.co.in/wp-content/uploads/2024/11/36-200x300.png",
        "name" => "GANESH PATNE",
        "position" => "Interior Designer",
        "department" => "Interior Design Team"
    ],

    // Department Heads
    [
        "image" => "https://www.horizonarchitects.co.in/wp-content/uploads/2024/11/37-200x300.png",
        "name" => "SUDHIR KANCHAN",
        "position" => "Head of Department",
        "department" => "Department Heads"
    ],
    [
        "image" => "https://www.horizonarchitects.co.in/wp-content/uploads/2024/11/38-200x300.png",
        "name" => "PRATIK HATHIWALA",
        "position" => "Head of Department",
        "department" => "Department Heads"
    ],
    [
        "image" => "https://www.horizonarchitects.co.in/wp-content/uploads/2024/11/39-200x300.png",
        "name" => "AR. VINAY KADAM",
        "position" => "Head of Department",
        "department" => "Department Heads"
    ],
    [
        "image" => "https://www.horizonarchitects.co.in/wp-content/uploads/2024/11/40-200x300.png",
        "name" => "HIREN CHOTALIYA",
        "position" => "Head of Department",
        "department" => "Department Heads"
    ],

    // Administration Department
    [
        "image" => "https://www.horizonarchitects.co.in/wp-content/uploads/2024/11/42-199x300.png",
        "name" => "SHEELA GOWDA",
        "position" => "Administrator",
        "department" => "Administration Department"
    ],
    [
        "image" => "https://www.horizonarchitects.co.in/wp-content/uploads/2024/11/43-208x300.png",
        "name" => "NAVNATH UTEKAR",
        "position" => "Administrator",
        "department" => "Administration Department"
    ],
    [
        "image" => "https://www.horizonarchitects.co.in/wp-content/uploads/2024/11/44-206x300.png",
        "name" => "MANOJ VARADELLI",
        "position" => "Administrator",
        "department" => "Administration Department"
    ],

    // Accounts Department
    [
        "image" => "https://www.horizonarchitects.co.in/wp-content/uploads/2024/11/45-203x300.png",
        "name" => "DEEPAK CHIKHALE",
        "position" => "Accountant",
        "department" => "Accounts Department"
    ]
];


$zip = new ZipArchive();
$zipFile = "team_images.zip";

if ($zip->open($zipFile, ZipArchive::CREATE | ZipArchive::OVERWRITE) === TRUE) {
    foreach ($teamMembers as $member) {
        $imageUrl = $member['image'];
        $imageName = basename($imageUrl);

        $imageData = file_get_contents($imageUrl);
        if ($imageData !== false) {
            $zip->addFromString($imageName, $imageData);
        }
    }
    $zip->close();

    // Force download
    header('Content-Type: application/zip');
    header('Content-Disposition: attachment; filename="' . $zipFile . '"');
    header('Content-Length: ' . filesize($zipFile));
    readfile($zipFile);

    // Delete the zip file after download
    unlink($zipFile);
} else {
    echo "Failed to create ZIP file!";
}
?>
