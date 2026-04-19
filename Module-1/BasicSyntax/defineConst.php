<?php

define("VERSAO_APP", "1.0.0");
define("DATABASE_URL", "localhost:3306");

const TAXA_SERVICO = 0.5;

class Setting {
    const PREFIXO = "PHP_";
}

echo VERSAO_APP;
echo Setting::PREFIXO;