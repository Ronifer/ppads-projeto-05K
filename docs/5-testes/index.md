# Plano de testes

**Nome do caso de uso:** Registre-se

**Preparação:**

* Confirmar o acesso à internet.

**Procedimento de teste:**

| Passo | Procedimento | Resultado esperado |
| --- | --- | --- |
| 1 | Executar o navegador e acesse a URL http://35.237.61.61/ | Apresentação da tela de login do sistema |
| 2 | Clicar no link **CADASTE-SE** | Apresentação da tela de cadastro no sistema |
| 3 | Preencher os campos **Nome**, **E-Mail**, **Senha** e clikar no link de **Cadastrar**. | Apresentação da tela de login do sistema |

**Nome do caso de uso:** Login

**Preparação:**

* Registrar no sistema um usuário.

**Procedimento de teste:**

| Passo | Procedimento | Resultado esperado |
| --- | --- | --- |
| 1 | Executar o navegador e acesse a URL http://35.237.61.61/ | Apresentação da tela de login do sistema |
| 2 | Preencher os campos **E-Mail**, **Senha** e clikar no link de **Logar**. | Apresentação da tela inicial no sistema |

**Nome do caso de uso:** Busca de Ofertas

**Preparação:**

* Criar no sistema um usuário.
* Logar no sistema um usuário registrado.

**Procedimento de teste:**

| Passo | Procedimento | Resultado esperado |
| --- | --- | --- |
| 1 | Logar no sistema. | Apresentação da tela inicial no sistema com a lista de ofertas buscadas |

**Nome do caso de uso:** Cadastro de Ofertas

**Preparação:**

* Criar no sistema um usuário.
* Logar no sistema um usuário registrado.

**Procedimento de teste:**

| Passo | Procedimento | Resultado esperado |
| --- | --- | --- |
| 1 | Logar no sistema. | Apresentação da tela inicial no sistema com a lista de ofertas buscadas |
| 2 | Clikar no link do canto inferior direito **+**. | Apresentação do painel de Cadastro de Ofertas | 
| 3 | Preencher os campos do formulário e clikar no link **CADASTAR**. | Apresentação da tela inicial no sistema com a lista de ofertas atualizadas |

**Nome do caso de uso:** Cadastro de Mercados

**Preparação:**

* Criar no sistema um usuário.
* Logar no sistema um usuário registrado.

**Procedimento de teste:**

| Passo | Procedimento | Resultado esperado |
| --- | --- | --- |
| 1 | Logar no sistema. | Apresentação da tela inicial no sistema com a lista de ofertas buscadas |
| 2 | Clikar no menu do tipo hamburguer do canto superior direito. | Apresentação do menu lateral |
| 3 | Clikar no link **CADASTAR MERCADOS**. | Apresentação do painel de Cadastro de Mercados |
| 4 | Preencher os campos do formulário e clikar no link **CADASTAR**. | Apresentação da tela inicial no sistema com a lista de ofertas atualizadas |

**Nome do caso de uso:** Detalhes da Oferta

**Preparação:**

* Criar no sistema um usuário.
* Logar no sistema um usuário registrado.

**Procedimento de teste:**

| Passo | Procedimento | Resultado esperado |
| --- | --- | --- |
| 1 | Logar no sistema. | Apresentação da tela inicial no sistema com a lista de ofertas buscadas |
| 2 | Clikar em uma oferta na lista de ofertas. | Apresentação do painel de Detalhe da Oferta |
| 4 | Clikar no link **PROMOÇÂO EXPIRADA**. | Exipira a Oferta e tira da busca de Ofertas |
| 4 | Clikar no link **VOLTAR**. | Apresentação do painel de Busca da Ofertas |
| 4 | Clikar no link **MAPA**. | Apresentação do mapa com os mercados da Oferta |

**Nome do caso de uso:** Gerenciar os Usuarios

**Observação:**

* Esse caso de uso só pode ser testado com usuario de perfil administrador:
* Usuario: admin@dev.com
* Senha: 123

**Preparação:**

* Logar no sistema um usuário registrado como administrador.

**Procedimento de teste:**

| Passo | Procedimento | Resultado esperado |
| --- | --- | --- |
| 1 | Logar no sistema. | Apresentação da tela inicial no sistema com a lista de ofertas buscadas |
| 2 | Clikar no menu do tipo hamburguer do canto superior direito. | Apresentação do menu lateral |
| 3 | Clikar no link **ADMINISTRAR**. | Apresentação do painel de Usuarios Cadastrados |
| 4 | Clikar no link **BLOQUEAR**. | Bloqueia o Usuario |
| 4 | Clikar no link **DESBLOQUEAR**. | Desbloqueia o Usuario |
| 4 | Clikar no link **ADMINISTADOR**. | Torna o Usuario um Administrador |

