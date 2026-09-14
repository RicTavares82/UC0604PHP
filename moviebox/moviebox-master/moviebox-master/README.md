# MiniProjeto — MovieBox

## Enunciado

O objetivo deste MiniProjeto é rever os principais conceitos utilizados no desenvolvimento de aplicações web com Laravel.

Será desenvolvida uma aplicação simples de gestão de filmes, permitindo trabalhar a estrutura base de uma aplicação Laravel, a arquitetura MVC, as rotas, os modelos, as migrations, os seeders, os controladores e as views.

A aplicação será construída sem autenticação e sem componentes avançados, de forma a concentrar a revisão nos fundamentos do desenvolvimento backend.

A interface será baseada em Bootstrap e terá como ponto de partida páginas HTML estáticas.

---

## Tema

A aplicação **MovieBox** será utilizada para gerir uma coleção de filmes.

Cada filme pertence a um género e cada género pode estar associado a vários filmes.

A aplicação deverá permitir:

- consultar os filmes existentes;
- consultar os detalhes de um filme;
- adicionar novos filmes;
- editar filmes;
- eliminar filmes;
- gerir os géneros disponíveis;
- associar cada filme a um género.

---

## Modelos

A aplicação terá dois modelos principais:

- `Movie`
- `Genre`

A relação entre os modelos será:

```text
Genre 1 -------- N Movie
```

Ou seja:

* um género pode ter vários filmes;
* cada filme pertence a um único género.

---

### Modelo `Genre`

| Atributo     | Tipo      | Descrição                     |
| ------------ | --------- | ----------------------------- |
| `id`         | integer   | Identificador único do género |
| `name`       | string    | Nome do género                |
| `created_at` | timestamp | Data de criação do registo    |
| `updated_at` | timestamp | Data da última alteração      |

Exemplos de géneros:

* Ação
* Comédia
* Drama
* Ficção Científica
* Terror
* Animação

---

### Modelo `Movie`

| Atributo     | Tipo        | Descrição                       |
| ------------ | ----------- | ------------------------------- |
| `id`         | integer     | Identificador único do filme    |
| `title`      | string      | Título do filme                 |
| `director`   | string      | Nome do realizador              |
| `year`       | integer     | Ano de lançamento               |
| `duration`   | integer     | Duração do filme em minutos     |
| `genre_id`   | foreign key | Género ao qual o filme pertence |
| `created_at` | timestamp   | Data de criação do registo      |
| `updated_at` | timestamp   | Data da última alteração        |

---

## Estrutura da Aplicação

A aplicação deverá disponibilizar as seguintes áreas:

```text
MovieBox

├── Início
│
├── Filmes
│   ├── Listagem
│   ├── Detalhe
│   ├── Criação
│   ├── Edição
│   └── Eliminação
│
└── Géneros
    ├── Listagem
    ├── Criação
    ├── Edição
    └── Eliminação
```

---



## Páginas

### Página Inicial

A página inicial deverá apresentar uma breve introdução à aplicação e permitir o acesso às áreas de gestão de filmes e géneros.

### Filmes

A área de filmes deverá permitir:

* listar todos os filmes;
* consultar os detalhes de um filme;
* criar um novo filme;
* editar os dados de um filme;
* eliminar um filme.

### Géneros

A área de géneros deverá permitir:

* listar todos os géneros;
* criar um novo género;
* editar um género;
* eliminar um género.

---

### Rotas Esperadas

A aplicação deverá disponibilizar as seguintes rotas.

#### Página Inicial

| Verbo HTTP | URL | Nome da Rota | Finalidade |
|---|---|---|---|
| GET | `/` | `home` | Apresentar a página inicial da aplicação |

#### Filmes

| Verbo HTTP | URL | Nome da Rota | Ação | Finalidade |
|---|---|---|---|---|
| GET | `/movies` | `movies.index` | `index` | Listar todos os filmes |
| GET | `/movies/create` | `movies.create` | `create` | Apresentar o formulário de criação |
| POST | `/movies` | `movies.store` | `store` | Guardar um novo filme |
| GET | `/movies/{movie}` | `movies.show` | `show` | Apresentar os detalhes de um filme |
| GET | `/movies/{movie}/edit` | `movies.edit` | `edit` | Apresentar o formulário de edição |
| PUT/PATCH | `/movies/{movie}` | `movies.update` | `update` | Atualizar um filme existente |
| DELETE | `/movies/{movie}` | `movies.destroy` | `destroy` | Eliminar um filme |

#### Géneros

| Verbo HTTP | URL | Nome da Rota | Ação | Finalidade |
|---|---|---|---|---|
| GET | `/genres` | `genres.index` | `index` | Listar todos os géneros |
| GET | `/genres/create` | `genres.create` | `create` | Apresentar o formulário de criação |
| POST | `/genres` | `genres.store` | `store` | Guardar um novo género |
| GET | `/genres/{genre}/edit` | `genres.edit` | `edit` | Apresentar o formulário de edição |
| PUT/PATCH | `/genres/{genre}` | `genres.update` | `update` | Atualizar um género existente |
| DELETE | `/genres/{genre}` | `genres.destroy` | `destroy` | Eliminar um género |

