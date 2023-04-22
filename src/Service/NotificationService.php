<?php

namespace App\Service;

use App\Dto\Notification\SupportMailTemplateDto;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Validator\Constraints\Date;

class NotificationService 
{  
    private const MAILER_DEST = 'dest';

    public function __construct(private array $mailerData, private MailerInterface $mailer)
    {
        $this->mailer = $mailer;
        $this->mailerData = $mailerData;
    }

    /**
     * @return void
     * 
     * @throws TransportExceptionInterface
     */
    public function sendSupportMail(SupportMailTemplateDto $supportMailTemplateDto): void
    {
        $email = (new Email())
        ->from($supportMailTemplateDto->getMailFrom())
        ->to($this->mailerData[self::MAILER_DEST])
        ->subject($supportMailTemplateDto->getIssue())
        ->html($this->getAdaptedContentToHtml($supportMailTemplateDto))
        ->embed(fopen('../public/assets/media/misc/logo.png', 'r'), 'logo');

        $this->mailer->send($email);
    }

    private function getAdaptedContentToHtml(SupportMailTemplateDto $supportMailTemplateDto): string
    {
        return 
            '<p style="font-size:1.2rem; margin-bottom: 1rem"> Issuer: ' .  $supportMailTemplateDto->getMailFrom() . '</p>' .
            '<p style="font-size:1.3rem">'. $supportMailTemplateDto->getContent() .'</p>' .
            '<div style="margin-top: 2rem">
                <img src="cid:logo" style="width: 5rem">
                <span>Seller node</span>
                <p>All rights reserved - '. date("Y") . '</p>
            </div>'
        ;            
    }
}