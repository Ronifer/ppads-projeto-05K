# Casos de uso

## 1. Diagrama de casos de uso

**Busca de Ofertas**

![Use Case Busca de Ofertas](busca_ofertas.png)

## 2. Especificação dos casos de uso


### 2.1. Caso de uso **Busca de Ofertas**

| Campo          | Informação        |
|---|---|
| Identificador: | UC01              |
| Nome:          | Busca de ofertas |
| Atores:        | Usuarios |
| Sumário:       | Busca uma oferta no sistema |

| Fluxo Principal |
|---|
| 1) O usuario **Digita o Produto Solicitado**. |
| 2) O sistema recupera as informações dos produtos selhantes.                   |
| 3) O sistema apresenta a lista de produtos relacionados. |
| 4) O usuario **Seleciona Produto Desejado** |
| 5) O exibe as informações do produto para o usuario. |
| 6) O usuario é **Redirecionado para a pagina do produto** |


| Fluxo Alternativo (2a): O sistema não encontra as informações usuario. |
|---|
| 1) O sistema informa que não conseguiu recuperar as informações do usuario. |
| 2) O usuario seleciona a opção para realizar o **Login**. |

| Fluxo Alternativo (2b): A oferta não está mais disponivel. |
|---|
| 1) O usuario **Marca Oferta como vencida**. |

**Login**

![Use Case Busca de Ofertas](login.png)

## 2. Especificação dos casos de uso


### 2.1. Caso de uso **Busca de Ofertas**

| Campo          | Informação        |
|---|---|
| Identificador: | UC02              |
| Nome:          | Login de Usuario |
| Atores:        | Usuarios |
| Sumário:       | Realiza a autenticação do usuario no sistema |

| Fluxo Principal |
|---|
| 1) O usuario **Solicita o Login** informando seus dados de email e senha. |
| 2) O sistema realizará a pesquisa do usuario na base.                   |

| Fluxo Alternativo (2a): O sistema não encontra as informações usuario. |
|---|
| 1) O sistema informa que não conseguiu recuperar as informações do usuario. |
| 2) O usuario seleciona a opção para realizar **Registrar-se** informando seus dados pessoais. |