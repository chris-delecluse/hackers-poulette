<?php

class AutoSendMail
{
    public string $mailTo;
    public string $subject;
    public string $message;
    private array $additionalHeaders;

    function __construct($mailTo)
    {
        $this->mailTo = $mailTo;
        $this->subject = "essaie...";
        $this->message = "Envoies du mail réussi !";
        $this->additionalHeaders = array(
            'From' => 'christopherdeleclusepro@gmail.com',
            'Reply-To' => 'christopherdeleclusepro@gmail.com',
            'X-Mailer' => 'PHP/' . phpversion()
        );
    }

    public function sendMail() : string
    {
        return mail($this->mailTo, $this->subject, $this->message, $this->additionalHeaders);
    }
}