class Practical {
    public function add($a, $b) {
        if ((is_numeric($a) || is_string($a)) && (is_numeric($b) || is_string($b))) {
            return $a + $b;
        } else {
            throw new InvalidArgumentException("Invalid input types");
        }
    }
}

