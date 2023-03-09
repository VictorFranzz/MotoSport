<?php
/**
 * Classe padrao de criação de telas
 */
class class_tela {

    private $layout;

    private $nome;

    private $style;

    /**
     * Contrutor da class tela para criação de outras telas
     * @param [string] $sNome
     */
    protected function __construct($sNome){
        $this->setNomeTela($sNome);
        $this->criaTela();
    }

    /**
     * Metodo para ser chamado para criação da tela 
     * @return void
     */
    protected function criaTela() {
        $this->criaHtml();
    }

    /**
     * Cria o html da tela
     * @return void
     */
    private function criaHtml() {
        echo '<html lang="pt-br">
              <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>'.$this->getNomeTela().'</title>
                <link rel="stylesheet" href="'.$this->getStyleTela().'.css">
              </head>
              <body>'.$this->getLayout().'</body>';
        
    }

    /**
     * Cria os campos da tela
     *
     * @param [string] $sTipo
     * @param [string] $sNome
     * @param string $sPlaceHolder
     * @param boolean $bCriaLabel
     * @return void
     */
    protected function criaCampo($sTipo, $sNome, $sPlaceHolder = '', $bCriaLabel = false){
        $sLabel = '';
        if ($bCriaLabel) {
            $sLabel = '<label>'.$sNome.'</label>';
        }
        $sCampo = '<input type="'.$sTipo.'" placeholder="'.$sPlaceHolder.'">';
        return $sLabel.$sCampo;
    }

    protected function getLayout() {
        return $this->layout;
    }

    protected function setLayout($sLayout) {
        $this->layout = $sLayout;
    }

    protected function getNomeTela() {
        return $this->nome;
    }

    protected function setNomeTela($sNome) {
        $this->nome = $sNome;
    }

    protected function getStyleTela() {
        return $this->style;
    }

    protected function setStyleTela($sStyle) {
        $this->style = $sStyle;
    }
}
?>