# API REST LARAVEL

###Ferramentas utilizadas

- UBUNTU version 20.04 LTS
- PHP version 7.4
- mysql  version 8.0.28-0
- Framework Laravel 8: https://laravel.com/docs/8.x

### Para instalação

** Necessário composer **
```
https://getcomposer.org/
```
* Fazer o download do projeto
* Renomear o arquivo.env.exemple para .env
* Rodar composer para instalação das dependências
```
composer install
```

* Gerar chave de acesso laravel "Key generate"
```
php artisan key:generate
```

* Criar uma base de dados em MySQL com o nome de sua escolha

* Configurar arquivo .env com os dados de acesso de sua base de dados crada anteriormente:<br>
DB_CONNECTION='mysql'</br>
DB_HOST='127.0.0.1'</br>
DB_PORT='3306'</br>
DB_DATABASE='laravel'</br>
DB_USERNAME='root'</br>
DB_PASSWORD=''</br>

* Realizar a migração das tabelas para sua base de dados
```
php artisan migrate
```

* Inicializar servidor
```
php artisan serve
```

## ENJOY!
