<?php require_once('../private/initialize.php'); ?>
<?php include(SHARED_PATH. '/public_header.php'); ?>

<div id="main">
<ul>
    <li><a href="<?php echo url_for('/bicyles.php'); ?>">View for inventory </a></li>
    <li><a href="<?php echo url_for('/about.php'); ?>">About us</a></li>
    
</ul>
</div>

<?php $uper_hero_image = 'AdobeStock_18040381_xlarge.jpeg'; ?>
<?php include($SHARED_PATH . '/public_footer.php'); ?>