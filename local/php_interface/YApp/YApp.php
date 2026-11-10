<?php

	class YApp {

        ////////////////////////////////////////////////////////////////
		// Contst  /////////////////////////////////////////////////////
		////////////////////////////////////////////////////////////////
		
		const IBLOCK_MODELS = 3;
		const IBLOCK_FORMS = 6;
		
		////////////////////////////////////////////////////////////////
		// Init  ///////////////////////////////////////////////////////
		////////////////////////////////////////////////////////////////
        
        public function _construct() {
            
        }

        ////////////////////////////////////////////////////////////////
		// Help  ///////////////////////////////////////////////////////
		////////////////////////////////////////////////////////////////
		
		public static function sp( $q, $hide = false, $title = false ) {
			
			echo '<noindex><pre '.(($hide)?'style="display:none;"':'').'>';
			if ( $title ) echo $title.'<br />-------------------------------<br />';
			print_r( $q );
			echo '</pre></noindex>';
        }
        
        public static function sd( $q, $hide = false, $title = false ) {
			
			echo '<noindex><pre '.(($hide)?'style="display:none;"':'').'>';
			if ( $title ) echo $title.'<br />-------------------------------<br />';
			var_dump( $q );
			echo '</pre></noindex>';
        }



		public static function Route() {

            $url = 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
            $ar = explode('/', parse_url($url)['path']);

            return [
                'entity' => $ar['2'],
                'id' => $ar['3'],
                'data' => $_GET
            ];
	    }


		


        

		////////////////////////////////////////////////////////////////
		// Filters /////////////////////////////////////////////////////
		////////////////////////////////////////////////////////////////

		public static function httpGet($url) {
			$attempts = 6;
			$resp = false;
			for ($i = 0; $i < $attempts; $i++) {
				$ch = curl_init($url);
				curl_setopt_array($ch, [
					CURLOPT_RETURNTRANSFER => true,
					CURLOPT_TIMEOUT => 3,
					CURLOPT_SSL_VERIFYPEER => false,
					CURLOPT_SSL_VERIFYHOST => false,
					CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
					CURLOPT_SSLVERSION => CURL_SSLVERSION_TLSv1_2,
				]);
				$resp = curl_exec($ch);
				$err = curl_errno($ch);
				curl_close($ch);
				
				if ($resp !== false && $err === 0) {
					break;
				}
				if ($i < $attempts - 1) {
					usleep(100000); // 100 мс
				}
			}
			return $resp;
		}
	}





