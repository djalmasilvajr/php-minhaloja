<?php
class BD {
    static function conectar()   {
        $conexao = obterConexao();
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        return $conexao;
    }

    static function obterConexao() {
        //return BD::obterConexaoConfiguracaoDefinidaNaApp();
        return BD::obterConexaoPeloPHPIni();
    }

    static function obterConexaoConfiguracaoDefinidaNaApp() {
        return new mysqli('localhost','root','root','loja');
    }

    static function obterConexaoPeloPHPIni() {
        $user = ini_get('mysqli.default_user');
        $password = ini_get('mysqli.default_pw');
        $host = ini_get('mysqli.default_host');
        return new mysqli($host,$user,$password,'loja');
    }
}
?>