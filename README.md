# 🐘 PHP — Do Zero ao Arquiteto de Software
> Roadmap completo e progressivo para se tornar um desenvolvedor PHP expert/arquiteto de software.
> Marque cada item conforme for concluindo. Seja honesto consigo mesmo — domine antes de avançar.

---

## 📋 Como usar este roadmap

- [ ] Leia cada seção antes de começar
- [ ] Marque apenas o que você realmente praticou (não só leu)
- [ ] Crie projetos reais para fixar cada bloco
- [ ] Revise periodicamente os itens já marcados

---

## 🟢 FASE 1 — Fundamentos Absolutos

> Pré-requisito: lógica de programação básica. Duração estimada: 3–6 semanas.

### 1.1 Ambiente de Desenvolvimento

- [✅] Instalar PHP via pacote (XAMPP, Laragon ou instalação nativa)
- [✅] Entender o que é o `php.ini` e suas configurações principais
- [✅] Configurar o PHP CLI (rodar scripts pelo terminal)
- [✅] Usar o servidor embutido do PHP (`php -S localhost:8000`)
- [✅] Instalar e configurar o Composer (gerenciador de dependências)
- [✅] Configurar um editor (VS Code com extensões PHP Intelephense, PHP CS Fixer)
- [✅] Entender a estrutura de um projeto PHP básico

### 1.2 Sintaxe Básica

- [ ] Tags PHP (`<?php`, `<?=`, diferença entre elas)
- [ ] Comentários (`//`, `#`, `/* */`)
- [ ] `echo` vs `print` — diferenças e quando usar
- [ ] `var_dump()`, `print_r()`, `var_export()` para debug
- [ ] Ponto e vírgula e boas práticas de formatação
- [ ] Case sensitivity no PHP (variáveis vs funções)

### 1.3 Tipos de Dados e Variáveis

- [ ] Variáveis (`$nome`) e convenções de nomenclatura
- [ ] Tipos escalares: `string`, `int`, `float`, `bool`
- [ ] Tipos compostos: `array`, `object`
- [ ] Tipos especiais: `null`, `resource`
- [ ] `gettype()` e `settype()`
- [ ] Tipagem dinâmica vs tipagem estática (declarações de tipo)
- [ ] Constantes com `define()` e `const`
- [ ] Constantes predefinidas (`PHP_VERSION`, `PHP_EOL`, `PHP_INT_MAX`, etc.)
- [ ] Variáveis variáveis (`$$var`)

### 1.4 Operadores

- [ ] Aritméticos (`+`, `-`, `*`, `/`, `%`, `**`)
- [ ] Atribuição (`=`, `+=`, `-=`, `.=`, etc.)
- [ ] Comparação (`==`, `===`, `!=`, `!==`, `<`, `>`, `<=>`)
- [ ] Lógicos (`&&`, `||`, `!`, `and`, `or`, `xor`)
- [ ] Incremento/Decremento (`++`, `--`)
- [ ] Concatenação (`.`)
- [ ] Operador ternário (`? :`)
- [ ] Operador null coalescing (`??`)
- [ ] Operador de supressão de erros `@` (e por que evitá-lo)
- [ ] Operador spread (`...`)

### 1.5 Estruturas de Controle

- [ ] `if`, `elseif`, `else`
- [ ] Sintaxe alternativa (`if(): ... endif;`)
- [ ] `switch` / `case`
- [ ] `match` (PHP 8+) e diferenças para `switch`
- [ ] `while`
- [ ] `do...while`
- [ ] `for`
- [ ] `foreach` com chave e valor
- [ ] `break` e `continue` com níveis
- [ ] `return`
- [ ] Operador de navegação segura (`?->`) PHP 8+

### 1.6 Strings

