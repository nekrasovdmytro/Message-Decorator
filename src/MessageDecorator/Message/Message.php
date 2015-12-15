<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 15.12.15
 * Time: 15:48
 */

namespace MessageDecorator\Message;


class Message implements MessageInterface
{
    protected $text;

    public function setText($text)
    {
        $this->text = $text;
    }

    public function getText()
    {

    }
}