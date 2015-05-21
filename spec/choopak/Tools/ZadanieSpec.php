<?php

namespace spec\choopak\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ZadanieSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('choopak\Tools\Zadanie');
    }
}