- [ ] Aspas simples vs aspas duplas (interpolação)
- [ ] Heredoc e Nowdoc
- [ ] Funções essenciais: `strlen()`, `strtolower()`, `strtoupper()`, `trim()`
- [ ] `substr()`, `strpos()`, `str_replace()`, `str_contains()`, `str_starts_with()`, `str_ends_with()`
- [ ] `explode()` e `implode()`
- [ ] `sprintf()` e `printf()`
- [ ] `number_format()`
- [ ] `nl2br()`, `htmlspecialchars()`, `htmlentities()`
- [ ] `strip_tags()`
- [ ] `str_pad()`, `str_repeat()`
- [ ] `ucfirst()`, `ucwords()`
- [ ] Expressões regulares com `preg_match()`, `preg_replace()`, `preg_split()`

### 1.7 Arrays

- [ ] Arrays indexados
- [ ] Arrays associativos
- [ ] Arrays multidimensionais
- [ ] `count()`, `sizeof()`
- [ ] `array_push()`, `array_pop()`, `array_shift()`, `array_unshift()`
- [ ] `array_merge()`, `array_combine()`, `array_diff()`, `array_intersect()`
- [ ] `in_array()`, `array_key_exists()`, `isset()`
- [ ] `sort()`, `rsort()`, `asort()`, `ksort()`
- [ ] `usort()`, `uasort()`, `uksort()` (sort com callback)
- [ ] `array_map()`, `array_filter()`, `array_reduce()`
- [ ] `array_unique()`, `array_flip()`, `array_reverse()`
- [ ] `array_slice()`, `array_splice()`
- [ ] `array_chunk()`
- [ ] `compact()` e `extract()`
- [ ] Spread operator em arrays (`...$array`)
- [ ] Funções com arrays: `list()` / desestruturação

### 1.8 Funções

- [ ] Declarar funções com `function`
- [ ] Parâmetros padrão
- [ ] Parâmetros nomeados (PHP 8+)
- [ ] Parâmetros variádicos (`...$args`)
- [ ] Passagem por valor vs passagem por referência (`&$param`)
- [ ] Escopo de variáveis (`global`, `static`)
- [ ] Funções anônimas (closures)
- [ ] Arrow functions (`fn() =>`)
- [ ] Callbacks e callables
- [ ] Recursão e casos de uso
- [ ] Funções de primeira classe (PHP 8.1+)
- [ ] Tipagem de parâmetros e retorno
- [ ] `declare(strict_types=1)` e implicações

---

## 🔵 FASE 2 — PHP Intermediário

> Duração estimada: 4–8 semanas.

### 2.1 Orientação a Objetos (OOP)

- [ ] O que é OOP e por que usar
- [ ] Classes e objetos (`class`, `new`)
- [ ] Propriedades e métodos
- [ ] Modificadores de acesso: `public`, `protected`, `private`
- [ ] Construtor `__construct()` e destrutor `__destruct()`
- [ ] `$this` — referência ao objeto atual
- [ ] Herança (`extends`)
- [ ] Sobrescrita de métodos (`override`)
- [ ] `parent::` — chamando método da classe pai
- [ ] Classes abstratas (`abstract class`)
- [ ] Interfaces (`interface` e `implements`)
- [ ] Interfaces múltiplas
- [ ] Traits (`use`) — composição horizontal
- [ ] Membros estáticos (`static`, `self::`, `static::`)
- [ ] Late static binding (`static::`)
- [ ] Constantes de classe (`const`)
- [ ] Enumerations — Enums (PHP 8.1+)
- [ ] Readonly properties (PHP 8.1+)
- [ ] Readonly classes (PHP 8.2+)
- [ ] Interseção de tipos (PHP 8.1+)
- [ ] Fibers (PHP 8.1+)
- [ ] Magic methods: `__get`, `__set`, `__isset`, `__unset`
- [ ] Magic methods: `__toString`, `__invoke`, `__clone`
- [ ] Magic methods: `__call`, `__callStatic`
- [ ] Magic methods: `__sleep`, `__wakeup`, `__serialize`, `__unserialize`
- [ ] Clonagem de objetos (`clone`)
- [ ] Comparação de objetos (`==` vs `===`)
- [ ] Type hinting — union types (`int|string`)
- [ ] Nullable types (`?string`)
- [ ] Named arguments
- [ ] `instanceof`
- [ ] Autoloading com PSR-4 e Composer

