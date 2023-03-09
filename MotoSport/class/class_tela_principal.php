<?php
include "../autoload.php";

/**
 * Tela principal do site
 */
class class_tela_principal extends class_tela {
 
    /**
     * @inheritdoc
     */
    public function __construct(){
        parent::__construct('Tela Principal');
    }

    /**
     * @inheritdoc
     */
    protected function criaTela(){
        $aValores = ['RR1000','CBR1000RR','MT09','Z1000','Z900'];
        $sDiv = '<div class="flex-container">
                    <header class="header">MotoSport</header>
                    <aside class="aside aside1">
                        <li><a href="class_tela_login.php">Entrar</a></li>
                    </aside>
                    <article class="main">
                        <p>'.$this->getLista($aValores).'</p>
                    </article>
                    <aside class="aside aside2">TelaDireita</aside>
                    <footer class="footer">rodape</footer>
                </div>';
        $this->setLayout($sDiv);
        $this->setStyleTela('class_style_principal');
        parent::criaTela();
    }

    /**
     * Cria a lista com os valores passados por array
     *
     * @param [array] $aValores
     * @return void
     */
    protected function getLista($aValores) {
        $sLista = '<ol type="I">';
        foreach ($aValores as $sValor) {
            $sLista .= '<li>'.$sValor.'</li>';
        }
        $sLista .= '</ol>';
        return $sLista;
    }
}
$oTela = new class_tela_principal();

?>