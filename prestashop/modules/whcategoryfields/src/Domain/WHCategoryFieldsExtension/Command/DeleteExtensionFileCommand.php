<?php

namespace WebHelpers\WHCategoryFields\Domain\WHCategoryFieldsExtension\Command;

class DeleteExtensionFileCommand
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