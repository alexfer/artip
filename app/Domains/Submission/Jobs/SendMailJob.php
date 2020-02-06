<?php

namespace Artip\Domains\Submission\Jobs;

use Lucid\Foundation\Job;
use Illuminate\Support\Facades\Mail;

class SendMailJob extends Job
{

    /**
     *
     * @var array
     */
    private $data;

    /**
     * 
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * 
     * @param Mail $mail
     * @return void
     */
    public function handle(Mail $mail): void
    {
        $mail::send($this->data['template'], [
            'body' => $this->data['body'],
                ], function($message) {
            $message->from($this->data['from']['email'], $this->data['from']['name'])
                    ->to($this->data['to'])
                    ->subject($this->data['subject']);
        });
    }

}
