<div>
    <p>O seu IMC está na faixa: 
        <?php
            $altura = 1.80;
            $peso = 90;
            $faixa = '';

            $imc = $peso / ($altura * $altura);

            if($imc < 18.5) {
                $faixa = 'Magreza';
            }else if($imc >= 18.5 && $imc <= 25) {
                $faixa = 'Normal';
            }else if($imc >= 25 && $imc < 30) {
                $faixa = 'SobrePeso';
            }else {
                $faixa = 'Obesidade';
            }
    
            echo $faixa;
        ?>
    </p>
</div>