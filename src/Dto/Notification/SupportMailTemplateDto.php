<?php

namespace App\Dto\Notification;

use Exception;

class SupportMailTemplateDto
{

    private const MAIL_FROM = 'mailFrom';
    
    private const ISSUE = 'issue';
    
    private const CONTENT = 'content';

    private string $mailFrom;
    
    private string $issue;

    private string $content;
    
    /**
     * @param array $data
     * 
     * @throws Exception
     */
    public function __construct(array $data = [])
    {
        if (!empty($data)) {
            $this->fromArray($data);
        }
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        $content = [
            self::MAIL_FROM => $this->mailFrom,
            self::ISSUE => $this->issue,
            self::CONTENT => $this->content
        ];

        return $content;
    }

    /**
     * @param array $data
     * @return void
     * 
     * @throws Exception
     */
    private function fromArray(array $data): void
    {
        if (!array_key_exists(self::MAIL_FROM, $data)) {
            throw new Exception('source mail could not be found');           
        }

        if (!array_key_exists(self::ISSUE, $data)) {
            throw new Exception('issue was not inserted');           
        } 

        if (!array_key_exists(self::CONTENT, $data)) {
            throw new Exception('content was not inserted');           
        } 

        $this->mailFrom = $data[self::MAIL_FROM];
        $this->issue = $data[self::ISSUE];
        $this->content = $data[self::CONTENT];
    }

    

    /**
     * Get the value of mailFrom
     *
     * @return string
     */
    public function getMailFrom(): string
    {
        return $this->mailFrom;
    }

    /**
     * Set the value of mailFrom
     *
     * @param string $mailFrom
     *
     * @return self
     */
    public function setMailFrom(string $mailFrom): self
    {
        $this->mailFrom = $mailFrom;

        return $this;
    }

    /**
     * Get the value of issue
     *
     * @return string
     */
    public function getIssue(): string
    {
        return $this->issue;
    }

    /**
     * Set the value of issue
     *
     * @param string $issue
     *
     * @return self
     */
    public function setIssue(string $issue): self
    {
        $this->issue = $issue;

        return $this;
    }

    /**
     * Get the value of content
     *
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @param string $content
     *
     * @return self
     */
    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }
}