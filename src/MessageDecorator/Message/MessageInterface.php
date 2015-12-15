<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 15.12.15
 * Time: 15:46
 */

namespace MessageDecorator\Message;


interface MessageInterface
{
    public function setText($text);
    public function getText();
}