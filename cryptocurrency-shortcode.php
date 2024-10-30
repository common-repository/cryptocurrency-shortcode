<?php
/*
 * Plugin Name: Crypto-Currency Shortcode
 * Version: 1.4
 * Plugin URI: http://apocrypha.jp/software
 * Description: Defines a shortcode for crypto-currency donation button on your WordPress blog. This plugin supports Bitcoin, Litecoin, Monacoin, kumacoin, ringo and Dogecoin.
 * Author: KAZApocrypha
 * Author URI: http://apocrypha.jp/
 * Requires at least: 3.0
 * Tested up to: 3.9.1
 */
 
class CoinWidget {

	public function __construct() {
		$this->coinwidget_url = trailingslashit( plugins_url( '/coinwidget.com/', __FILE__ ) );
		$this->root_url = trailingslashit( plugins_url( '/', __FILE__ ) );
		add_action('init', array( $this, 'on_init' ));
		add_shortcode('ccsc', array( $this, 'handle_shortcode' ));
	}
	
	function on_init()
	{
		// Include the coin.js code with the other script includes
		wp_enqueue_script('ko-coinwidget', $this->root_url . 'coin_js_wrapper.php', array('jquery'));
	}

	function handle_shortcode($atts)
	{
		extract(shortcode_atts(array(
			'address' => '',
			'currency' => 'monacoin',
			'counter' => 'count',
			'alignment' => 'bl',
			'qrcode' => "true",
			'auto_show' => "false",
			'decimals' => "4",
			'lbl_button' => 'Donate',
			'lbl_address' => 'My Monacoin Address:',
			'lbl_count' => 'donations',
			'lbl_amount' => 'MONA',
		), $atts));

		ob_start();
		?>
			<script>
			CoinWidgetCom.source = "<?php echo $this->coinwidget_url ?>"
			CoinWidgetCom.go({
				wallet_address: "<?php echo $address ?>"
				, currency: "<?php echo $currency ?>"
				, counter: "<?php echo $counter ?>"
				, alignment: "<?php echo $alignment ?>"
				, qrcode: <?php echo $qrcode ?>
				, auto_show: <?php echo $auto_show ?>
				, decimals: <?php echo $decimals ?>
				, lbl_button: "<?php echo $lbl_button ?>"
				, lbl_address: "<?php echo $lbl_address ?>"
				, lbl_count: "<?php echo $lbl_count ?>"
				, lbl_amount: "<?php echo $lbl_amount ?>"
			});
			</script>
		<?php

		return ob_get_clean();
	}
}

$plugin_obj = new CoinWidget();
