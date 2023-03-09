<?php
include "../autoload.php";

/**
 * Tela de login do site
 */
class class_tela_login extends class_tela {
 
    /**
     * @inheritdoc
     */
    public function __construct(){
        parent::__construct('Tela Login');
    }

    /**
     * @inheritdoc
     */
    protected function criaTela(){
        $sDiv = '<h2>MotoSport</h2>
                 <div>
                    <h1>Login</h1>
                        '.$this->criaCampo('text','Nome').'
                    <br><br>
                        '.$this->criaCampo('password','Senha').'
                    <br><br>
                    <button>
                        <a href="class_tela_principal.php">Entrar</a>
                    </button>
                 </div>';
        $this->setLayout($sDiv);
        $this->setStyleTela('class_style_login');
        parent::criaTela();
    }
}
$oTela = new class_tela_login();

?>