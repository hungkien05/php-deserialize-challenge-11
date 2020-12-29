<?php
class File{
	public $filename='db.txt'; //shell.php
	public $content='insert database here'; 
	public function __destruct(){
		// if ($this->filename === 'db.txt') 
			echo file_put_contents( "./htdocs/deserialize/".$this->filename, $this->content);
	}
}
?>