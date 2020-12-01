<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $this->siteTitle();?> </title>
    <link rel="stylesheet" href="<?php echo FROOT;?>assets/css/main.css"/>
	<?= $this->content('head'); ?>
</head>
<body>
    <?php include("main_menu.php"); ?>
	<?= $this->content('body'); ?>

    <footer id="footer">
        <div class="footer_wrapper">
            <div class="footer-links">
                <h3>About Us</h3>
                <ul>
                    <li><a href="">About Jobfinderbd</a></li>
                    <li><a href="">Terms and Conditions</a></li>
                    <li><a href="">Privacy Policy</a></li>
                    <li><a href="">Contact Us</a></li>
                </ul>
            </div><!-- footer-links -->
            <div class="footer-links">
                <h3>Job Seekers</h3>
                <ul>
                    <li><a href="">Create an account</a></li>
                    <li><a href="">FAQ</a></li>
                </ul>
            </div><!-- footer-links -->
            <div class="footer-links">
                <h3>Employers</h3>
                <ul>
                    <li><a href="">Create an account</a></li>
                    <li><a href="">Find a job</a></li>
                    <li><a href="">FAQ</a></li>
                </ul>
            </div><!-- footer-links -->
            <div class="footer-links">
                <h3>Social Networks</h3>
                <ul>
                    <li><a href="">Facebook</a></li>
                    <li><a href="">Twitter</a></li>
                </ul>
            </div><!-- footer-links -->
        </div><!-- footer_wrapper -->
    </footer>


    <script src="<?php echo FROOT;?>assets/js/jquery.js"></script>
    <script src="<?php echo FROOT; ?>assets/js/custom.js"></script>
</body>
</html>