### 2.2 Manipulação de Erros e Exceções

- [ ] Tipos de erros: `E_ERROR`, `E_WARNING`, `E_NOTICE`, `E_DEPRECATED`
- [ ] `error_reporting()` e configuração no `php.ini`
- [ ] `set_error_handler()` — handler customizado
- [ ] `trigger_error()` — disparar erros manualmente
- [ ] `try`, `catch`, `finally`
- [ ] Lançar exceções com `throw`
- [ ] Criar exceções customizadas (extends `Exception`)
- [ ] Hierarquia de exceções (`Exception` vs `Error`)
- [ ] Múltiplos `catch` com tipos diferentes
- [ ] Capturar múltiplos tipos em um catch (PHP 8+)
- [ ] `set_exception_handler()` — handler global
- [ ] Exceções e logging (PSR-3)

### 2.3 Formulários e HTTP

- [ ] `$_GET`, `$_POST`, `$_REQUEST`
- [ ] `$_SERVER` — variáveis do servidor e requisição
- [ ] `$_FILES` — upload de arquivos
- [ ] `$_COOKIE` e `setcookie()`
- [ ] `$_SESSION`, `session_start()`, `session_destroy()`
- [ ] `header()` — redirecionamentos e cabeçalhos HTTP
- [ ] Métodos HTTP: GET, POST, PUT, PATCH, DELETE
- [ ] Sanitização de dados: `filter_input()`, `filter_var()`
- [ ] Validação de dados (email, URL, IP, int, float)
- [ ] Proteção contra XSS com `htmlspecialchars()`
- [ ] CSRF — conceito e proteção básica com tokens
- [ ] Método `$_SERVER['REQUEST_METHOD']`

### 2.4 Banco de Dados — PDO e MySQLi

- [ ] Diferença entre PDO e MySQLi
- [ ] Conectar ao MySQL com PDO
- [ ] DSN (Data Source Name)
- [ ] Executar queries com `query()` e `exec()`
- [ ] Prepared statements — `prepare()` e `execute()`
- [ ] Bind parameters (`bindParam`, `bindValue`)
- [ ] Fetch de resultados: `fetch()`, `fetchAll()`, `fetchColumn()`
- [ ] Modos de fetch: `PDO::FETCH_ASSOC`, `FETCH_OBJ`, `FETCH_CLASS`
- [ ] Transações: `beginTransaction()`, `commit()`, `rollBack()`
- [ ] Tratamento de erros com PDO (`PDO::ERRMODE_EXCEPTION`)
- [ ] SQL Injection — entender e prevenir completamente
- [ ] CRUD completo com PDO

### 2.5 Manipulação de Arquivos

- [ ] `fopen()`, `fclose()`, `fread()`, `fwrite()`
- [ ] `file_get_contents()` e `file_put_contents()`
- [ ] `file_exists()`, `is_file()`, `is_dir()`
- [ ] `mkdir()`, `rmdir()`, `unlink()`, `rename()`, `copy()`
- [ ] `scandir()` e `glob()`
- [ ] `pathinfo()`, `basename()`, `dirname()`, `realpath()`
- [ ] Leitura linha a linha: `fgets()`, `file()`
- [ ] Upload de arquivos: validação de tipo, tamanho e extensão
- [ ] Streams e wrappers (`php://input`, `php://output`)
- [ ] Manipulação de CSV com `fgetcsv()` e `fputcsv()`

### 2.6 Datas e Tempo

- [ ] `date()` e `mktime()`
- [ ] `time()` e timestamps Unix
- [ ] `strtotime()` — parsing de strings de data
- [ ] Classe `DateTime` e `DateTimeImmutable`
- [ ] `DateInterval` e `DatePeriod`
- [ ] Timezones: `date_default_timezone_set()`, `DateTimeZone`
- [ ] Formatação e parsing de datas internacionais
- [ ] Comparação de datas com objetos DateTime
- [ ] Carbon (biblioteca popular — pré-requisito: Composer)

### 2.7 JSON e Serialização

