<?php

namespace PhpTransformers\Mustache;

use PhpTransformers\PhpTransformer\Transformer;
use Mustache_Engine;

class MustacheTransformer extends Transformer
{
    protected $mustache;

    public function getName()
    {
        return 'mustache';
    }

    public function __construct(array $options = array())
    {
        $this->mustache = new Mustache_Engine($options);
    }
    public function render($template, array $locals = array())
    {
        return $this->mustache->render($template, $locals);
    }
}
