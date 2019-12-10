<?php

	require_once '../ex00/Color.class.php';
    class Vertex{
    	private $x;
    	private $y;
    	private $z;
    	private $w;
    	private $color;
		public static $verbose = FALSE;

		public function getX(){
			return $this->x;
		}

	    public function getY()
	    {
		    return $this->y;
	    }

	    public function getZ()
	    {
		    return $this->z;
	    }

	    public function getW()
	    {
		    return $this->w;
	    }
	    public function getColor()
	    {
			return $this->color;
	    }
	    public function __Construct(array $coords = array('x' => 0.0, 'y' => 0.0, 'z' => 0.0, 'w' => 0.0)){
			if (isset($coords['color'])){
				$this->color = $coords['color'];
			}
			else {
				$this->color = new Color();
			}
			if (isset($coords['x']) && isset($coords['y']) && isset($coords['z'])){
				$this->x = $coords['x'];
				$this->y = $coords['y'];
				$this->z = $coords['z'];
			}
			else{
				$this->x = 0.0;
				$this->y = 0.0;
				$this->z = 0.0;
			}
			if (isset($coords['w'])){
				$this->w = $coords['w'];
			}
			else{
				$this->w = 1.0;
			}
			if (self::$verbose == true){
				echo $this.' constructed'.PHP_EOL;
			}
	    }
	    public function doc(){
			echo file_get_contents('./Vertex.doc.txt').PHP_EOL;
	    }

	    public function __Destruct(){
			if (self::$verbose == true){
				echo $this.' destructed'.PHP_EOL;
			}
	    }

	    public function __toString()
	    {
		    if (!self::$verbose)
			    return sprintf("Vertex( x: %4.2f, y: %4.2f, z:%4.2f, w:%4.2f )", $this->x, $this->y, $this->z, $this->w);
		    else
			    return sprintf("Vertex( x: %4.2f, y: %4.2f, z:%4.2f, w:%4.2f, %s )", $this->x, $this->y, $this->z, $this->w, $this->color);
	    }
    }