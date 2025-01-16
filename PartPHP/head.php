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
                <h2 class="AUText">Guidance Office of AU JRC</h2>
                <p class="AUpText">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus dolores odit tempore illo ullam! Reprehenderit, similique omnis. Iusto, enim praesentium eum, eos sequi sapiente consectetur cumque velit veniam ipsam porro. Pellentesque ullamcorper euismod ligula, nec dignissim tellus euismod ac. Donec ut turpis non ex tempor faucibus ac sagittis erat. Duis ullamcorper ante id auctor fermentum. Vivamus odio ex, sagittis non dictum pretium, convallis ut elit. Vivamus nibh leo, mattis in scelerisque non, feugiat eu lorem. Suspendisse ante libero, varius in lobortis ut, efficitur sit amet lacus. Vestibulum mollis velit enim, eu congue odio euismod eu. Phasellus lacus neque, tincidunt eget euismod nec, luctus nec orci. Integer enim felis, gravida in lectus at, feugiat elementum odio. Vivamus scelerisque scelerisque lacus at fermentum. Nunc finibus pharetra ante varius suscipit. Etiam ultrices ligula at lacus accumsan, sit amet lacinia eros lacinia. Cras fermentum justo non malesuada cursus. Pellentesque egestas pharetra volutpat. Ut sed justo blandit, luctus tortor ac, dictum felis. Ut in ex ac erat fringilla porta ac sit amet eros. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In euismod, urna in iaculis tincidunt, ex ante feugiat nulla, sed molestie urna sem sed magna. Fusce dictum iaculis tortor, ac rhoncus elit gravida at. Vivamus id mollis dui. Quisque fermentum libero sit amet enim iaculis vulputate. Quisque nisi leo, dictum pharetra accumsan vel, placerat at diam. Donec et lacus sit amet lectus porta vulputate dignissim at purus. Praesent lacus sem, facilisis quis nibh ut, molestie tincidunt justo. Etiam pretium mauris a tristique tincidunt. Cras at imperdiet risus, et iaculis erat. Integer quis elit et turpis venenatis mollis. Praesent ut nulla consequat, laoreet nibh semper, ullamcorper mi. Sed fringilla varius metus, sed suscipit nibh tristique id. Duis vitae pretium nisl. Vivamus mauris odio, tempor quis diam ac, sodales feugiat ipsum. Sed in justo posuere, rhoncus quam sed, vestibulum arcu. Mauris nec ipsum sit amet massa aliquam vehicula ut non erat. Cras gravida purus ut luctus interdum. Phasellus vitae nibh nunc. Maecenas eget blandit magna. Quisque sit amet faucibus nisl. Nam pharetra iaculis ultrices. Aenean congue a risus eget ornare. Duis egestas odio finibus, varius urna vel, porta elit. Etiam viverra cursus risus eget bibendum. Maecenas in ornare nulla, et vestibulum quam. Suspendisse quis posuere ligula. Nam magna massa, vestibulum at efficitur eget, dictum id magna. Donec a velit et massa euismod pretium non nec nulla. Suspendisse sit amet sem nec lectus fringilla maximus vel ac velit. Nunc vehicula blandit sapien porttitor varius. Duis venenatis, nunc at blandit bibendum, purus elit dapibus sem, id elementum magna massa ut nisi. Cras dictum sodales libero pulvinar maximus. Duis auctor sodales mi, ultricies mollis ligula aliquam eget. Vivamus faucibus erat id dolor efficitur, eget semper ante pharetra. Sed suscipit viverra justo, at tristique mi auctor non. Curabitur efficitur arcu nisi, sit amet blandit enim viverra ut. Sed sed leo ipsum. Duis ac rhoncus ligula, ultricies sodales dui. Etiam quis quam dolor. Nullam vulputate varius felis, a elementum purus congue lobortis.</p>
                <p class="AUpText">Vivamus eget felis a ipsum efficitur tincidunt non semper turpis. Integer et eros pulvinar, posuere lacus ut, rhoncus leo. Aliquam dictum vitae mi vel luctus. Sed porta, lectus eu pellentesque gravida, justo nisi ullamcorper orci, id posuere tortor tellus eget urna. Etiam hendrerit nisl nec mauris auctor, imperdiet semper libero malesuada. Vestibulum maximus velit sit amet accumsan ornare. Praesent ut semper metus, sed convallis justo.</p>
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