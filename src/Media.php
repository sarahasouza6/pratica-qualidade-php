<?php 

class Media {
    public function calcularMedia($notas) {
        $soma = 0; // Certifique-se que mudou para 0
        foreach ($notas as $nota) {
            $soma += $nota;
        }
        return $soma / count($notas);
    }
}
