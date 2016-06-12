<?php
namespace Velopress\Console;

use Illuminate\Console\Command;
use Larapress\Larapress\Facades\Wordpress;

class InstallWordpress extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'larapress:install 
                            {title : the blog title}
                            {user : the username of the initial admin user}
                            {email : the email address of the initial admin user}
                            {password : the password for the initial admin user}
                            {language? : the language that blog should default to}
                            {--P|public : whether the blog should be public}
                            {--D|drop : whether any pre-existing tables should be dropped}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install the WordPress database schema and add basic settings';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        if ($this->option('drop')) {
            Wordpress::dropTables();
        }
        
        Wordpress::install(
            $this->argument('title'),
            $this->argument('user'),
            $this->argument('email'),
            $this->option('public') ? $this->option('public') : false,
            '',
            $this->argument('password'),
            ''
        );
    }
}