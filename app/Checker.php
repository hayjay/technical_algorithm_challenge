<?php declare(strict_types=1);

namespace App;

/**
 * Pangrams, anagrams and palindromes
 * 
 * Implement each of the functions of the Checker class. 
 * Aim to spend about 10 minutes on each function. 
 */
class Checker
{
    public const ALPHABETS = [
        'a', 'b', 'c', 'd', 'e', 'f',
        'g', 'h', 'i', 'j', 'k', 'l',
        'm', 'n', 'o', 'p', 'q', 'r',
        's', 't', 'u', 'v', 'w', 'x',
        'y', 'z'
    ];
    /**
     * A palindrome is a word, phrase, number, or other sequence of characters 
     * which reads the same backward or forward.
     *
     * @param string $word
     * @return bool
     */
    public static function isPalindrome(string $word)
    {
        $word = strtolower($word);
        $counter = 0;
        $i = strlen($word) - 1;
        
        while ($i > $counter) {
            if($word[$counter] != $word[$i]) {
                return false;
                break;
            }
            //base case for the loop -> basically, this simply helps in terminating the loop to avoid endless loop
            $counter++;
            $i--;
        }
        return true;
    }
    
    /**
     * An anagram is the result of rearranging the letters of a word or phrase 
     * to produce a new word or phrase, using all the original letters 
     * exactly once.
     * 
     * @param string $word
     * @param string $comparison
     * @return bool
     */
    public static function isAnagram(string $word, string $comparison) : bool
    {
        $splitted_word = str_split($word);
        $splitted_comparison = str_split($comparison);
        $count = 0;
        foreach ($splitted_word as $k => $v) {
            if (!in_array($v, $splitted_comparison)) {
                $count++;
            }
        }
        if ($count != 0) {
            return false;
        } else {
            return true;
        }
    }

    /**
     * A Pangram for a given alphabet is a sentence using every letter of the 
     * alphabet at least once. 
     * 
     * @param string $phrase
     * @return bool
     */    
    public static function isPangram(string $phrase) : bool
    {
        $phrase = strtolower($phrase);
		foreach (self::ALPHABETS as $letter) {
            // basically, strstr helps in getting the occurence of a string/character and if found, it returns the needle and other string behind it -> true 
			if (!strstr($phrase, $letter)){
				return false;
            }
		}
		return true;
    }
}

Checker::isPalindrome('rubber');