class Practical
{
    public function generateFibonacciSequence($n)
    {
        if (!is_int($n)) {
            throw new InvalidArgumentException("Invalid input. Input must be an integer.");
        }
        
        $fibonacciSequence = [];
        $fibonacciSequence[0] = 0;
        $fibonacciSequence[1] = 1;

        for ($i = 2; $i < $n; $i++) {
            $fibonacciSequence[$i] = $fibonacciSequence[$i - 1] + $fibonacciSequence[$i - 2];
        }

        return $fibonacciSequence;
    }
}
use PHPUnit\Framework\TestCase;

class PracticalTest extends TestCase
{
    public function testGenerateFibonacciSequenceAcceptsInteger()
    {
        $practical = new Practical();
        $n = 5; // Number of Fibonacci numbers to generate
        $fibonacciSequence = $practical->generateFibonacciSequence($n);
        
        $this->assertEquals([0, 1, 1, 2, 3], $fibonacciSequence);
    }

    public function testGenerateFibonacciSequenceRejectsNonInteger()
    {
        $this->expectException(InvalidArgumentException::class);
        $practical = new Practical();
        $practical->generateFibonacciSequence("invalid");
    }
}

