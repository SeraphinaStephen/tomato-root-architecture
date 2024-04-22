<!DOCTYPE html>
<html>
<head>
    <title>Tomato Root Architecture</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <div>
        <table class="header"><tr>
            <th class = "back-arrow"><a href="https://www.arjun-chandrasekhar-teaching.com"><h3 class="menu-button back-arrow">Exit</h3></a></th>
            <th class="sprout-image"><img src="Images/Sprout.png"></th>
            <th class="header-text">
                <h1 class="title">Tomato Root Architecture</h1> <br />
                <div class="menu">
                    <a href = "home.html"><h3 class="menu-button">Home</h3></a>
                    <a href = "about.html"><h3 class="menu-button">About</h3></a>
                    <a href = "help.html"><h3 class="menu-button">Help</h3></a>
            </th>
            <th class = "spacer"></th>
        </tr></table>
    </div>
    <div class="home-body">
        <table class="samples">
            <tr class="sample-titles">
                <th class="img-title" id="systemHeader">Original System</th>
                <th class="img-title" id="frontHeader">Pareto Front Curve Plot</th>
            </tr>
            <tr class="sample-images">
                <th><div class="graph"><iframe id="systemDisplay"></iframe></div></th>
                <th><div class="graph"><iframe id="paretoDisplay"></iframe></div></th>
            </tr>
        </table>


    <table class="samples">
        <tr>
            <input type="range" min="1" max="100" value="50" class="fileSlider" id="file-num">
        </tr>
        <tr>
            <td><form action="upload.php" method="post" enctype="multipart/form-data" name="test">
                <label for="testfileupload" class="big_button upload">
                    <input id="testfileupload" type="file" name="testingfileupload" onchange="this.form.submit();" />
                    Upload Again
                </label>
            </form></td>
            <td><form action="sample-upload.php" method="post">
                   <input class="big_button upload" type="submit" value="Reset to Original" />
                </form></td>
            <td><form action="sample-upload.php" method="post">
                   <input class="big_button upload" type="submit" value="Download Data" />
                </form></td>
        </tr>
    </table>
    </div>
    <div class="footer-bar">
        <h1 class="footer-text">Dev info here</h1>
    </div>
    <script>
        localStorage.setItem('baseFolder', "sampleInputData/");
        localStorage.setItem('uploadName', "065_3_S_day2");
    </script>
    <script src="slider.js"></script>
</body>
</html>