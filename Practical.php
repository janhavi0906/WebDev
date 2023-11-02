<?php
/**
 * Class Practical
 * This class contains static functions for practical purposes.
 */
class Practical {
    /**
     * Calculate the factorial of a number.
     *
     * @param int $number The number to calculate factorial for.
     * @return int The factorial of the given number.
     */
    public static function calculateFactorial($number) {
        if ($number <= 1) {
            return 1;
        } else {
            return $number * self::calculateFactorial($number - 1);
        }
    }

    /**
     * Check if a number is prime.
     *
     * @param int $number The number to check for primality.
     * @return bool True if the number is prime, false otherwise.
     */
    public static function isPrime($number) {
        if ($number <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }
        return true;
    }

    /**
     * Generate a random password of given length.
     *
     * @param int $length Length of the password to generate.
     * @return string The generated random password.
     */
    public static function generateRandomPassword($length) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $password = '';
        for ($i = 0; $i < $length; $i++) {
            $password .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $password;
    }
}