- [ ] `json_encode()` e opções de formatação
- [ ] `json_decode()` com array vs objeto
- [ ] Tratamento de erros JSON (`json_last_error()`)
- [ ] `serialize()` e `unserialize()` — uso e riscos
- [ ] Conversão entre arrays e objetos

---

## 🟠 FASE 3 — PHP Avançado

> Duração estimada: 6–10 semanas.

### 3.1 Padrões de Projeto (Design Patterns)

#### Criacionais
- [ ] Singleton
- [ ] Factory Method
- [ ] Abstract Factory
- [ ] Builder
- [ ] Prototype

#### Estruturais
- [ ] Adapter
- [ ] Decorator
- [ ] Facade
- [ ] Proxy
- [ ] Composite
- [ ] Bridge

#### Comportamentais
- [ ] Observer / Event Listener
- [ ] Strategy
- [ ] Command
- [ ] Chain of Responsibility
- [ ] Template Method
- [ ] Iterator
- [ ] State
- [ ] Mediator

### 3.2 Princípios SOLID

- [ ] **S** — Single Responsibility Principle (SRP)
- [ ] **O** — Open/Closed Principle (OCP)
- [ ] **L** — Liskov Substitution Principle (LSP)
- [ ] **I** — Interface Segregation Principle (ISP)
- [ ] **D** — Dependency Inversion Principle (DIP)
- [ ] Aplicar SOLID em um projeto real refatorando código legado

### 3.3 Arquitetura de Software

- [ ] MVC — Model View Controller (implementar do zero)
- [ ] MVP — Model View Presenter
- [ ] MVVM — Model View ViewModel
- [ ] ADR — Action Domain Responder
- [ ] Arquitetura em Camadas (Layered Architecture)
- [ ] Hexagonal Architecture (Ports & Adapters)
- [ ] Clean Architecture — entender as camadas
- [ ] Domain-Driven Design (DDD) — conceitos básicos
  - [ ] Entities
  - [ ] Value Objects
  - [ ] Aggregates
  - [ ] Repositories
  - [ ] Services
  - [ ] Domain Events
  - [ ] Bounded Contexts
  - [ ] Ubiquitous Language
- [ ] CQRS — Command Query Responsibility Segregation
- [ ] Event Sourcing — conceito e implementação básica

### 3.4 Injeção de Dependência e Containers

- [ ] O que é Dependency Injection (DI)
- [ ] Constructor injection
- [ ] Setter injection
- [ ] Interface injection
- [ ] Container de DI — conceito
- [ ] Implementar um container simples do zero
- [ ] PSR-11 — Container Interface
- [ ] PHP-DI (popular container)
- [ ] Autowiring

### 3.5 Composer e Gerenciamento de Pacotes

- [ ] `composer.json` — estrutura completa
- [ ] `require` vs `require-dev`
- [ ] `composer install` vs `composer update`
- [ ] `composer.lock` — importância no versionamento
- [ ] Autoloading PSR-4 customizado
- [ ] Scripts no `composer.json`
- [ ] Versionamento semântico (semver)
- [ ] Criar e publicar um pacote no Packagist
- [ ] Monorepos com Composer
- [ ] `composer dump-autoload`, `--optimize`

### 3.6 Testes Automatizados

#### PHPUnit
- [ ] Instalar e configurar PHPUnit
- [ ] Testes unitários básicos
- [ ] Assertions mais utilizadas
- [ ] Test Doubles: Mocks, Stubs, Spies, Fakes, Dummies
- [ ] `setUp()` e `tearDown()`
- [ ] Data Providers (`@dataProvider`)
- [ ] Testar exceções
- [ ] Code Coverage — gerar relatórios
- [ ] `phpunit.xml` — configuração

#### Conceitos
- [ ] TDD — Test Driven Development (ciclo Red/Green/Refactor)
- [ ] BDD — Behavior Driven Development
- [ ] Testes de integração
- [ ] Testes funcionais / end-to-end
- [ ] Pirâmide de testes
- [ ] Mutation testing (Infection PHP)

### 3.7 Segurança em PHP

