<?php


    add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles(){
    // Chargement du css/theme.css pour nos personnalisations
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/assets/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/theme.css'));

}

  function lesgrandschenes_add_admin_pages() {
    add_menu_page(__('Paramètres du thème Les grands chênes', 'lesgrandschenes'), __('lesgrandschenes', 'lesgrandschenes'), 'manage_options', 'lesgrandschenes-settings', 'lesgrandschenes_theme_settings', 'dashicons-admin-settings', 60); 
  }

  function set_samesite_cookie($content) {
    // Assurez-vous que le contenu est une chaîne de caractères
    if (is_string($content)) {
        // Vérifiez si 'SameSite=None; Secure' n'est pas déjà présent et si l'utilisateur est connecté
        if (strpos($content, 'SameSite=None; Secure') === false && is_user_logged_in()) {
            $content = str_replace('path=/;', 'path=/; SameSite=None; Secure;', $content);
        }
    }
  
    return $content;
  }
  
  // Ajoutez le filtre uniquement si l'utilisateur est connecté
  if (is_user_logged_in()) {
    add_filter('wp_headers', 'set_samesite_cookie', 10, 1);
  }
  function lesgrandschenes_theme_settings() {
    echo '<h1>'.esc_html( get_admin_page_title() ).'</h1>';
    echo '<form action="options.php" method="post" name="lesgrandschenes_settings">';
    echo '<div>';

    settings_fields('lesgrandschenes_settings_fields');
    do_settings_sections('lesgrandschenes_settings_section');
    submit_button();

    echo '</div>';
    echo '</form>';
  }

  function lesgrandschenes_settings_register() {
    register_setting('lesgrandschenes_settings_fields', 'lesgrandschenes_settings_fields', 'lesgrandschenes_settings_fields_validate');
    add_settings_section('lesgrandschenes_settings_section', __('Paramètres', 'lesgrandschenes'), 'lesgrandschenes_settings_section_introduction', 'lesgrandschenes_settings_section');
    add_settings_field('lesgrandschenes_settings_field_introduction', __('Introduction', 'lesgrandschenes'), 'lesgrandschenes_settings_field_introduction_output', 'lesgrandschenes_settings_section', 'lesgrandschenes_settings_section');
    add_settings_field('lesgrandschenes_settings_field_phone_number', __('Numéro de téléphone', 'lesgrandschenes'), 'lesgrandschenes_settings_field_phone_number_output', 'lesgrandschenes_settings_section', 'lesgrandschenes_settings_section');
    add_settings_field('lesgrandschenes_settings_field_mobile_number', __('Numéro de mobile', 'lesgrandschenes'), 'lesgrandschenes_settings_field_mobile_number_output', 'lesgrandschenes_settings_section', 'lesgrandschenes_settings_section');
    add_settings_field('lesgrandschenes_settings_field_email', __('Email', 'lesgrandschenes'), 'lesgrandschenes_settings_field_email_output', 'lesgrandschenes_settings_section', 'lesgrandschenes_settings_section');
    add_settings_field('lesgrandschenes_settings_field_lienresa', __('Lien de reservation', 'lesgrandschenes'), 'lesgrandschenes_settings_field_lienresa_output', 'lesgrandschenes_settings_section', 'lesgrandschenes_settings_section');
   
    }

  function lesgrandschenes_settings_section_introduction() {
    echo __('Paramètrez les différentes options de votre thème lesgrandschenes.', 'lesgrandschenes');
  }

  function lesgrandschenes_settings_fields_validate($inputs) {  
    if(isset($_POST) && !empty($_POST)):
      if(isset($_POST['lesgrandschenes_settings_field_introduction']) && !empty($_POST['lesgrandschenes_settings_field_introduction'])):
        update_option('lesgrandschenes_settings_field_introduction', $_POST['lesgrandschenes_settings_field_introduction']);
      endif;
      if(isset($_POST['lesgrandschenes_settings_field_phone_number']) && !empty($_POST['lesgrandschenes_settings_field_phone_number'])):
        update_option('lesgrandschenes_settings_field_phone_number', $_POST['lesgrandschenes_settings_field_phone_number']);
      endif;
      if(isset($_POST['lesgrandschenes_settings_field_mobile_number']) && !empty($_POST['lesgrandschenes_settings_field_mobile_number'])):
        update_option('lesgrandschenes_settings_field_mobile_number', $_POST['lesgrandschenes_settings_field_mobile_number']);
      endif;
      if(isset($_POST['lesgrandschenes_settings_field_email']) && !empty($_POST['lesgrandschenes_settings_field_email'])):
        update_option('lesgrandschenes_settings_field_email', $_POST['lesgrandschenes_settings_field_email']);
      endif;
      if(isset($_POST['lesgrandschenes_settings_field_lienresa']) && !empty($_POST['lesgrandschenes_settings_field_lienresa'])):
        update_option('lesgrandschenes_settings_field_lienresa', $_POST['lesgrandschenes_settings_field_lienresa']);
      endif;
    endif;

    return $inputs;
  }

  function lesgrandschenes_settings_field_introduction_output() {
    $value = get_option('lesgrandschenes_settings_field_introduction');

    echo '<input name="lesgrandschenes_settings_field_introduction" type="text" value="'.$value.'" />';
  }

  function lesgrandschenes_settings_field_phone_number_output() {
    $value = get_option('lesgrandschenes_settings_field_phone_number');

    echo '<input name="lesgrandschenes_settings_field_phone_number" type="text" value="'.$value.'" />';
  }
  function lesgrandschenes_settings_field_mobile_number_output() {
    $value = get_option('lesgrandschenes_settings_field_mobile_number');

    echo '<input name="lesgrandschenes_settings_field_mobile_number" type="text" value="'.$value.'" />';
  }

  function lesgrandschenes_settings_field_email_output() {
    $value = get_option('lesgrandschenes_settings_field_email');

    echo '<input name="lesgrandschenes_settings_field_email" type="text" value="'.$value.'" />';
  }
  function lesgrandschenes_settings_field_lienresa_output() {
    $value = get_option('lesgrandschenes_settings_field_lienresa');

    echo '<input name="lesgrandschenes_settings_field_lienresa" type="text" value="'.$value.'" />';
  }
  

  add_action('admin_menu', 'lesgrandschenes_add_admin_pages', 10);
  add_action('admin_init', 'lesgrandschenes_settings_register');
  ?>