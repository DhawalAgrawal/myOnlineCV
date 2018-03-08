<?php include('config.php'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="My online CV">
<meta property="og:image" content="http://dhawalagrawal.decoder.co.in/IMAGES/mylogo.jpg">
<meta property="og:description" content="My online CV">
<meta property="og:url" content="http://www.dhawalagrawal.decoder.co.in" />
<meta property="og:title" content="Dhawal Agrawal" />



<meta property="og:type" content="article" />
<meta name="viewport" content="width=device-width,initial-scale=1.0" />

<title>Dhawal Agrawal</title>

<link rel="icon" href="IMAGES/mylogo.ico" type="image/x-icon"/>
<link rel="shortcut icon" href="IMAGES/mylogo.ico" type="image/x-icon"/>
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato|Raleway" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link href="css/vit-gallery.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/styl.css">
    <link rel="stylesheet" type="text/css" href="css/color.css">
<script defer src="fontawesome-free-5.0.6/svg-with-js/js/fontawesome-all.js"></script>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    

<script  type="text/javascript">
$(document).ready(function() {
    var $window = $(window);

        // Function to handle changes to style classes based on window width
        function checkWidth() {
        if ($window.width() < 720) {
            //$('#sec').removeClass('sections').addClass('cont');
			$('#con').load('mobile.php');
            };

        if ($window.width() >= 720) {
            $('#con').load('web.php');
        }
    }

    // Execute on load
    checkWidth();

    // Bind event listener
        $(window).resize(checkWidth);
});</script>

<style>


#gallery a .tooltiptext {
    visibility: hidden;
    width: auto;
    background-color: #000000;
    color: #fff;
    text-align: center;
    padding: 5px 10px;
    font-size: 13px;
    border-radius: 6px;
    position: absolute;
    font-family: 'Roboto Condensed', sans-serif;
    z-index: 1;
    left: 50%;
    top: 40%;
}

#gallery a:hover .tooltiptext {
    visibility: visible;
}
</style>
</head>

<body>

<div id="con">   
    </div>
    

</body>
</html>
