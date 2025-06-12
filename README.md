## 📦 Projeto: Microsserviços com Docker – Inspirado em Toshiro Shibakita

Este projeto foi desenvolvido como parte do **Desafio de Projeto** do **BootCamp Santander - Linux para Iniciantes**, promovido pela [DIO (Digital Innovation One)](https://web.dio.me/).

A proposta é utilizar **Docker** para criar uma estrutura simples de microsserviços, praticando conceitos como isolamento de ambientes, rede de containers e integração entre NGINX, PHP e MySQL.

---

### 👨‍🏫 Projeto original criado por:

**Denilson Bonatti** – Professor da DIO, instrutor de Linux e responsável pelo desafio.

🔗 GitHub: [github.com/denilsonbonatti](https://github.com/denilsonbonatti)  
🔗 Link do projeto original (fork): [toshiro-shibakita](https://github.com/denilsonbonatti/toshiro-shibakita)

---

### 🧠 Objetivo

Este projeto demonstra a **utilização prática do Docker em um ambiente de microsserviços**, aplicando conceitos de containerização com Nginx como balanceador de carga, PHP para lógica de backend e MySQL como banco de dados.

Inspirado na história de superação de **Toshiro Shibakita**, este projeto é o ponto de partida para construir soluções modernas, escaláveis e portáveis com Docker.

---

### 📁 Estrutura do Projeto

```bash
toshiro-shibakita/
├── index.php           # Script PHP que insere dados randômicos no banco
├── nginx.conf          # Configuração do Nginx com balanceamento de carga
├── Dockerfile          # Imagem customizada com Nginx e config personalizada
├── banco.sql           # Script SQL para criação da tabela `dados`
└── README.md           # Este arquivo de documentação
```

---

### ⚙️ Tecnologias Utilizadas

* 🐳 **Docker**
* 🌐 **Nginx** (load balancing)
* 🐘 **PHP** (versão disponível na imagem base)
* 🐬 **MySQL**
* 📄 **SQL**
* 🐧 **Linux (Ubuntu Server)**

---

### 🧪 O que o projeto faz?

1. **Servidor Nginx** com balanceamento de carga entre múltiplos containers de aplicação PHP.
2. **Aplicação PHP** que gera dados aleatórios e os insere em um banco de dados MySQL.
3. **Banco de dados** com uma tabela simples chamada `dados`.
4. Permite simular chamadas simultâneas ao serviço para fins de teste de performance e escalabilidade.

---

### 🔍 Descrição dos Arquivos

#### `index.php`

* Exibe a versão do PHP.
* Gera dados randômicos.
* Insere esses dados na tabela `dados`.
* Retorna mensagem de sucesso ou erro.

#### `nginx.conf`

* Define um `upstream` com 3 servidores fictícios.
* Redireciona chamadas na porta `4500` para os servidores PHP backend.

#### `Dockerfile`

* Cria uma imagem customizada baseada no `nginx`.
* Copia o arquivo `nginx.conf` para substituir a configuração padrão.

#### `banco.sql`

* Script que cria a tabela `dados` com os campos `AlunoID`, `Nome`, `Sobrenome`, `Endereco`, `Cidade` e `Host`.

---

### 🚀 Como executar o projeto

Você pode montar seu ambiente local com Docker. Aqui está um exemplo básico para começar:

```bash
# Crie a imagem personalizada com Nginx
docker build -t custom-nginx .

# Execute o container
docker run -d -p 4500:4500 --name nginx-loadbalancer custom-nginx
```

⚠️ **Nota:** Esse projeto exige que os containers PHP estejam rodando nas portas e IPs definidos no `nginx.conf`.

---

### 📌 Melhorias Futuras (To-Do)

### :wrench: Melhorias Futuras (To-Do)

| Status | Descrição                                                                 | Justificativa                                                                                   |
|--------|---------------------------------------------------------------------------|--------------------------------------------------------------------------------------------------|
| [ ]    | Sanitizar entradas SQL usando prepared statements                         | Evita ataques de SQL Injection e melhora a segurança da aplicação.                              |
| [ ]    | Separar credenciais em variáveis de ambiente (`.env`)                     | Garante mais segurança e flexibilidade para múltiplos ambientes (dev/staging/prod).             |
| [ ]    | Adicionar um `docker-compose.yml` para orquestrar todos os containers     | Facilita o deploy local e em servidores, padronizando o ambiente completo.                      |
| [ ]    | Utilizar volumes Docker para persistência de dados                        | Permite que os dados do banco não se percam ao reiniciar os containers.                         |
| [ ]    | Adicionar logs estruturados no PHP                                        | Facilita o rastreio de erros, auditoria e manutenção do sistema.                                |
| [ ]    | Organizar os arquivos em estrutura de pastas (ex: `/src`, `/db`, `/conf`) | Melhora a legibilidade e escalabilidade do projeto.                                              |
| [ ]    | Versão do banco controlada por migrations (ex: Phinx ou Flyway)           | Permite controle de versões do banco e facilita a replicação do ambiente.                       |
| [ ]    | Adicionar testes automatizados para conexão e inserção no banco           | Garante que as funcionalidades principais estão funcionando após alterações ou deploys.         |
| [ ]    | Criar documentação técnica e fluxograma do projeto                        | Ajuda novos desenvolvedores a entenderem rapidamente o projeto.                                 |
| [ ]    | Criar script de inicialização (entrypoint.sh) para containers             | Automatiza o processo de setup do ambiente, criação de tabelas, etc.                            |


---

### 👨‍💻 Autor

* Francildo Alves – [@francildoalves](https://github.com/francildoalves)

---

### 📄 Licença

Este projeto está sob a licença MIT. Veja o arquivo `LICENSE` para mais detalhes.
