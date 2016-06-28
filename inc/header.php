<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $site_title ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php if($site_description != null) {echo $site_description;}?>">
        <meta name="author" content="Sven Harder | I-modich.de">
        <link rel="stylesheet" href="css/normalize.css">
        <link href='http://fonts.googleapis.com/css?family=Raleway:800|Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="jquery/jquery-ui.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <script src="jquery/external/jquery/jquery.js"></script>
        <script src="jquery/jquery-ui.js"></script>
        <script type="text/javascript" src="http://jquery-ui.googlecode.com/svn/tags/latest/ui/minified/i18n/jquery-ui-i18n.min.js"></script>
        <!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
        <script type="text/javascript">
          window.cookieconsent_options = {"message":"Diese Webseite verwendet Cookies, um Ihnen ein optimales Surf Erlebnis zu gewährleisten","dismiss":"Ay, ay, Käptn","learnMore":"Mehr Informationen","link":"http://fahrplan-langeoog.de/datenschutz.php","theme":"dark-bottom"};
        </script>

        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.9/cookieconsent.min.js"></script>
        <!-- End Cookie Consent plugin -->
    </head>
    <body>
        <?php include_once("inc/analyticstracking.php") ?>
        <header>
            <div id="header-wrapper">
                <a href="http://fahrplan-langeoog.de" id="logo">
                <table>
                    <tr>
                        <td><i class ="fa fa-anchor fa-4x" id="logoicon"></i></td>
                        <td><h1>Fahrplan <br />Langeoog</h1></td>
                    </tr>  
                </table>
                <h2>Abfahrten ab Langeoog und Bensersiel</h2>
                </a>
                <nav>
                    <ul>
                        <li><a href="langeoog.php" <?php if($site_title == "Fahrplan Langeoog"){echo "class='selected'";}?>>Langeoog</a></li>
                        <li><a href="bensersiel.php"<?php if($site_title == "Fahrplan Bensersiel"){echo "class='selected'";}?>>Bensersiel</a></li>
                    </ul>
                </nav>
            </div>
        </header>
    </body>
