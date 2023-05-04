<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class SendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        info("abc");
        $getEmailSends = DB::table('process')->where('status', 0)->get();
        $getEmailConfig = DB::table('mail_config')->first();
        $getEmailTemplate = DB::table('template')->first();
        try{
            foreach($getEmailSends as $key => $getEmailSend){
                $message = new \Swift_Message( $getEmailTemplate->title);
                $message->setFrom($getEmailConfig->email);
                $message->setTo($getEmailSend->email);
                $message->setBody($getEmailTemplate->content);

                $transport = new \Swift_SmtpTransport($getEmailConfig->mail_server, $getEmailConfig->gate, 'tls');
                $transport->setUsername($getEmailConfig->email);
                $transport->setPassword($getEmailConfig->password);

                $mailer = new \Swift_Mailer($transport);

                $result = $mailer->send($message);

                if($result){
                    DB::table('process')->where('id', $getEmailSend->id)->update(['status' => 1, 'send_time' => strtotime('now')]);
                }else{

                }
            }
        }catch(\Throwable $th){
            DB::table('process')->where('id', $getEmailSend->id)->update(['status' => 1, 'send_time' => strtotime('now')]);
        }
    }
}
