<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       x
 * @since      1.0.0
 *
 * @package    Xss
 * @subpackage Xss/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Xss
 * @subpackage Xss/public
 * @author     xss <x>
 */
class Xss_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Xss_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Xss_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/xss-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Xss_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Xss_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/xss-public.js', array( 'jquery' ), $this->version, false );
		
		wp_localize_script( $this->plugin_name, 'settings', array(
			'ajaxurl'    => admin_url( 'admin-ajax.php' ),
			'send_label' => __( 'Send report', 'reportabug' )
		) );
	}
	public function xss_form_shortcode( $atts = [], $content = null) {
	?>
    <form  id="xss-form"  class="d-flex flex-column" action="" method="post">
        <input class="form-control mt-2" type="text" placeholder="Imie">
        <input class="form-control mt-2"   type="mail" placeholder="Email">
        <textarea class="form-control mt-2" name="ms_content" id="" placeholder="Wiadomość"  ></textarea>
        <button class="btn btn-primary mt-2">Wyślij</button>
    </form>

	<?php	
	}

	public function xss_send_message()
	{
		echo "Wiadomość została wysłana";
  		die();
	}
}
