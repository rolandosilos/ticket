<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\Agent\helpdesk\NotificationController;
use App\Http\Controllers\Common\PhpMailController;
use Exception;

class SendReport extends Command {

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'report:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sending the report mail ';
    protected $report;
    protected $mail;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct() {
        $mail = new PhpMailController();
        $mail->setQueue();
        $report = new NotificationController($mail);
        $this->report = $report;
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle() {
        try {
            $report = $this->report->send_notification();
            \Log::useDailyFiles(storage_path()."/logs/info/send-report.log");
        
            if ($report !== 0) {
                \Log::info("Report has send");
                $this->info("Report has send");
            }else{
               $this->info("Nothing to send"); 
            }
        } catch (Exception $ex) {
            //dd($ex);
            $this->error($ex->getMessage());
        }
    }

}
