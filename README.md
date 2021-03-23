<h1> Champion Dealer System </h1>

<p> Este sistema foi desenvolvido utilizando o framework Laravel em PHP e utilizando um banco de dados MySQL. De início para a instalação da aplicação deverá ter os recursos presentes no servidor.</p>
<p> Ao definir a origin para o git dentro do servodr e clonar o projeto, deverá seguir os próximos passos:</p>

- Usar o comando `composer install` na pasta do projeto;
- Criar o .env copiando o .env.example localizado na raíz do projeto como modelo e alterar a permissão para 776 ou rwxrwxr-x;
- Configurar o .env com o banco de dados, seja RDS ou do próprio servidor, e o armazenamento de arquivos, que nesse caso está sendo usado o serviço da Amazon Simple Storage Service (S3);
- Para concluir a configuração do .env utilize o comando `key:generate` e em seguida utilize `php artisan config:cache` e `php artisan cache:clear`;
- Agora terá que criar o banco de dados que você configurou no .env e utilizar o comando `php artisan migrate`;
- Em seguida será popular o banco com os produtos com o `php artisan create:products` e para criar um administrador `php artisan create:admin`.

<p> Por parte da aplicação é isso, o último detalhe é quando for dar o caminho para o Apache, Ngix ou outra ferramenta é que o caminho tem que ser até a pasta public que está na raiz do projeto para que funcione. </p>
