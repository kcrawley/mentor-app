<?php
namespace MentorApp;
class UserServiceTest extends \PHPUnit_Framework_TestCase
{
    public function testTrueTest()
    {
        new UserService(new \PDOTestHelper());
        $this->assertTrue(true);
    }
}
    