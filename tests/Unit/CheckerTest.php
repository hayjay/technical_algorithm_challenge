<?php declare(strict_types=1);

namespace Tests\Unit;

use App\Checker;
use PHPUnit\Framework\TestCase;


class CheckerTest extends TestCase
{

    public static function testWordIsPalindrome(): Void
    {
    	self::assertTrue(
    		Checker::isPalindrome('anna')
    	);
    	self::assertTrue(
    		Checker::isPalindrome('Bab')
    	);
    }

    public static function testWordIsNotAPalindrome(): Void
    {
    	self::assertFalse(
    		Checker::isPalindrome('Bark')
    	);
    }

    public function testWordIsAnagram(): Void
    {
    	self::assertTrue(
    		Checker::isAnagram('coalface', 'cacao elf')
    	);
    }

    public function testWordIsNotAnagram(): Void
    {
    	self::assertFalse(
    		Checker::isAnagram('coalface', 'dark elf')
    	);
    }

    public function testWordIsPangram(): Void
    {
    	self::assertTrue(
    		Checker::isPangram('The quick brown fox jumps over the lazy dog')
    	);
    }

    public function testWordIsNotPangram(): Void
    {
    	self::assertFalse(
    		Checker::isPangram('The British Broadcasting Corporation (BBC) is a British public service broadcaster.')
    	);
    }
}



 ?>