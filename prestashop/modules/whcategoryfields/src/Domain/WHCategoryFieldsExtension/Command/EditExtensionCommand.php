<?php

namespace WebHelpers\WHCategoryFields\Domain\WHCategoryFieldsExtension\Command;

class EditExtensionCommand
{
    private int $idExtension;
    private int $idCategory;
    private string $shortText;
    private string $longText;
    private string $filename;

    public function __construct(int $idExtension, int $idCategory, string $shortText, string $longText, string $filename)
    {
        $this->idExtension = $idExtension;
        $this->idCategory = $idCategory;
        $this->shortText = $shortText;
        $this->longText = $longText;
        $this->filename = $filename;
    }

    public function getIdExtension(): int
    {
        return $this->idExtension;
    }

    public function getIdCategory(): int
    {
        return $this->idCategory;
    }

    public function getShortText(): string
    {
        return $this->shortText;
    }

    public function getLongText(): string
    {
        return $this->longText;
    }

    public function getFilename(): string
    {
        return $this->filename;
    }
}