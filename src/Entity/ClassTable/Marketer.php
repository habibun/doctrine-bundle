<?php

namespace App\Entity\ClassTable;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Marketer extends Employee
{
    /**
     * @var bool
     *
     * @ORM\Column(name="is_internal", type="boolean")
     */
    private $isInternal = true;

    /**
     * @return $this
     */
    public function setIsInternal(bool $isInternal): self
    {
        $this->isInternal = $isInternal;

        return $this;
    }

    public function getIsInternal(): bool
    {
        return $this->isInternal;
    }
}
