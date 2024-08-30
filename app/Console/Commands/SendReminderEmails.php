<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendReminderEmails extends Command
{
    protected $signature = 'email:send-reminders';
    protected $description = 'Send reminder emails to users';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // Logic to send reminder emails
        $this->info('Reminder emails sent successfully!');
    }
}
