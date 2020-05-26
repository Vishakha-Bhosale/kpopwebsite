
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css"/>
    </head>
    <body>
        <div id="wrapper">
            <div id ="banner">
                <p><b>WELCOME TO MY WEBSITE.</b></p>
            </div>
            <nav id="navigation">
                <ul id="nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="bts.php">K-pop Groups</a></li>
                    <li><a href="photos.html">Photos</a></li>
                    <li><a href="About.html">About</a></li>
            </nav>
            <div id="content area">
                <?php echo $content;?>
            </div>
<!--            <div id="sidebar">
                
            </div>-->
        </div>
            <footer>
                <p>All Rights Reserved.</p>
            </footer>
        
        
        
    </body>
</html>
