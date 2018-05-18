<?php

namespace Jiny\Hello;

class HelloMessage
{
    /**
     * @return void
     */
    public function __construct()
    {
        echo __CLASS__." 객체가 생성이 되었습니다.<br>";
    }

    public function sayHello($name='')
    {
        echo "Hi! ". $name. "nice meet you.<br>";
    }

}