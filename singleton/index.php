
<?php

class Singleton
{
  private static $instancia;
  private $contador;


  private function __construct()
  {
    $this->contador = 0;
    echo "He creado una clase: " . __CLASS__ .", y mi contador es de:". $this->contador. "</br>";
    
  }

  public static function getInstance()
  {
    if (!self::$instancia instanceof self) {
      self::$instancia = new self;
    }
    return self::$instancia;
  }

  public function incrementar()
  {
    return ++$this->contador;
  }

  public function disminuir()
  {
    return --$this->contador;
  }
}


// Instancio la funcion incrementar
$instancia = Singleton::getInstance();
echo "instancia (incrementar): " . $instancia->incrementar() . "</br>";
echo "instancia (incrementar): " . $instancia->incrementar() . "</br>";
echo "instancia (incrementar): " . $instancia->incrementar() . "</br>"."</br>";

// Instancio la funcion disminuir
$otraInstancia = Singleton::getInstance();
echo "otraInstancia (disminuir): " . $otraInstancia->disminuir() . "</br>";
echo "otraInstancia (incrementar): " . $otraInstancia->incrementar() . "</br>";


?>