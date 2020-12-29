<?php
class File{
	public $filename='db.txt';
	public $content='insert database here';
	public function __destruct(){
		if ($this->filename === 'db.txt') echo file_put_contents( "./htdocs/deserialize/".$this->filename, $this->content);
	}

	// hoặc có thể sửa bằng cách ko dùng __destruct nữa. Thay vào đó, hãy dùng file_put_contents ở một phương thức mới, và gọi thủ công phương thức này ra.
	public function writeDB(){
		echo file_put_contents( "./htdocs/deserialize/".$this->filename, $this->content);
	} // sau khi deserialize thì gọi thủ công phương thức writeDB này ra.
}
?>