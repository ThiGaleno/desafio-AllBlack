# FanSy
>  Fan System AllBlack
- Sistema para automatizar o processo de manter atualizado a base de torcedores da Seleção All Blacks de Rugby e enviar e-mails em massa para os torcedores.
## Proposta
> Os all Blacks mantinham uma planilha de excel para gerenciar uma lista de torcedores que era atualizada manualmente. Com o **Fansy** não será mais necessário o uso de planilhas e os torcedores passam a ser cadastrados em um Banco de Dados que pode ser atualizado em segundos apenas selecionando o arquivo XML que recebem. Fansy também conta com um módulo de envio de e-mails fácil de usar, que envia de uma vez qualquer mensagem que o usuário digitar para todos os torcedores cadastrados.
> Também é possível cadastrar manualmente um torcedor e também editar e deletar qualquer torcedor.
 #Pré Requisitos
### Softwares usados (Seguir a ordem de instalação abaixo)
-  1º Laragon
-  2º Composer
-  3º HeidiSQL
-  Visual Studio Code (editor opcional)
> Ao instalar o Composer, selecione o caminho do PHP dentro da pasta de instalação do Laragon, por padrão fica em C:/laragon/bin/php/ php 7.2 / php.exe
# Clonando
- Clone o projeto dentro da pasta C:/Laragon/www
- Atualizar as dependencias com o composer,  gerar e configurar o arquivo .ENV e gerar uma KEY (chave)
```
Composer Update 
```
```
Php artisan key:generate
```
- DB_DATABASE=allblacks
- DB_USERNAME=root
- DB_PASSWORD=1234

- MAIL_DRIVER=smtp
- MAIL_HOST=smtp.gmail.com
- MAIL_PORT=587
- MAIL_USERNAME=allblacksdesafiocontato@gmail.com
- MAIL_PASSWORD=tudobl@ck
- MAIL_ENCRYPTION=tls

## Rodando o projeto
- Abra o Laragon e inicie-o
- Abra o HeidiSQL, defina a senha configurada no arquivo .ENV neste caso a senha é: 1234.
- Crie um DB com nome allblacks
- Dentro da pasta do projeto rode o comando do artisan para criação das tabelas
```
Php artisan migrate
```
- Inicie o servidor, baixe o arquivo XML para utilizar e preencher o banco de dados
 [Arquivo XML]( https://raw.githubusercontent.com/p21sistemas/skeleton21/master/clientes.xml)
