<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotifyEmail;
class Notify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send email notify every day';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
       // to get emails there to option 1 or 2
       // 1 $user = User::select('email')->get(); 
       ///2
       $emails = User::pluck('email')->toArray();
       $data=['title' => 'Programing', 'body'=> 'PHP'];
       foreach($emails as $email){
        //how to sen email in laravel
        Mail::To($email) -> send(new NotifyEmail($data));
       }
    }
}
