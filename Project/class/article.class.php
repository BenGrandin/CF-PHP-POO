<?php
class Article extends Table{

    private $_title;
    private $_content;
    protected $table = "article";


    
    public function setTitle(string $title) {
        $this->_title = $this->_title;
    }

    public function setContent(string $content) {
        $this->_content = $content;
    }


    public function getTitle() : string {
        return $this->_title;
    }


    public function getContent() : string {
        return $this->_content;
    }


}
?>