 
<div class="container footer">
    <div class="col-sm-4"><?php dynamic_sidebar( 'footer-description' ); ?></div> 
    <div class="col-sm-4" style="text-align:center;"><?php dynamic_sidebar( 'footer-contacts' ); ?></div> 
    <div class="col-sm-4" style="text-align:right;"><?php dynamic_sidebar( 'footer-hours' ); ?></div> 
</div> 
<div class="container-fluid copyright">    
<p class="text-center">&copy; <?php echo date('Y'); ?> CleanUp </p>
    <p class="text-center" style="display:none;">Design & code: <a href="http://huchasheva-web.ru/">Alexandra Huchasheva</a></p>
</div>

</div>
<?php wp_footer(); ?>
</body>
</html>
