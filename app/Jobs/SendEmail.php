<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Http\Controllers\Common\PhpMailController;

class SendEmail extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;
    
    
    protected $from;
    protected $to;
    protected $message;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($from, $to, $message)
    {
        $this->from = $from;
        $this->to = $to;
        $this->message = $message;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(PhpMailController $PhpMailController)
    {
        return $PhpMailController->sendEmail($this->from, $this->to, $this->message);
    }
}