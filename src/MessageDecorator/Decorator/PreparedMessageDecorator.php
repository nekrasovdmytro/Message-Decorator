<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 15.12.15
 * Time: 16:11
 */

namespace MessageDecorator\Decorator;


use MessageDecorator\Message\MessageInterface;

class PreparedMessageDecorator extends MessageDecorator
{
    public function __construct(MessageInterface $message)
    {
        parent::__construct($message);
    }

    public function getText()
    {
        $this->text = $this->trim($this->text);
        $this->text = $this->deleteDoubleSpaces($this->text);
        $this->text = $this->htmlspecialchars($this->text);

        return $this->text;
    }

    protected function trim($text)
    {
        return trim($text);
    }

    protected function deleteDoubleSpaces($text)
    {
        return str_replace('  ', '', $text);
    }

    protected function htmlspecialchars($text)
    {
        return htmlspecialchars($text);
    }
}