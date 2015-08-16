<?php
namespace App\Adoption;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Cat
{
    /**
     * @ORM\Id() @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $weight;

    function __construct($name, $weight)
    {
        $this->name = $name;
        $this->weight = $weight;
    }


}
