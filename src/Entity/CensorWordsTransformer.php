<?php

namespace App\Entity;


use App\Repository\CommentRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Form\DataTransformerInterface;
use Snipe\BanBuilder\CensorWords;

class CensorWordsTransformer implements DataTransformerInterface
{
    private $censor;

    public function __construct()
    {
        $this->censor = new CensorWords();
    }

    public function transform($value)
    {
        // This method is called when the form is initially rendered.
        // We don't need to do anything here.
        return $value;
    }

    public function reverseTransform($value)
    {
        // This method is called when the form is submitted.
        // We'll censor the text here.
        $censored_string = $this->censor->censorString($value);
        return $censored_string;
    }
}
