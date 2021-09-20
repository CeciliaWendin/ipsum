</div>
<footer id="footer">
    <div class="footer-row">
        <div class="footer-column">
            <?php
            if(is_Active_sidebar('footer-widget-1')); ?>
                   <?php dynamic_sidebar('footer-widget-1'); ?>
        </div>
        <div class="footer-column">
            <?php
            if(is_Active_sidebar('footer-widget-2')); ?>
               
                    <?php dynamic_sidebar('footer-widget-2'); ?>
        </div>
        <div class="footer-column">
            <?php
            if(is_Active_sidebar('footer-widget-3')); ?>
                
                    <?php dynamic_sidebar('footer-widget-3'); ?>
        </div>
        <div class="footer-column">
            <?php
            if(is_Active_sidebar('footer-widget-4')); ?>
                
                    <?php dynamic_sidebar('footer-widget-4'); ?>
        </div>
    </div>
    
<script>
function menuToggleOn() {
  document.getElementById("responsive-menu").style.display = "block";
}

function menuToggleOff() {
  document.getElementById("responsive-menu").style.display = "none";
} 
</script>

<?php wp_footer(); ?>
</footer>
</body>
</html>