<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMaill extends Mailable
{
    use Queueable, SerializesModels;

    public $text; // Định nghĩa thuộc tính $text

    /**
     * Create a new message instance.
     */
    public function __construct($text)
    {
        $this->text = $text; // Gán giá trị cho thuộc tính $text khi khởi tạo
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.sendby')->from('caoanhvu.tdc2223@gmail.com','Shop của em')->subject('[Shopcuaem.vn] Cảm ơn bạn đã mua hàng ha');
    }
}
