<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commercial
 *
 * @ORM\Entity()
 */
class Commercial extends User
{
    /**
     * @var string
     *
     * @ORM\Column(name="sale", type="integer")
     */
    private $sale;

    /**
     * @return string
     */
    public function getSale()
    {
        return $this->sale;
    }

    /**
     * @param string $sale
     */
    public function setSale($sale)
    {
        $this->sale = $sale;

        return $this;
    }
}

