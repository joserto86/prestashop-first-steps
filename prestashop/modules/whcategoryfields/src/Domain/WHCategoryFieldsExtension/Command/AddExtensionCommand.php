<?php

namespace WebHelpers\WHCategoryFields\Domain\WHCategoryFieldsExtension\Command;

class AddExtensionCommand
{
    private int $idCategory;
    private string $shortText;
    private string $longText;
    private string $filename;

    public function __construct(int $idCategory, string $shortText, string $longText, string $filename)
    {
        $this->idCategory = $idCategory;
        $this->shortText = $shortText;
        $this->longText = $longText;
        $this->filename = $filename;
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