- [ ] OWASP Top 10 — conhecer todas as vulnerabilidades
- [ ] SQL Injection — prevenção total com PDO
- [ ] XSS — Cross-Site Scripting (refletido, armazenado, DOM)
- [ ] CSRF — proteção com tokens síncronos
- [ ] Injeção de Comandos (`shell_exec`, `exec`)
- [ ] Path Traversal — validação de caminhos de arquivo
- [ ] Upload de arquivos — validação segura
- [ ] Exposição de dados sensíveis
- [ ] Autenticação segura (senhas com `password_hash()`, `password_verify()`)
- [ ] `bcrypt` vs `argon2id` — quando usar cada um
- [ ] Proteção de sessão (regenerar IDs, flags de cookies)
- [ ] HTTPS e cabeçalhos de segurança HTTP
- [ ] Content Security Policy (CSP)
- [ ] Rate limiting básico
- [ ] Sanitização vs Validação vs Escape — diferenças
- [ ] `openssl` para criptografia

### 3.8 APIs e Integração

#### REST
- [ ] Princípios REST (stateless, resources, uniform interface)
- [ ] Verbos HTTP e uso correto
- [ ] Status codes HTTP e semântica
- [ ] HATEOAS — conceito
- [ ] Versionamento de APIs
- [ ] Autenticação: Basic Auth, API Key, Bearer Token
- [ ] JWT — JSON Web Token (estrutura, assinar, validar)
- [ ] OAuth 2.0 — fluxos principais
- [ ] Documentação com OpenAPI/Swagger

#### Consumindo APIs
- [ ] cURL com PHP
- [ ] `file_get_contents()` com contexto HTTP
- [ ] Guzzle HTTP Client
- [ ] Tratamento de erros em chamadas HTTP
- [ ] Retry, timeout e circuit breaker

#### GraphQL
- [ ] Conceitos básicos de GraphQL
- [ ] Implementar GraphQL em PHP (webonyx/graphql-php)

---

## 🔴 FASE 4 — PHP Expert

> Duração estimada: 8–16 semanas.

### 4.1 Performance e Otimização

- [ ] Profiling com Xdebug e Blackfire
- [ ] Análise de gargalos (bottlenecks)
- [ ] OpCache — configurar e entender o funcionamento
- [ ] Estratégias de cache: in-memory, file cache, distributed
- [ ] Redis — instalar, configurar e usar em PHP
- [ ] Memcached — uso em PHP
- [ ] Cache de queries no banco de dados
- [ ] Lazy loading vs eager loading
- [ ] N+1 problem — identificar e resolver
- [ ] Pagination eficiente (cursor-based vs offset)
- [ ] Indexes no banco de dados
- [ ] Query optimization e EXPLAIN no MySQL
- [ ] Compressão de assets e respostas HTTP (gzip)
- [ ] CDN e cacheamento estático
- [ ] Connection pooling

### 4.2 Bancos de Dados Avançado

- [ ] Migrations — conceito e implementação manual
- [ ] Seeds e Fixtures
- [ ] Repository Pattern com banco de dados
- [ ] Active Record vs Data Mapper
- [ ] Transações distribuídas
- [ ] Banco de dados NoSQL com PHP (MongoDB, Redis)
- [ ] Elasticsearch com PHP
- [ ] Migrations com múltiplos bancos
- [ ] Read replicas e sharding — conceitos
- [ ] Soft delete — implementação e impactos

### 4.3 Programação Assíncrona e Concorrência

- [ ] PHP síncrono vs assíncrono — limitações nativas
- [ ] ReactPHP — event loop
- [ ] Swoole / OpenSwoole — corrotinas em PHP
- [ ] Amphp — async PHP
- [ ] Fibers (PHP 8.1) — cooperativa multitasking
- [ ] Workers e background jobs
- [ ] Filas de mensagens: conceito e uso em PHP
- [ ] RabbitMQ com PHP
- [ ] Kafka com PHP (conceito)
- [ ] Horizon (Laravel) ou filas customizadas

### 4.4 CLI e Automação

