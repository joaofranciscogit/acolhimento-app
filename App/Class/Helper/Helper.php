<?php

namespace Autoload\Class\Helper;

use DateTime;

class Helper {

    public function csrfToken() {
        $token = bin2hex(random_bytes(32));
        $_SESSION['csrf_token'] = $token;
        return $token;
    }

    public function activeLink($name) {
        if (CONFIG['config_module'] == $name || CONFIG['config_name'] == $name) {
            echo "active";
        }
    }

    public function linkName($texto) {
        $texto = strtolower($texto);
        $palavras_comuns = ['de', 'do', 'da', 'dos', 'das', 'e', 'a', 'o', 'as', 'os'];
        $palavras = explode(' ', $texto);
        $palavras = array_diff($palavras, $palavras_comuns);
        $texto = implode(' ', $palavras);
        $texto = strtr($texto, 'áàãâäéèêëíìîïóòõôöúùûüñç', 'aaaaaeeeeiiiiooooouuuunc');
        $texto = preg_replace('/[^a-z0-9]+/', '-', $texto);
        $texto = preg_replace('/-+/', '-', $texto);
        $texto = trim($texto, '-');
        return $texto;
    }

    public function stringLimiter($texto, $limite) {
        if (mb_strlen($texto) <= $limite) {
            return $texto;
        } else {
            return mb_substr($texto, 0, $limite) . '...';
        }
    }

    public function semanaDoMes($data) {
        $numeroSemana = date('W', strtotime($data));
        $numeroDia = date('j', strtotime($data));
        $semanaDoMes = min(4, ceil($numeroDia / 7));
        return $semanaDoMes;
    }

    public function generateCode($type = 'alphanumeric', $tamanho = 8, $prefixo = '', $sufixo = '', $case = 'mixed') {
        $codigo = '';
        $caracteres = '';
    
        switch ($type) {
            case 'numeric':
                $caracteres = '0123456789';
                break;
            case 'alpha':
                $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                break;
            case 'alphanumeric':
            default:
                $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                break;
        }
    
        $max = strlen($caracteres) - 1;
        for ($i = 0; $i < $tamanho; $i++) {
            $codigo .= $caracteres[random_int(0, $max)];
        }
    
        // Ajusta o código com base no parâmetro $case
        if ($case == 'uppercase') {
            $codigo = strtoupper($codigo);
        } elseif ($case == 'lowcase') {
            $codigo = strtolower($codigo);
        }
    
        return $prefixo . $codigo . $sufixo;
    }
    

    public function calculaIdade($data_nascimento) {
        $nascimento = new DateTime($data_nascimento);
        $hoje = new DateTime();
        $idade = $hoje->diff($nascimento);
        return $idade->y;
    }

    public function validateData($type, $data) {
        if ($type == 'countData') {
            if (count($data) > 0) {
                return $data;
            } else {
                header('location: 404');
            }
        }

        if ($type == 'issetData') {
            if (isset($data)) {
                return $data;
            } else {
                header('location: 404');
            }
        }

        if ($type == 'issetModuloReferenciaData') {
            if (isset($data)) {
                return $data;
            } else {
                return false;
            }
        }
    }

    public function formatarData($data) {
        $meses = [
            1 => "janeiro", "fevereiro", "março", "abril", "maio", "junho", 
            "julho", "agosto", "setembro", "outubro", "novembro", "dezembro"
        ];

        $dia = $data->format('d');
        $mes = $meses[(int)$data->format('m')];
        $ano = $data->format('Y');
        $hora = $data->format('H:i');

        if ($hora != '00:00') {
            return "Dia $dia de $mes de $ano às $hora";
        } else {
            return "Dia $dia de $mes de $ano";
        }
    }

    function formatarDataBar($data) {
        // Converte a data para o formato dia/mês/ano
        return date('d/m/Y', strtotime($data));
    }

    public function gerarCodigoRastreamento($origem, $numero, $destino, $tamanho) {
        return $origem . str_pad($numero, $tamanho, "0", STR_PAD_LEFT) . $destino;
    }

    public function authLoginController($location){
        if(isset($_SESSION['conta'])){
            header('location: '.$location);
        }
    }

    public function authGeneralController($location){
        if(!isset($_SESSION['conta'])){
            header('location: '.$location);
        }
    }

}
