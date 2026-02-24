<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computaria - N1</title>
</head>
    <h3><em>Av - 1</em></h3>
<body>
    <?php 
        class Carro {
            //atributos do objeto
            public $marca;
            public $modelo;
            public $ano;
            public $cor;
            public $velocidade =0;

            // primeiro metodo
            public function acelerar(){
                $this -> velocidade +=10;
                echo "O carro acelerou. A velociade e igual: " . $this->velocidade . "Km/h <br>";
            }

            //segundo metodo
            public function frear(){
                if($this -> velocidade >=10){
                    $this->velocidade -=10;
                }
                echo "O carro desacelerou. Velociade e igual: " . $this->velocidade . "Km/h <br>";
            }

             public function marca(){
                echo "Marca do carro: " . $this->marca . "<br>";
            }
            
        }
        //Objeto
        $meuCarro = new Carro();
        $meuCarro->marca = "Ferrari";
        
        $carro2 = new Carro();
        $carro2->marca = "Honda";

        //Metodos
        $meuCarro->marca();
        $meuCarro->acelerar();
        $meuCarro->acelerar(); 
        $meuCarro->acelerar();
        $meuCarro->frear();
        $meuCarro->frear();

        //obj 2
        $carro2->marca();
    
    
    
    
    ?>
</body>
</html>