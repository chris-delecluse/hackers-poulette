<?php

class Mail
{
    public string $to;
    public string $subject;
    public string $message;
    public array | string $additionalHeaders;
    public string $additionalParams;
}