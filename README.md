## Sistema de Cadastro de Usuários 💻

**Descrição Geral do Projeto:**
O Sistema de Cadastro de Usuários permite o registro e login de usuários com três perfis: Admin, Gestor e Colaborador. Cada perfil tem permissões específicas, facilitando a gestão e o acesso ao sistema de forma segura e eficiente.

## Índice
1. [Instalação do Projeto](#instalação-do-projeto)
2. [Funcionalidades Principais](#funcionalidades-principais)
3. [Estrutura do Sistema](#estrutura-do-sistema)
4. [Telas](#telas)
5. [Fluxo Básico do Sistema](#fluxo-básico-do-sistema)
6. [Organização do Projeto](#organização-do-projeto)
7. [Arquitetura da Base de Dados](#arquitetura-da-base-de-dados)
8. [Fontes para Pesquisa](#fontes-para-pesquisa)
9. [Créditos](#créditos)

## **Instalação do Projeto:**

**Requisitos mínimos:**
1. Apache (Xampp)

**Download do projeto:**

Acesse a pasta ```C:\xampp\htdocs``` e execute o seguinte comando:

``` bash
    git clone https://github.com/laylabtrice/CadLogin-System
```

**Execução do projeto:**

Abre seu navegador e digite ```localhost/CadLogin-System```

## **Funcionalidades Principais:**
- **Tela de Login:** Permite que o usuário faça login no sistema com seu e-mail e senha.
- **Tela de Registro:** Permite que novos usuários se cadastrem e escolham seu perfil (Admin, Gestor ou Colaborador).

### GESTOR / ADM
-**Possível fazer gerenciamento de usuários, além de executar auterações no sistema de contas**
Quando admin ou gestor, pode entrar em tela de edição de informações cadastradas pelos usuários.

-**Admin possui função para deletar usuários**
Apenas o user Admin pode executar essa função dentro do sistema, podendo deletar usuários do mesmo.

## **Estrutura do Sistema**

O sistema é organizado de forma a separar as funções em três partes principais:

**Controladores:** Responsáveis pelas regras de negócio e operações do sistema.

**Modelos:** Cuidam da interação com o banco de dados.

**Visões:** As telas que os usuários veem e interagem.

## **Telas**

**Cadastro usuário**
![Cad User](https://github.com/laylabtrice/CadLogin-System1/blob/master/img/cad.png)
Tela de cadastro para usuários novos.

**Login usuário**
![Login User](https://github.com/laylabtrice/CadLogin-System1/blob/master/img/login.png)
Login para usuários já cadastrados no sistema.

**Edição de usuário**
![Edit User](https://github.com/laylabtrice/CadLogin-System1/blob/master/img/edituser.png)
Edição de usuários, função apenas para Gestor e Admin

## **Fluxo Básico do Sistema**

**Login:** O usuário insere suas credenciais (e-mail e senha) para acessar o sistema. Se as credenciais forem válidas, ele é redirecionado para sua área correspondente (Admin, Gestor ou Colaborador).

**Registro:** Novos usuários podem se cadastrar, inserindo nome, e-mail, senha e escolhendo o perfil.

**Lista de Usuários:** Lista de usuários presentes no sistema, pode ser visualizado por Gestor e Admin apenas.

**Edição de Usuários:** Função de editar informações cadastrais de usuário, tais como: Nome, Email e Tipo de Perfil.

**Excluir Usuários:** Apenas Admin pode executar essa função, podendo excluir usuários cadastrados no sistema.

## **Organização do Projeto**

O projeto está dividido em diferentes arquivos e pastas que organizam seu funcionamento:

**auth.php:** Gerencia as autenticações.

**index.php:** Ponto de entrada do sistema.

**routes.php:** Define as rotas e ações a serem executadas no sistema.

**list_user.php** Mostra lista de usuários cadastrados no sistema.

**edit_user.php** Lista para edição de informações, presente apenas para admin e gestor.

**dashboard.php** Mostra qual tipo de usuário é.

```
    C:.
    ├── controllers/       # Regras de negócio
    ├── models/            # Conexão com banco de dados
    └── views/             # Telas de interface do usuário
```

## **Arquitetura da Base de Dados:**

``` sql 
    CREATE TABLE `usuarios` (
        id INT AUTO_INCREMENT PRIMARY KEY,  -- Identificador único de cada usuário, gerado automaticamente (chave primária).
        nome VARCHAR(100) NOT NULL,         -- Nome completo do usuário, campo obrigatório (máximo de 100 caracteres).
        email VARCHAR(100) NOT NULL,        -- Endereço de e-mail do usuário, também obrigatório (máximo de 100 caracteres).
        senha VARCHAR(255) NOT NULL,        -- Senha criptografada do usuário, campo obrigatório (máximo de 255 caracteres para suportar a encriptação).
        perfil ENUM('admin', 'gestor', 'colaborador') NOT NULL,  -- Define o perfil do usuário (admin, gestor ou colaborador), obrigatório.
        created_at TIMESTAMP DEFAULT current_timestamp  -- Data e hora de criação do registro, com valor padrão sendo o momento atual da criação.
    );
```

## **Fontes para Pesquisa:**

**BASE DE DADOS:**
1. https://pt.stackoverflow.com/questions/488716/id-primary-key-auto-increment-come%C3%A7ando-do-1
2. https://stackoverflow.com/questions/168736/how-do-you-set-a-default-value-for-a-mysql-datetime-column

## **Créditos:**

Feito em aulas do professor *Leonardo Santiago Sidon da Rocha*, README e CSS por [@laylabtrice](https://github.com/laylabtrice).