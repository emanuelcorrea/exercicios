<?php
    interface Celular {
        public function ligar();
        public function desligar();
        public function bloquearTela();
        public function desbloquearTela();
        public function senha();
        public function verificarBateria();
        public function carregar();
        public function maisVolume();
        public function menosVolume();
        public function colocarChip();
        public function tirarChip();
        public function ligacao();
        public function terminarLigacao();
    }
?>