- [ ] Criar scripts de linha de comando com PHP
- [ ] `$argv` e `$argc`
- [ ] `getopt()` para parâmetros
- [ ] Symfony Console Component
- [ ] Cores no terminal (ANSI)
- [ ] Interação com o usuário via CLI
- [ ] Cron jobs com PHP
- [ ] Scripts de deploy e automação
- [ ] Makefile para automatizar tarefas PHP

### 4.5 Ferramentas de Qualidade de Código

- [ ] PHP_CodeSniffer (phpcs) — PSR-12
- [ ] PHP-CS-Fixer — formatação automática
- [ ] PHPStan — análise estática (níveis 0–9)
- [ ] Psalm — análise estática alternativa
- [ ] PHPMD — PHP Mess Detector
- [ ] Rector PHP — refatoração automatizada
- [ ] Git hooks com Husky ou `composer scripts`
- [ ] CI/CD pipeline com testes e qualidade
- [ ] SonarQube — análise de código
- [ ] Definir e documentar padrões de código do projeto

### 4.6 DevOps para PHP Developers

- [ ] Docker com PHP — criar imagem customizada
- [ ] Docker Compose com PHP + MySQL + Redis + Nginx
- [ ] `Dockerfile` para produção (multi-stage build)
- [ ] Nginx vs Apache — configuração para PHP
- [ ] PHP-FPM — configuração e tuning
- [ ] Variáveis de ambiente e `.env`
- [ ] Deployments: FTP (legado), Git pull, CI/CD
- [ ] Kubernetes — conceitos básicos para PHP apps
- [ ] GitHub Actions com PHP
- [ ] GitLab CI/CD com PHP
- [ ] Monitoramento: Sentry, New Relic, Datadog
- [ ] Health checks e readiness probes

### 4.7 PHP Standards Recommendations (PSR)

- [ ] PSR-1 — Basic Coding Standard
- [ ] PSR-2 — Coding Style (legado, substituído por PSR-12)
- [ ] PSR-3 — Logger Interface
- [ ] PSR-4 — Autoloading Standard
- [ ] PSR-6 — Caching Interface
- [ ] PSR-7 — HTTP Message Interface
- [ ] PSR-11 — Container Interface
- [ ] PSR-12 — Extended Coding Style
- [ ] PSR-14 — Event Dispatcher
- [ ] PSR-15 — HTTP Handlers (Middleware)
- [ ] PSR-16 — Simple Cache
- [ ] PSR-17 — HTTP Factories
- [ ] PSR-18 — HTTP Client

### 4.8 Microsserviços com PHP

- [ ] Monolito vs Microsserviços — tradeoffs
- [ ] Comunicação síncrona entre serviços (HTTP/REST, gRPC)
- [ ] Comunicação assíncrona (mensageria)
- [ ] Service Discovery
- [ ] API Gateway
- [ ] Circuit Breaker Pattern
- [ ] Sagas — transações distribuídas
- [ ] Contrato de APIs entre serviços
- [ ] Health checks e observabilidade
- [ ] Tracing distribuído (OpenTelemetry)

---

## 🟣 FASE 5 — Arquiteto de Software

> Duração estimada: contínua. Foco em liderança técnica e visão sistêmica.

### 5.1 Arquitetura de Sistemas

- [ ] Documentar arquiteturas com C4 Model
- [ ] Architecture Decision Records (ADR)
- [ ] Diagramas de sequência, fluxo e implantação
- [ ] Avaliar tradeoffs de decisões arquiteturais
- [ ] Definir padrões e guias de estilo do projeto
- [ ] Event-driven architecture (EDA)
- [ ] SAGA Pattern para transações distribuídas
- [ ] Strangler Fig Pattern — migração de legado
- [ ] Anti-corruption Layer
- [ ] Modulith — alternativa ao microsserviço puro
- [ ] Feature flags e release strategies

### 5.2 Liderança Técnica

- [ ] Code review eficaz — dar e receber feedback
- [ ] Onboarding de desenvolvedores
- [ ] Definir Definition of Done (DoD) e Definition of Ready (DoR)
- [ ] Technical debt — identificar, priorizar e pagar
- [ ] Planejamento técnico de sprints
- [ ] Elaborar RFCs (Request for Comments) técnicos
- [ ] Mentorar desenvolvedores júnior e pleno

