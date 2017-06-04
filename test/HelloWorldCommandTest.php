<?php

use mheap\HelloWorldCommand;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;

class HelloWorldCommandTest extends \PHPUnit\Framework\TestCase
{
    public function testCreateDirectory()
    {
        $app = new Application();
        $app->add(new HelloWorldCommand());
        $command = $app->find('app:hello');

        $tester = new CommandTester($command);
        $tester->execute(array(
            'command' => $command->getName(),
            'name' => 'Michael',
        ));

        $this->assertEquals('Hello Michael'.PHP_EOL, $tester->getDisplay());
    }
}
