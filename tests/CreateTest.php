<?php
/**
 * The file for the create-token service tests
 *
 * @author     Jack Clayton <clayjs0@gmail.com>
 * @copyright  2016 Jack Clayton
 * @license    MIT
 */

namespace Jstewmc\CreateToken;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the create-token service
 */
class CreateTest extends TestCase
{
    /* !create() */
    
    /**
     * create() should throw an InvalidArgumentException if length is not positive
     */
    public function testCreateThrowsExceptionIfLengthIsNotPositive()
    {
        $this->setExpectedException('InvalidArgumentException');
        
        (new Create())(-1);
        
        return;
    }
    
    /**
     * create() should return string if length is positive
     */
    public function testCreateReturnsStringIfLengthIsPositive()
    {
        $length = 64;
        
        $token = (new Create())($length);
        
        $this->assertTrue(is_string($token));
        $this->assertEquals($length, strlen($token)); 
        
        return;
    }
}
