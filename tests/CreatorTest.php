<?php

class CreatorTest extends PHPUnit_Framework_TestCase {

    protected $testArray = ['one' => 'value', 'two' => 'value', 'three' => 'value'];

    /**
     * @test
     */
    public function it_creates_a_language_file()
    {
        $creator = new \LaraPackage\LanguageFile\Creator();
        $result = $creator->make($this->testArray);
        $this->assertSame($result, $this->expected());
    }

    /**
     * @test
     */
    public function it_will_use_a_traversable_to_create_a_language_file()
    {
        $creator = new \LaraPackage\LanguageFile\Creator();
        $result = $creator->make(new \ArrayIterator($this->testArray));
        $this->assertSame($result, $this->expected());
    }

    protected function expected()
    {
        return '<?php' . PHP_EOL . PHP_EOL .
        'return [' . PHP_EOL .
        "\t" . "'one' => 'value'," . PHP_EOL .
        "\t" . "'two' => 'value'," . PHP_EOL .
        "\t" . "'three' => 'value'," . PHP_EOL .
        '];';
    }
}
