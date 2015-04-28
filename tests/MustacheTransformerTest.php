<?php

namespace PhpTransformers\Mustache\Test;

use PhpTransformers\Mustache\MustacheTransformer as Transformer;

class MustacheTransformerTest extends \PHPUnit_Framework_TestCase
{
	private $name = 'Mustache';

    /**
     * @dataProvider renderFileProvider
     */
    public function testRenderFile($inputFile, $expectedFile, array $locals = array())
    {
    	$transformer = new Transformer();
    	$result = $transformer->renderFile($inputFile, $locals);
    	$expected = file_get_contents($expectedFile);
    	$this->assertEquals($result, $expected);
    }

    public function renderFileProvider() {
    	$tests[] = array(
    		__DIR__ . '/Fixtures/input.txt',
    		__DIR__ . '/Fixtures/expected.txt',
    		array(
    			'name' => 'Linus',
    		),
    	);
    	return $tests;
    }

    /**
     * @dataProvider renderFileProvider
     */
    public function testRender($inputFile, $expectedFile, array $locals = array())
    {
    	$transformer = new Transformer();
    	$input = file_get_contents($inputFile);
    	$result = $transformer->render($input, $locals);
    	$expected = file_get_contents($expectedFile);
    	$this->assertEquals($result, $expected);
    }

    public function testGetName()
    {
        $engine = new Transformer();
        $this->assertEquals(strtolower($this->name), $engine->getName());
    }
}