### 5.3 Segurança em Nível de Arquitetura

- [ ] Threat modeling
- [ ] Zero trust architecture
- [ ] Secrets management (HashiCorp Vault, AWS Secrets Manager)
- [ ] Auditoria e logs de segurança
- [ ] Compliance (LGPD, GDPR) — implicações técnicas
- [ ] Penetration testing básico para devs

### 5.4 Observabilidade

- [ ] Os três pilares: logs, métricas, traces
- [ ] Estruturação de logs (JSON, contexto, correlation IDs)
- [ ] Monolog — logging em PHP
- [ ] Métricas com Prometheus
- [ ] Dashboards com Grafana
- [ ] Alertas e on-call
- [ ] APM (Application Performance Monitoring)
- [ ] Distributed tracing com Jaeger ou Zipkin

### 5.5 Escalabilidade e Alta Disponibilidade

- [ ] Horizontal vs vertical scaling
- [ ] Load balancers e algoritmos
- [ ] Stateless applications — sessão distribuída
- [ ] Blue/green deployments
- [ ] Canary releases
- [ ] Feature toggles
- [ ] Chaos engineering — conceitos
- [ ] SLA, SLO, SLI — definir e monitorar
- [ ] Disaster recovery e backup

### 5.6 Comunicação Técnica

- [ ] Escrever documentação técnica clara
- [ ] Criar README de projetos úteis
- [ ] Documentar APIs com OpenAPI 3.x
- [ ] Wiki de equipe — estruturar e manter
- [ ] Apresentar decisões técnicas para stakeholders não técnicos
- [ ] Escrever post-mortems de incidentes

---

## 📚 RECURSOS E ESTUDOS COMPLEMENTARES

### Livros Recomendados

- [ ] **Clean Code** — Robert C. Martin
- [ ] **Clean Architecture** — Robert C. Martin
- [ ] **Design Patterns** — GoF (Gang of Four)
- [ ] **Refactoring** — Martin Fowler
- [ ] **Domain-Driven Design** — Eric Evans
- [ ] **Implementing Domain-Driven Design** — Vaughn Vernon
- [ ] **The Pragmatic Programmer** — Hunt & Thomas
- [ ] **PHP Objects, Patterns, and Practice** — Matt Zandstra
- [ ] **Modern PHP** — Josh Lockhart

### Sites e Referências

- [ ] [php.net](https://php.net) — documentação oficial (lida completamente)
- [ ] [phptherightway.com](https://phptherightway.com)
- [ ] [refactoring.guru](https://refactoring.guru) — Design Patterns
- [ ] [martinfowler.com](https://martinfowler.com) — Arquitetura
- [ ] [owasp.org](https://owasp.org) — Segurança

### Projetos Práticos para o Portfólio

- [ ] **Framework MVC próprio** — implementar do zero (router, container DI, ORM básico)
- [ ] **API REST completa** — com autenticação JWT, testes, documentação OpenAPI
- [ ] **Sistema de filas** — worker com Redis ou RabbitMQ
- [ ] **CMS simples** — com multi-tenant e permissões
- [ ] **E-commerce** — com carrinho, pagamentos, estoque
- [ ] **Contribuir para um projeto open source em PHP**
- [ ] **Publicar um pacote no Packagist**

---

## 📊 Progresso

| Fase | Descrição | Status |
|------|-----------|--------|
| 🟢 Fase 1 | Fundamentos Absolutos | Não iniciado |
| 🔵 Fase 2 | PHP Intermediário | Não iniciado |
| 🟠 Fase 3 | PHP Avançado | Não iniciado |
| 🔴 Fase 4 | PHP Expert | Não iniciado |
| 🟣 Fase 5 | Arquiteto de Software | Não iniciado |

---

> **Dica:** Atualize a tabela de progresso manualmente conforme avançar nas fases.
> A jornada é longa — consistência vale mais que velocidade.
> *"First make it work, then make it right, then make it fast."* — Kent Beck