<?php

class Template {

    private $dir= __DIR__ . '/templates/';
    private $template;

    public function __construct ($file) {
        if (!file_exists($this->dir.$file)) {
            throw new Exception("Template doesn't exist: " .$this->dir.$file);
        } else {            
            $this->template=$this->dir.$file;
        }
    }

    public function parse(array $tokens, array $values) {
        $content=file_get_contents($this->template);
        return str_replace($tokens, $values, $content);
    }
}