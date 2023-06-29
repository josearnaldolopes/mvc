<?php
class mvc {
    public function model() {
        return '<b>Model</b>: É a camada da lógica da aplicação onde fica o que será tratado dos dados, as Classes, Funções, variáveis e etc...';
    }
    public function view() {
        return '<b>View</b>: É a camada do que é exibo na tela o que tem que ser visto, certinho';
    }
    public function controller() {
        return '<b>Controller</b>: É a camada que faz o meio campo entre o Model e View';
    }
    public function sources() {
        return array('devmedia'=>'https://www.devmedia.com.br/conceito-de-mvc-e-sua-funcionalidade-usando-o-php/22324', 'Wikipedia'=>'https://pt.wikipedia.org/wiki/MVC');
    }
    public function getMethods($class) {
        $class = get_class_methods($class);
        $method = '';
        foreach ($class as $method_name) {
            $method .= $method_name.'();'.'<br>';
        }
        return $method.'<br>';
    }
    public function getClass($object) {
        return get_class($object);
    }
    public function openArray($array)
    {
        $open = '';
        foreach ($array as $i => $value) {
            $open .= $i.' '.$value.'<br>';
        }
        return $open;
    }
}
?>