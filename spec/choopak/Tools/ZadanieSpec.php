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
        function it_should_have_setter_and_getter()
    {
        $this->setStr('rafal rafal durzynski durzynski')->getStr()->shouldReturn('rafal rafal durzynski durzynski');
    }
    function it_should_generate_wynik()
    {
        $this->setStr('rafal rafal durzynski durzynski')->wynik()->shouldReturn('rafal - 2; durzynski - 2; ');
    }
}
