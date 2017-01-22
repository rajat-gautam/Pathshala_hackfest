<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    include(APPPATH.'views\template\header.php');
    include(APPPATH.'views\template\navigation_bar.php');
    include(APPPATH.'views\template\slider.php');
    include(APPPATH.'views\template\footer.php');

?>
<!DOCTYPE html>
<html>
<head>
    <title>IIT(ISM) DHANBAD | INDIAN INSTITUTE OF TECHNOLOGY (INDIAN SCHOOL OF MINES), DHANBAD</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href=<?php echo base_url("/assets/css/bootstrap.css"); ?> rel="stylesheet">
    <link href=<?php echo base_url("/mystyles.css");?> rel="stylesheet">
    <link href=<?php echo base_url("/arvslider/css/liquid-slider.css");?> rel="stylesheet">

</head>
<body>

<div class="container">
        <?php
            head();
            topNavigation();
            imgSlider();
        ?>

        <div class="row">
            <div class="col-lg-12" style="background:orange;padding:2px 0px 2px 0px;text-align:center;font-weight:bold;width:100%;">
                <span>This is very important link</span>
            </div>
        </div>
 
        <div class="row">
            <?php 
               include(APPPATH.'views\event\dailyevent.php');
               include(APPPATH.'views\notice.php');
            ?>


        </div>

        <?php
        	foot();
        ?>
</div>
</body>
</html>