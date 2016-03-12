<?php
/**
 * Created by PhpStorm.
 * User: Steve
 * Date: 3/11/2016
 * Time: 12:57 PM
 */

?>

<div id="footer" class="gray-bg">
    <div class="row">
    <ul class="menu vertical" data-responsive-menu>
        <li><a href="<?php echo $root_url ?>index.php">About Me</a></li>
        <li><a href="#">Work</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Testimonials</a></li>
        <li><a href="#">Contact Me</a></li>
    </ul>
    </div>
</div>
<div id="sub-footer">
    <div class="row">
        <p style="margin:0;">	&copy; <?php echo date("Y"); ?> Steve Saylor Productions</p>
    </div>
</div>


<script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
<script src="js/foundation.min.js"></script>
<script>
    $(document).foundation();
</script>
</body>
</html>
