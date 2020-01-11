<?php

declare(strict_types=1);

namespace Tests;

use DemoTest;
use PHPUnit\Framework\TestCase;

final class DemoTest extends TestCase 
{

    public function testCannotBeShow()
    {
        $cpstpl_example = new CpsTplExample;
        
        $this->expectOutputString($cpstpl_example->show());
        print $cpstpl_example->show();
    }

}