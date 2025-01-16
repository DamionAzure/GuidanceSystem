<?php
// Load Composer's autoloader
require_once __DIR__ . '/../vendor/autoload.php'; // Adjust the path as needed
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Guidance</title>
        <link rel="stylesheet" href="../CSS/MStyle.css"> <!--Main Style Sheet for the Website-->
        <link rel="stylesheet" href="../CSS/BStyle.css"> <!--Button Style Sheet for the Website-->
        <link rel="stylesheet" href="../CSS/FStyle.css"> <!--Footer Style Sheet for the Website-->
        <link rel="stylesheet" href="../CSS/RStyle.css"> <!--Report Style Sheet for the Website-->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/htmx/1.9.12/htmx.min.js" integrity="sha512-JvpjarJlOl4sW26MnEb3IdSAcGdeTeOaAlu2gUZtfFrRgnChdzELOZKl0mN6ZvI0X+xiX5UMvxjK2Rx2z/fliw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
        <header>
            <div class="LContainer">
                <a id="logoLink" href="../HTMLphp/Redirect.html" onclick="return false;">
                    <img src="../CSS/2.png" alt="Logo" class="Logo">
                </a>
                <div class="LText">
                    <h4 class="LsText">Guidance</h4>
                    <p class="pLText">AU Jose Rizal Campus</p>
                </div>
                <div>
                    <h2 class="CurrentPage">Report</h2>
                </div>
            </div>
        </header>
    <?php include '../Functionphp/display_info.php'; ?>
        <main class="CBody">
            <div class="Info">
                <p>Student No: <?php echo $student_no; ?></p>
                <p>LRN: <?php echo $lrn; ?></p>
            </div>
            <div class="button-container">
                <ul class="button-list">
                    <li><a href="../HTMLphp/Report.php"><button>Report</button></a></li>
                    <li><a href="../HTMLphp/CC.php"><button>Current Cases</button></a></li>
                    <li><a href="../HTMLphp/Feedback.php"><button>Feedback</button></a></li>
                </ul>
            </div>
        </main>

    </head>

    <body class="body">
        
        <div class="Bg">
            <img src="../IMG/au-malabon-rizal.jpg" alt="Background Image">
        </div>

        <div class="container">
            <h1 class="h1">Reporting System</h1>
            <p class="instruction">Please Fill Out This Form Carefully</p>
            
            <form method="post" enctype="multipart/form-data">
                <input type="text" class="report-textbox" name="report">
                <div class="Office">
                    <h3>Please select the office where your report might be concerned</h2>
                        <input type="radio" name="office" id="OSA" value="OSA">
                        <label for="OSA">Office of Student Affairs</label><br>
                        <input type="radio" name="office" id="GO" value="GO">
                        <label for="GO">Guidance Office</label><br>
                        <input type="radio" name="office" id="Pr" value="Pr">
                        <label for="Pr">Prefect</label><br>
                </div>
                <label for="file-input" class="custom-file-input">Choose File</label>
                <input type="file" id="file-input" class="file-input" name="files[]" multiple accept="image/*, video/*">
                <div id="file-names">
                    <p class="PFN">Please Input All Files In One Session</p>
                </div>
                <button type="submit" class="submit-button" name="submit">Submit</button>
            </form>
<?php

require '../vendor/autoload.php'; // Include Composer's autoloader for libraries

