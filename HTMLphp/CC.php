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
        <link rel="stylesheet" href="../CSS/TIStyle.css"> <!--Ticket Style Sheet for the Website-->
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/htmx/1.9.12/htmx.min.js" integrity="sha512-JvpjarJlOl4sW26MnEb3IdSAcGdeTeOaAlu2gUZtfFrRgnChdzELOZKl0mN6ZvI0X+xiX5UMvxjK2Rx2z/fliw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="..\Functionphp\TicketHandling.js"></script>

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
                    <h2 class="CurrentPage">Main</h2>
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
                    <li><a href="Report.php"><button>Report</button></a></li>
                    <li><a href="CC.php"><button>Current Cases</button></a></li>
                    <li><a href="Feedback.php"><button>Feedback</button></a></li>
                </ul>
            </div>
        </main>

    </head>

    <body>

        <div class="Bg">
            <img src="../IMG/au-malabon-rizal.jpg" alt="Background Image">
        </div>

        <article class="AUart">
            <div class="AUcont">
                <h2 class="AUText">Current Cases</h2>
                <p class="AUpText"> </p>
            </div>

            <h3>Search and Filter Tickets</h3>
            <form id="searchForm">
                <label for="ticketNumber">Ticket Number:</label>
                <input type="text" id="ticketNumber" placeholder="Enter Ticket Number" autocomplete="off">
                
                <label for="natureSearch">Nature:</label>
                <select id="natureSearch">
                    <option value="">All</option>
                    <option value="Bullying">Bullying</option>
                    <option value="Harassment">Harassment</option>
                    <option value="Discrimination">Discrimination</option>
                    <option value="Mental Health Concerns">Mental Health Concerns</option>
                    <option value="Academic Struggles">Academic Struggles</option>
                    <option value="Relationship Issues">Relationship Issues</option>
                </select>
                
                <label for="officeSearch">Office:</label>
                <select id="officeSearch">
                    <option value="">All</option>
                    <option value="OSA">Office of Student Affairs</option>
                    <option value="GO">Guidance Office</option>
                    <option value="Pr">Prefect</option>
                </select>
                
                <label for="dateSearch">Date:</label>
                <input type="date" id="dateSearch">
                
                <label for="incidentDateSearch">Incident Date:</label>
                <input type="date" id="incidentDateSearch">
            </form>

        <div id="Ticket-Container">

        </div>
        </article>

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
    </body>
</html>