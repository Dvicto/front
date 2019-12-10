<?php
	
	Class Color{
		public $red;
		public $green;
		public $blue;
		public static $verbose = FALSE;
		
		public function __Construct(array $rgb = array('red' => 255, 'green' => 255, 'blue' => 255))
		{
			if (isset($rgb['red']) && isset($rgb['green']) && isset($rgb['blue'])) {
				$this->red = intval($rgb['red']);
				$this->green = intval($rgb['green']);
				$this->blue = intval($rgb['blue']);
				if (self::$verbose == TRUE)
					echo $this . ' constructed.' . PHP_EOL;
			} else if (isset($rgb['rgb'])) {
				$this->red = intval((0xFF000 & $rgb['rgb']) >> 16);
				$this->green = intval((0xFF00 & $rgb['rgb']) >> 8);
				$this->blue = intval(0xFF & $rgb['rgb']);
				if (self::$verbose == TRUE)
					echo $this . ' constructed.' . PHP_EOL;
			}
		}
		
		public function __Destruct(){
			if (self::$verbose == TRUE){
				echo $this.' destructed'.PHP_EOL;
			}
		}
		
		public function __toString()
		{
			return (sprintf("Color( red:%4s, green:%4s, blue:%4s )", $this->red, $this->green, $this->blue));
		}
		
		public static function doc(){
			return file_get_contents('./Color.doc.txt').PHP_EOL;
		}
		
		public function add(Color $plus){
			return (new Color(array('red' => ($this->red + $plus->red),
									'green' => ($this->green + $plus->green),
									'blue' => ($this->blue + $plus->blue))));
		}
	
		public function sub(Color $sub){
			return (new Color(array('red' => ($this->red - $sub->red),
									'green' => ($this->green - $sub->green),
									'blue' => ($this->blue - $sub->blue))));
		}
	
		public function mult($multi){
			return (new Color(array('red' => $this->red * $multi,
									'green' => $this->green * $multi,
									'blue' => $this->blue * $multi)));
		}
}