> Não será necessária uma página de detalhe para os géneros, uma vez que o modelo `Genre` possui apenas o atributo `name`.


# Ordem dos Trabalhos

O desenvolvimento do projeto deverá seguir a seguinte ordem.

## 1. Análise da Aplicação

Antes de iniciar a programação, analisar:

* as páginas HTML fornecidas;
* as funcionalidades existentes;
* os dados apresentados;
* os elementos comuns entre páginas;
* as entidades necessárias;
* a relação entre `Movie` e `Genre`.

---

## 2. Preparação do Projeto Laravel

Criar e configurar o projeto Laravel que servirá de base à aplicação.

Confirmar a estrutura principal do projeto e identificar as pastas relacionadas com:

* rotas;
* controladores;
* modelos;
* migrations;
* seeders;
* views.

---

## 3. Integração do Frontend

Converter as páginas HTML fornecidas em views da aplicação Laravel.

Identificar o conteúdo comum entre as páginas e criar a estrutura de layouts necessária para evitar repetição de código.

A aplicação deverá manter o aspeto visual do frontend fornecido.

---

## 4. Definição das Rotas

Criar as rotas necessárias para navegar entre as diferentes páginas da aplicação.

Deverão existir rotas para as operações de:

* listagem;
* detalhe;
* criação;
* armazenamento;
* edição;
* atualização;
* eliminação.

---

## 5. Criação dos Modelos

Criar os modelos:

```text
Genre
Movie
```

Definir nos modelos os atributos necessários e preparar a relação entre as duas entidades.

---

## 6. Criação da Base de Dados

Criar as migrations correspondentes aos modelos.

A base de dados deverá incluir:

* tabela de géneros;
* tabela de filmes;
* chave primária em cada tabela;
* chave estrangeira entre filmes e géneros.

---

## 7. Criação de Dados Iniciais

Criar seeders que permitam preencher automaticamente a base de dados.

Deverão existir dados suficientes para testar a aplicação, incluindo:

* vários géneros;
* vários filmes associados aos respetivos géneros.

---

## 8. Criação dos Controladores

Criar os controladores responsáveis por receber os pedidos efetuados pelas rotas e coordenar o funcionamento da aplicação.

Deverão existir controladores para:

```text
Movie
Genre
```

---

## 9. Listagem de Géneros

Implementar a consulta dos géneros existentes na base de dados e apresentar os resultados na respetiva página.

Os dados apresentados não deverão permanecer escritos diretamente no HTML.

---

## 10. CRUD de Géneros

Implementar as operações necessárias para:

* criar géneros;
* editar géneros;
* atualizar géneros;
* eliminar géneros.

---

## 11. Listagem de Filmes

Implementar a consulta dos filmes existentes na base de dados.

Na listagem deverá ser apresentado o género associado a cada filme.

---

## 12. Detalhe de Filme

Implementar a página de detalhe de um filme.

A informação apresentada deverá ser obtida a partir da base de dados.

---

## 13. Criação de Filmes

Implementar o formulário de criação de filmes.

O utilizador deverá conseguir selecionar um género existente.

---

## 14. Edição de Filmes

Implementar a edição dos dados de um filme existente.

O formulário deverá apresentar os valores atuais do filme.

---

## 15. Eliminação de Filmes

Implementar a eliminação de filmes através da página de listagem.

---

## 16. Validação de Dados

Adicionar validação aos formulários da aplicação.

Os dados inválidos não deverão ser armazenados na base de dados.

As mensagens de erro deverão ser apresentadas ao utilizador.

---

## 17. Mensagens de Sucesso

Após operações de criação, edição ou eliminação, a aplicação deverá apresentar mensagens adequadas ao utilizador.

Exemplos:

```text
Filme criado com sucesso.
Filme atualizado com sucesso.
Filme eliminado com sucesso.
Género criado com sucesso.
```

---

## 18. Testes Finais

Testar todas as funcionalidades da aplicação.

Confirmar:

* navegação entre páginas;
* criação de registos;
* edição de registos;
* eliminação de registos;
* associação entre filmes e géneros;
* apresentação correta dos dados;
* funcionamento dos formulários;
* funcionamento das validações.

---

# Resultado Esperado

No final do MiniProjeto deverá existir uma aplicação Laravel funcional que permita realizar operações CRUD sobre filmes e géneros.

O projeto deverá permitir rever o fluxo fundamental de uma aplicação Laravel:

```text
Pedido HTTP
     ↓
Rota
     ↓
Controlador
     ↓
Modelo
     ↓
Base de Dados
     ↓
Controlador
     ↓
View
     ↓
Resposta HTTP
```

O objetivo principal deste trabalho é recuperar e consolidar os conceitos fundamentais antes de avançar para funcionalidades mais complexas.


