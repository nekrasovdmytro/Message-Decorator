<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 15.12.15
 * Time: 16:01
 */

namespace MessageDecorator\Decorator;

use MessageDecorator\Message\MessageInterface;

class MessageDecorator
{
    protected $message;
    protected $text;

    public function __construct(MessageInterface $message)
    {
        $this->message = $message;
        $this->resetText();
    }

    protected function resetText()
    {
        $this->text = $this->message->getText();
    }

    public function getText()
    {
        return $this->text;
    }
}