use Endroid\QrCode\QrCode;
use Picqer\Barcode\BarcodeGeneratorPNG;
use Endroid\QrCode\Writer\PngWriter;

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_POST['submit'])) {
    // Sanitize and validate the report text
    $reportText = isset($_POST['report']) ? htmlspecialchars(trim($_POST['report'])) : '';

    // Sanitize and validate the office field
    $office = isset($_POST['office']) ? htmlspecialchars(trim($_POST['office'])) : 'Unspecified';

    // Handle file uploads safely
    $files = $_FILES['files'];

    // Validate inputs
    if (empty($reportText) && empty($files['name'][0])) {
        echo '<p>Error: Please fill out at least one field (report text or file).</p>';
        exit;
    }

    // Generate unique ticket details
    $ticketNumber = time() . rand(1000, 9999);
    $ticketNature = 'Report';
    $ticketDate = date('Y-m-d');
    $filename = "../Tickets/Ticket_{$ticketNumber}.php";

    // Prepare directory for uploaded files
    $uploadDir ="../UploadedFiles/{$ticketNumber}/";
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    if (!is_writable($uploadDir)) {
        echo "Upload directory is not writable.";
    }

    // Initialize uploaded files array
    $uploadedFiles = [];

    // Handle file uploads
    if (!empty($files['name'][0])) {
        foreach ($files['tmp_name'] as $key => $tmpName) {
            $originalName = $files['name'][$key];
            $fileExtension = strtolower(pathinfo($originalName, PATHINFO_EXTENSION));
            $filePath = $uploadDir . basename($originalName);

            // Ensure unique file names
            $fileCounter = 1;
            while (file_exists($filePath)) {
                $filePath = $uploadDir . pathinfo($originalName, PATHINFO_FILENAME) . "_{$fileCounter}." . pathinfo($originalName, PATHINFO_EXTENSION);
                $fileCounter++;
            }

            // Validate file extension
            $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif', 'pdf', 'docx']; // Add allowed extensions
            if (!in_array($fileExtension, $allowedExtensions)) {
                echo '<p>Error: Invalid file type uploaded.</p>';
                exit;
            }

            // Check for file size (max 10MB)
            if ($files['size'][$key] > 10485760) { // 10MB limit
                echo '<p>Error: File is too large. Maximum size is 10MB.</p>';
                 exit;
            }

            // Move the uploaded file
            if (move_uploaded_file($tmpName, $filePath)) {
                $uploadedFiles[] = $filePath;
            }
        }
    }

    // Flag for dependency availability
    $barcodeEnabled = class_exists('Picqer\Barcode\BarcodeGeneratorPNG');

    // Initialize the message for missing dependencies (optional)
    $missingDependenciesMessage = '';

    // Check if the BarcodeGeneratorPNG class exists before proceeding
    if (class_exists('Picqer\Barcode\BarcodeGeneratorPNG')) {
        // Generate barcode for ticket number
        try {
            $barcodeGenerator = new BarcodeGeneratorPNG();
            $barcode = $barcodeGenerator->getBarcode($ticketNumber, $barcodeGenerator::TYPE_CODE_128);
            $barcodePath = "{$uploadDir}barcode.png";
            file_put_contents($barcodePath, $barcode);
        } catch (Exception $e) {
            // Optionally, handle any exceptions during barcode generation
            echo "Error generating barcode: " . $e->getMessage();
        }
    } else {
        // Handle missing barcode dependency
        echo "Barcode generation is unavailable. Dependencies are missing.";
    }

    if (!empty($missingDependenciesMessage)) {
        echo $missingDependenciesMessage;  // Optionally show a message about the missing dependencies
    }

    // Continue with other ticket processing without stopping
    echo "Ticket processing continues as usual.";

    // Generate ticket content
    $uploadedFilesHTML = '';
    foreach ($uploadedFiles as $filePath) {
        $fileName = basename($filePath);
        $uploadedFilesHTML .= "<p><a href=\"../UploadedFiles/{$ticketNumber}/{$fileName}\" target=\"_blank\">View File: {$fileName}</a></p>";

        // Add preview for images
        $fileExtension = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));
        if (in_array($fileExtension, ['jpg', 'jpeg', 'png', 'gif'])) {
            $uploadedFilesHTML .= "<img src=\"../UploadedFiles/{$ticketNumber}/{$fileName}\" alt=\"Uploaded Image\" style=\"max-width: 200px; display: block; margin-bottom: 10px;\">";
        }
    }

    $htmlContent = "
    <?php include '../Partphp/RH.php'; ?>
    <h1>Ticket Details</h1>
    <p><strong>Ticket Number:</strong> $ticketNumber</p>
    <p><strong>Ticket Nature:</strong> $ticketNature</p>
    <p><strong>Date:</strong> $ticketDate</p>
    <p><strong>Office:</strong> $office</p>
    <p><strong>Report Text:</strong> $reportText</p>
    <h2>Uploaded Files</h2>
        $uploadedFilesHTML
    <h2>Ticket Barcode</h2>
    <img src=\"$barcodePath\" alt=\"Barcode\">
    <?php include '../Partphp/RF.php'; ?>
    ";

    // Save ticket file
    if (file_put_contents($filename, $htmlContent)) {
        // Save ticket info to registry
        $ticketRegistryFile = 'tickets.json';
        $newTicket = [
            'number' => $ticketNumber,
            'nature' => $ticketNature,
            'date' => $ticketDate,
            'office' => $office
        ];

        if (file_exists($ticketRegistryFile)) {
            $ticketData = json_decode(file_get_contents($ticketRegistryFile), true);
        } else {
            $ticketData = [];
        }

        $ticketData[] = $newTicket;
        file_put_contents($ticketRegistryFile, json_encode($ticketData));

        // Redirect to the ticket page
        header('Location: ' . $filename);
        exit;
    } else {
        echo '<p>Error saving the ticket. Please try again later.</p>';
        error_log("Error saving ticket: $filename");
        if (file_exists($filename)) {
            unlink($filename);
        }
    }
}
?>

        </div>
        <main class="Footer">
            <div class="FContainer">
                <div class="left-section">
                    <h3 class="About">About Us</h3>
                    <p class="AboutTxt">This website is designed to provide guidance and support to students in Arellano University Jose Rizal Campus </p>
                </div>
                <div class="middle-section">
                    <a id="logolink" href="https://www.arellano.edu.ph/" class="AUOS">
                        <img src="../CSS/LogoAU.png" alt="Logo" class="AU">
                    </a>
                </div>
                <div class="right-section">
                    <h3 class="Contact">Contact Us</h3>
                    <p class="Pcontact">Contact information goes here</p>
                </div>
            </div>
        </main>
        <script src="../Lib/jquery-3.7.1.js"></script>
        <script src="../Functionphp/Redirect.js"></script>
        <script src="../Functionphp/FileName.js"></script>
    </body>
</html>