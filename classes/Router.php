
<?php
	/**
	 * 
	 */
	class Router
	{
		
		public static function get($path,$func){
            if(empty($_POST)){
                $url = (isset($_GET['url'])) ? $_GET['url'] : 'home';                
				if($url[0] != '/'){
					$url = '/'.$url;                    
				}
               
				if($path[0] != '/'){
					$path = '/'.$path;
				}
                
				if($url[strlen($url) - 1] != '/'){
					$url.= '/';
				}
               
				if($path[strlen($path) - 1] != '/'){
					$path.= '/';
				}                
				if($path == $url){
					$func();
					return false;
				}

				// caso o url seja um parametro                               
				$url = explode('/',$url);
				$path = explode('/',$path);
				$ok = true;
				$par = [];
				
				if(count($url) == count($url)){                                                    
					foreach ($path as $key => $value) {                        
						if($value == '?'){
							if($url[$key] == ''){                                
								continue;
							}
							$par[$key] = $url[$key];
						}else if($value != $url[$key]){
							$ok = false;
							break;
						}
					}

					if($ok){						
						$func($par);
						return true;
					}
				}
			}
		}
	}

?>