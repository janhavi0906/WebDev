class Practical
{
    public function add($a, $b)
    {
        if (is_numeric($a) && is_numeric($b)) {
            return $a + $b;
        } elseif (is_string($a) && is_string($b)) {
            return (int)$a + (int)$b;
        } else {
            throw new InvalidArgumentException("Invalid input. Both inputs must be numeric values or strings.");
        }
    }
}
use PHPUnit\Framework\TestCase;

class PracticalTest extends TestCase
{
    public function testAddAcceptsNumericValues()
    {
        $practical = new Practical();
        $result = $practical->add(5, 10);
        $this->assertEquals(15, $result);
    }

    public function testAddAcceptsStringValues()
    {
        $practical = new Practical();
        $result = $practical->add("5", "10");
        $this->assertEquals(15, $result);
    }

    public function testAddRejectsNonNumericValues()
    {
        $this->expectException(InvalidArgumentException::class);
        $practical = new Practical();
        $practical->add("5", "non-numeric");
    }
}

