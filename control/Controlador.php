<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controlador
 *
 * @author HP
 */

class Controlador {
    
    public static $bancoServidor; 
    
    public static $bancoNome; 
    
    public static $bancoUsuario;
    
    public static $bancoSenha;
    
    private static $ftpHost;
    
    private static $ftpLogin;
    
    private static $ftpSenha;
    
    public static $view;
    
    public static $urlHost;
    
    public static $queryString;

    



    public static function verificaUrl(){
        
        self::$queryString = array();
        
        $dadosDominio = parse_ini_file("control/config.ini",true);
        $tempUrl1 = strrchr($_SERVER['REQUEST_URI'],"?");
        //retirnado o caracter ? da query string
        $tempUrl1 = str_replace('?','', $tempUrl1);
        
        
        if(empty($tempUrl1)){
            self::$view = 1;
        }else{
            //existem mais de um argumento na query string 
            if(substr_count($tempUrl1, "&")>0){
                $tempUrl2 = explode("&", $tempUrl1);    
                //pegar variavel da querry e coloca em um array
                foreach ($tempUrl2 as $value) {
                    $value = explode("=", $value);
                    self::$queryString[$value[0]]= $value[1];
                    self::$view = self::$queryString["pagina"];
                }
                
            }else{
                $tempUrl2 = explode("=", $tempUrl1);
                self::$queryString[$tempUrl2[0]] = $tempUrl2[1];
                //verifica se a chave pagian existe e carrega a view
                if(array_key_exists("pagina", self::$queryString)){
                    self::$view = self::$queryString["pagina"];
                }
            }
        }
        
    }
    
    
     /**
     * Método para carregar configurações necessarias para operação do
     *  controlador.A variavél $modoOperação quando seu valor igual a "oper",
     * solucao em operacao no host, quando em "prod" solução em modo de 
     * produção.Cada modo carregará as configurações do arquivo config 
     * ao modo correspondente relativas a cada modo, os parametros de cada
     * modo encontram-se no arquivo config do diretório control. 
     *
     * @var $modoOperação "oper",solucao em operacao no host, "prod"
     * solução em modo de produção.Cada modo carregará as configurações
      * do arquivo config relativas a cada modo.
     */

    public static function carregaConfigControlador($modoOperacao){
        //carregando arquivos de configuracoes.
        $dadosBanco = parse_ini_file("control/config.ini",true);
        if($modoOperacao == "prod"){
            self::$bancoServidor = $dadosBanco['prod']['servidor'];
            self::$bancoNome = $dadosBanco['prod']['banco'];
            self::$bancoUsuario = $dadosBanco['prod']['login'];
            self::$bancoSenha = $dadosBanco['prod']['senha'];    
        }
    
        if($modoOperacao == "oper"){
            self::$bancoServidor = $dadosBanco['oper']['servidor'];
            self::$bancoNome = $dadosBanco['oper']['banco'];
            self::$bancoUsuario = $dadosBanco['oper']['login'];
            self::$bancoSenha = $dadosBanco['oper']['senha'];
            //informacoes ftp
            self::$ftpHost = $dadosBanco['ftp']['host'];
            self::$ftpLogin = $dadosBanco['ftp']['login'];
            self::$ftpSenha = $dadosBanco['ftp']['senha'];
        }

    } 
    
    public static function carregaTemplate($template){
        require_once 'view/'.$template.".php";
    }

        /**
     * Método para carregar a view e o controle para cada página,$view recebe 
     * valores inteiros,esse valores tem indexado o nome de cada pagina php 
     * que contem a view e o controller selecionado, o valor não pode ser menor
      * que 1.
     * 
     * O arquivo para configuração encontra-se no arquivo config do diretorio
     * view.Caso nao seja passado ou no inicio sempre carrega a view=1
     * 
     *  Obs: para carregar apenas a view ,no arquivo o mesmo indice no controller
     * do arquivo config deve estar vazio e respctivamente para carregar apenas
     * o controller o mesmo indice da view deve estar vazio. 
     *
     */
    public static function carregarCarregarView($view = 1){
    

        //carrega  as configurações predefinadas da view e do controle da operacao
        $configView = parse_ini_file("view/config.ini",true);
        //verifica se existe a controller e carrega primeiro      
        if($view != ''){
            
            if(file_exists('control/'.$configView['controller'][$view].".php")){
                require_once 'control/'.$configView['controller'][$view].'.php';
            }else{
                //carregar pagina ou gera exception qual melhor??
            }
            
            if(file_exists('view/'.$configView['view'][$view].".php")){
                require_once 'view/'.$configView['view'][$view].'.php';
            }else{
                //carregar pagina ou gera exception qual melhor?? 
            }
        }
    }
    //primeiro metodo a ser chamado pelo controlador
    public static function iniciaUseSession(){
        
        if(!isset($_SESSION)){
            session_start();
        }
        
    }

}

?>
