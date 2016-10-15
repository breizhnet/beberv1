<?php
/**
 * Created by PhpStorm.
 * User: laurent
 * Date: 15/10/2016
 * Time: 12:42
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="beber")
 */
class Beber
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=15, nullable=false)
     * @Assert\NotBlank
     */
    private $birthplace;

    public function __construct()
    {

    }

}