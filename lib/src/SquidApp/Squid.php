<?php

namespace SquidApp;

/**
*  squidmagic banner
*/
class Squid
{
	public $banner;
	
	function __construct($banner = null)
	{
		$this->banner = $banner;
	}

	public function bannerAction() {
        
        $this->banner = "
                                                            
		                      | |                          
		 ___  __ _ _   _ _  __| |_ __ ___   __ _  __ _ _  ___ 
		/ __|/ _` | | | | |/ _` | '_ ` _ \ / _` |/ _` | |/ __|
		\__ \ (_| | |_| | | (_| | | | | | | (_| | (_| | | (__ 
		|___/\__, |\__,_|_|\__,_|_| |_| |_|\__,_|\__, |_|\___|
		        | |                               __/ |       
		        |_|                              |___/ 
		            squidmagic collector started   
		";

		return $this->banner;
	}
}