###### Docker containers implementation for Laravel 8 using sail ######
Please visit the official docu to start working with SAIL

https://laravel.com/docs/8.x/sail - Laravel offical docu
[Laravel sail](https://laravel.com/docs/8.x/sail)

###### Configuring A Bash Alias ######

``` alias sail='bash ./vendor/bin/sail' ```


###### Up containers in the background ######
 
 ``` sail up -d ```
 
 ###### Down containers ######

 ``` sail down ```

###### Check the containers ######

``` sail ps ```

###### Kill all the containers ######

``` sail kill ```


###### If docker-compose.yml is updated, please run this command ######

``` sail artisan sail:publish ```

###### Run this command to see all the commands available  ######

``` sail --help ```

###### Remove all the containers ######

``` docker rm $(docker ps -a -q) -f ```

###### Remove all the networks not used ######

``` docker network prune ```
