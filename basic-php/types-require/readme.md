# include <arquivo>
- A instrução include() inclui e avalia o arquivo informado. Seu código (variáveis,
objetos e arrays) entra no escopo do programa, tornando-se disponível a partir da
linha em que a inclusão ocorre. Se o arquivo não existir, produzirá uma mensagem
de advertência (warning).

# require <arquivo>
- Idêntico ao include. Difere somente na manipulação de erros. Enquanto o include
produz uma warning, o require produz uma mensagem de Fatal Error caso o
arquivo não exista.

# include_once <arquivo>
- Funciona da mesma maneira que o comando include, a não ser que o arquivo
informado já tenha sido incluído, não refazendo a operação (o arquivo é incluído
apenas uma vez). Este comando é útil em casos em que o programa pode passar
mais de uma vez pela mesma instrução. Assim, evitará sobreposições, redeclarações etc.

# require_once <arquivo>
- Funciona da mesma maneira que o comando require, a não ser que o arquivo
informado já tenha sido incluído, não refazendo a operação (o arquivo é incluído
apenas uma vez). Este comando é útil em casos em que o programa pode passar
mais de uma vez pela mesma instrução. Assim, poderá-se evitar sobreposições,
redeclarações etc.