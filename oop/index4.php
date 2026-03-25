<?php
    class Model {
        public static $tabela = 'osnovna';

        public static function getTabela() {
            return static::$tabela;
        }
    }

    class User extends Model {
        public static $tabela = 'korisnicka';
    }

    echo User::getTabela();
?>
