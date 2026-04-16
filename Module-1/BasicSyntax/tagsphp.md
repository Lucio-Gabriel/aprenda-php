# Tags PHP

- Quando o PHP processa um arquivo, ele reconhece as etiquetas de abertura e fechamento, <?php e ?>, para definir os limites da execução de código PHP. O conteúdo fora destas etiquetas é ignorado pelo interpretador PHP, permitindo que o PHP seja incluído em vários tipos de documentos.

### Exemplo #1 Tags de Abertura e Fechamento do PHP
1.  <?php echo 'Se quiser servir código PHP em documentos XHTML ou XML,
                use essas tags'; ?>

2.  A tag echo curta <?= 'imprima essa string' ?> também pode ser usada.
    Ela é equivalente a <?php echo 'imprima essa string' ?>.

3.  <? echo 'Este código está entre tags curtas, mas só funcionará '.
            'se a diretiva short_open_tag estiver habilitada'; ?>

As tags curtas (exemplo 3) estão disponíveis por padrão, mas podem ser desabilitadas através da diretiva short_open_tag no arquivo de configuração php.ini, ou estarão desabilitadas por padrão se o PHP for compilado com a configuração --disable-short-tags.

- Se um arquivo terminar com código PHP, é preferível omitir a tag de fechamento do PHP no final do arquivo. Isso evita que espaços em branco ou novas linhas sejam adicionados acidentalmente após a tag de fechamento do PHP, o que pode causar efeitos indesejados, porque o PHP iniciará o buffer de saída quando não houver intenção de enviar qualquer saída naquele ponto do script.

### Exemplo #2 Arquivo apenas com código PHP
<?php
echo "Olá Mundo\n";

// ... mais código

echo "Última instrução\n";

// o script termina aqui sem a tag de fechamento do PHP