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
        <?php include '../Functionphp/TicketMaker.php'?>
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
            <h3>Please select the date of the incident:</h3>
            <label for="incidentDate">Incident Date:</label>
            <input type="date" id="incidentDate" name="incidentDate" required>
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
                <div class="Nature">
                    <h3>Please select the office where your report might be concerned</h2>
                        <input type="radio" name="nature" id="Bullying" value="Bullying">
                        <label for="Bullying">Bullying</label><br>
                        <input type="radio" name="nature" id="Harassment" value="Harassment">
                        <label for="Harassment">Harassment</label><br>
                        <input type="radio" name="nature" id="Discrimination" value="Discrimination">
                        <label for="Discrimination">Discrimination</label><br>
                        <input type="radio" name="nature" id="MHC" value="Mental Health Concerns">
                        <label for="MHC">Mental Health Concerns</label><br>
                        <input type="radio" name="nature" id="AS" value="Academic Struggles">
                        <label for="AS">Academic Struggles</label><br>
                        <input type="radio" name="nature" id="RI" value="Relationship Issues">
                        <label for="RI">Relationship Issues</label><br>
                </div>
                <label for="file-input" class="custom-file-input">Choose File</label>
                <input type="file" id="file-input" class="file-input" name="files[]" multiple accept="image/*, video/*">
                <div id="file-names">
                    <p class="PFN">Please Input All Files In One Session</p>
                </div>
                <button type="submit" class="submit-button" name="submit">Submit</button>
            </form>
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