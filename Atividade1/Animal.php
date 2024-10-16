<?php
    class Animal {
        public $nomecientifico;
        public $multicelular;
        public $eucarionte;
        public $nutricaoHeterotrofica;
    
        public function __construct($nomecientifico, $multicelular, $eucarionte, $nutricaoHeterotrofica) {
            $this->nomecientifico = $nomecientifico;
            $this->multicelular = $multicelular;
            $this->eucarionte = $eucarionte;
            $this->nutricaoHeterotrofica = $nutricaoHeterotrofica;
        }
    
        public function nascer() {}
        public function viver() {}
        public function morrer() {}
        public function reproduzir() {}
        public function dormir() {}
    }
    
    class Vertebrado extends Animal {
        public $colunaVertebral;
        public $medulaEspinal;
        public $sistemaNervosoCentral;
        public $sistemaMuscular;
        public $endoesqueleto;
    
        public function __construct($nomecientifico, $multicelular, $eucarionte, $nutricaoHeterotrofica, 
            $colunaVertebral, $medulaEspinal, $sistemaNervosoCentral, $sistemaMuscular, $endoesqueleto) {
            parent::__construct($nomecientifico, $multicelular, $eucarionte, $nutricaoHeterotrofica);
            $this->colunaVertebral = $colunaVertebral;
            $this->medulaEspinal = $medulaEspinal;
            $this->sistemaNervosoCentral = $sistemaNervosoCentral;
            $this->sistemaMuscular = $sistemaMuscular;
            $this->endoesqueleto = $endoesqueleto;
        }
    }
    
    class Peixe extends Vertebrado {
        public $escamas;
        public $respiracaoBranquial;
        public $barbatana;
    
        public function __construct($nomecientifico, $multicelular, $eucarionte, $nutricaoHeterotrofica, 
            $colunaVertebral, $medulaEspinal, $sistemaNervosoCentral, $sistemaMuscular, $endoesqueleto, 
            $escamas, $respiracaoBranquial, $barbatana) {
            parent::__construct($nomecientifico, $multicelular, $eucarionte, $nutricaoHeterotrofica, 
                $colunaVertebral, $medulaEspinal, $sistemaNervosoCentral, $sistemaMuscular, $endoesqueleto);
            $this->escamas = $escamas;
            $this->respiracaoBranquial = $respiracaoBranquial;
            $this->barbatana = $barbatana;
        }
    
        public function nadar() {}
    }
    
    class Anfibio extends Vertebrado {
        public $ectotermico;
        public $peleLisa;
        public $peleUmida;
    
        public function __construct($nomecientifico, $multicelular, $eucarionte, $nutricaoHeterotrofica, 
            $colunaVertebral, $medulaEspinal, $sistemaNervosoCentral, $sistemaMuscular, $endoesqueleto, 
            $ectotermico, $peleLisa, $peleUmida) {
            parent::__construct($nomecientifico, $multicelular, $eucarionte, $nutricaoHeterotrofica, 
                $colunaVertebral, $medulaEspinal, $sistemaNervosoCentral, $sistemaMuscular, $endoesqueleto);
            $this->ectotermico = $ectotermico;
            $this->peleLisa = $peleLisa;
            $this->peleUmida = $peleUmida;
        }
    }
    
    class Reptil extends Vertebrado {
        public $pecilotermico;
        public $peleGrossa;
        public $respiracaoPulmonar;
        public $oviparo;
    
        public function __construct($nomecientifico, $multicelular, $eucarionte, $nutricaoHeterotrofica, 
            $colunaVertebral, $medulaEspinal, $sistemaNervosoCentral, $sistemaMuscular, $endoesqueleto, 
            $pecilotermico, $peleGrossa, $respiracaoPulmonar, $oviparo) {
            parent::__construct($nomecientifico, $multicelular, $eucarionte, $nutricaoHeterotrofica, 
                $colunaVertebral, $medulaEspinal, $sistemaNervosoCentral, $sistemaMuscular, $endoesqueleto);
            $this->pecilotermico = $pecilotermico;
            $this->peleGrossa = $peleGrossa;
            $this->respiracaoPulmonar = $respiracaoPulmonar;
            $this->oviparo = $oviparo;
        }
    }
    
    class Mamifero extends Vertebrado {
        public $gladulasMamarias;
        public $endotermico;
        public $respiracaoPulmonar;
    
        public function __construct($nomecientifico, $multicelular, $eucarionte, $nutricaoHeterotrofica, 
            $colunaVertebral, $medulaEspinal, $sistemaNervosoCentral, $sistemaMuscular, $endoesqueleto, 
            $gladulasMamarias, $endotermico, $respiracaoPulmonar) {
            parent::__construct($nomecientifico, $multicelular, $eucarionte, $nutricaoHeterotrofica, 
                $colunaVertebral, $medulaEspinal, $sistemaNervosoCentral, $sistemaMuscular, $endoesqueleto);
            $this->gladulasMamarias = $gladulasMamarias;
            $this->endotermico = $endotermico;
            $this->respiracaoPulmonar = $respiracaoPulmonar;
        }
    
        public function amamentar() {}
    }
    
    class Passaro extends Vertebrado {
        public $penas;
        public $bico;
        public $oviparos;
        public $asa;
    
        public function __construct($nomecientifico, $multicelular, $eucarionte, $nutricaoHeterotrofica, 
            $colunaVertebral, $medulaEspinal, $sistemaNervosoCentral, $sistemaMuscular, $endoesqueleto, 
            $penas, $bico, $oviparos, $asa) {
            parent::__construct($nomecientifico, $multicelular, $eucarionte, $nutricaoHeterotrofica, 
                $colunaVertebral, $medulaEspinal, $sistemaNervosoCentral, $sistemaMuscular, $endoesqueleto);
            $this->penas = $penas;
            $this->bico = $bico;
            $this->oviparos = $oviparos;
            $this->asa = $asa;
        }
    
        public function voar() {}
        public function botarOvo() {}
    }
    
    class Ornitorinco extends Mamifero {
        public $bico;
        public $pelo;
        public $oviparo;
    
        public function __construct($nomecientifico, $multicelular, $eucarionte, $nutricaoHeterotrofica, 
            $colunaVertebral, $medulaEspinal, $sistemaNervosoCentral, $sistemaMuscular, $endoesqueleto, 
            $gladulasMamarias, $endotermico, $respiracaoPulmonar, $bico, $pelo, $oviparo) {
            parent::__construct($nomecientifico, $multicelular, $eucarionte, $nutricaoHeterotrofica, 
                $colunaVertebral, $medulaEspinal, $sistemaNervosoCentral, $sistemaMuscular, $endoesqueleto, 
                $gladulasMamarias, $endotermico, $respiracaoPulmonar);
            $this->bico = $bico;
            $this->pelo = $pelo;
            $this->oviparo = $oviparo;
        }
    
        public function botarOvo() {}
        public function amamentar() {}
    }
    
    class Morcego extends Mamifero {
        public $ecolocalizacao;
        public $noturno;
        public $asa;
    
        public function __construct($nomecientifico, $multicelular, $eucarionte, $nutricaoHeterotrofica, 
            $colunaVertebral, $medulaEspinal, $sistemaNervosoCentral, $sistemaMuscular, $endoesqueleto, 
            $gladulasMamarias, $endotermico, $respiracaoPulmonar, $ecolocalizacao, $noturno, $asa) {
            parent::__construct($nomecientifico, $multicelular, $eucarionte, $nutricaoHeterotrofica, 
                $colunaVertebral, $medulaEspinal, $sistemaNervosoCentral, $sistemaMuscular, $endoesqueleto, 
                $gladulasMamarias, $endotermico, $respiracaoPulmonar);
            $this->ecolocalizacao = $ecolocalizacao;
            $this->noturno = $noturno;
            $this->asa = $asa;
        }
    
        public function amamentar() {}
        public function voar() {}
    }
    
    class Baleia extends Mamifero {
        public $vocalizacao;
        public $espiraculo;
    
        public function __construct($nomecientifico, $multicelular, $eucarionte, $nutricaoHeterotrofica, 
            $colunaVertebral, $medulaEspinal, $sistemaNervosoCentral, $sistemaMuscular, $endoesqueleto, 
            $gladulasMamarias, $endotermico, $respiracaoPulmonar, $vocalizacao, $espiraculo) {
            parent::__construct($nomecientifico, $multicelular, $eucarionte, $nutricaoHeterotrofica, 
                $colunaVertebral, $medulaEspinal, $sistemaNervosoCentral, $sistemaMuscular, $endoesqueleto, 
                $gladulasMamarias, $endotermico, $respiracaoPulmonar);
            $this->vocalizacao = $vocalizacao;
            $this->espiraculo = $espiraculo;
        }
    
        public function amamentar() {}
        public function nadar() {}
    }