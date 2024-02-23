<?php

namespace WebHelpers\WHCategoryFields\Domain\WHCategoryFieldsExtension\Command;

class DeleteExtensionCommand
{
    private int $idCategory;

    public function __construct(int $idCategory)
    {
        $this->idCategory = $idCategory;
    }

    public function getIdCategory(): int
    {
        return $this->idCategory;
    }
}