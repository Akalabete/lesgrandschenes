
<?php 
        $phone_number = get_option('lesgrandschenes_settings_field_phone_number');
        $email = get_option('lesgrandschenes_settings_field_email');
        $mobile_number = get_option('lesgrandschenes_settings_field_mobile_number');
      ?>

      <footer class="footer">
      <div class="footer-container">
        <div class="footer-item">
            <p>© <?php echo date('Y') . ' ' . __('Les Grands Chênes', 'lesgrandschenes'); ?></p>
            <p><?php echo $email; ?></p>
            <p><?php echo $phone_number; ?></p>
            <p><?php echo $mobile_number; ?></p>
        </div>
        <div class="footer-item">
            <p>by <a href="www.lacouralexandre.tech" id="webmaster">Dev'your synergy</a></p>
        </div>
        <div class="footer-item">
            <p><a href="/"><?php _e('Accueil', 'lesgrandschenes'); ?></a></p>
        </div>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>