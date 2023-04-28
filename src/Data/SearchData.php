<?php   

namespace App\Data;
use App\Entity\Freelance;
use Symfony\Component\Validator\Constraints as Assert;


class SearchData{

    /**
     * @var int
     */
    public $page=1;

    /**
     * @var string
     */
    public $q='';

    /**
     * @var string
     */
    public $categories='';

    /**
     * @var null|integer
     * @Assert\GreaterThan(propertyPath="min", message="Max budget should be greater than Min budget")
     */
    public $max;

    /**
     * @var null|integer
     * @Assert\LessThan(propertyPath="max", message="Min budget should be less than Max budget")
     */
    public $min;

    /**
     * @var string[]
     */
    public $dates=[];

}