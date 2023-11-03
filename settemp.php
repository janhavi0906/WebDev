<?php

class Song
{
    private $tempo;

    public function setTempo($tempo)
    {
        if (is_numeric($tempo) && (int)$tempo == $tempo) {
            $this->tempo = (int)$tempo;
        } else {
            throw new InvalidArgumentException("Invalid tempo value. Tempo must be an integer or an integer string.");
        }
    }

    public function getTempo()
    {
        return $this->tempo;
    }
}

class SongTest extends PHPUnit\Framework\TestCase
{
    public function testSetTempoAcceptsInteger()
    {
        $song = new Song();
        $song->setTempo(120);
        $this->assertEquals(120, $song->getTempo());
    }

    public function testSetTempoAcceptsIntegerString()
    {
        $song = new Song();
        $song->setTempo("120");
        $this->assertEquals(120, $song->getTempo());
    }

    public function testSetTempoRejectsFloat()
    {
        $this->expectException(InvalidArgumentException::class);
        $song = new Song();
        $song->setTempo(120.5);
    }

    public function testSetTempoRejectsNonNumeric()
    {
        $this->expectException(InvalidArgumentException::class);
        $song = new Song();
        $song->setTempo("invalid");
    }
}

