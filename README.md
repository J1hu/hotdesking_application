## This project is developed by Group 1 of BSIS 3 at La Verdad Christian College - Apalit
### The developers are listed below

#### Cloning
- Clone this project by copying the git repository link
> `git clone <repo link>`
- After cloning the project, you need to install the libraries and dependencies
> `composer install`
- When the installing is done, create your `.env` file by copying the `.env.example` on the project
> After this, you can now create your database on mysql
-
> Go to `.env` file you created and change the value of `DB_DATABASE=` to the name of the database you created
-
> On the terminal, enter `php artisan migrate` to migrate the tables to the database
-
> After the migration, you can now enter the `php artisan serve` to start your project on localhost
-
>> NOTE: If there is a problem on generating the key after serving to localhost, just click the `generate key` to fix this.
-
> You can now use the application.
