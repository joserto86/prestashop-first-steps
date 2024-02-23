<?php

namespace WebHelpers\WHCategoryFields\Domain\WHCategoryFieldsExtension\CommandHandler;

use Doctrine\ORM\EntityManagerInterface;
use WebHelpers\WHCategoryFields\Domain\WHCategoryFieldsExtension\Command\DeleteExtensionCommand;
use WebHelpers\WHCategoryFields\Domain\WHCategoryFieldsExtension\Exception\CannotDeleteExtensionException;
use WebHelpers\WHCategoryFields\Repository\WHCategoryFieldsExtensionRepository;

class DeleteExtensionHandler
{
    private $entityManager;
    private $extensionRepository;

    public function __construct(EntityManagerInterface $entityManager, $extensionRepository)
    {
        $this->entityManager = $entityManager;
        $this->extensionRepository = $extensionRepository;
    }

    public function handle(DeleteExtensionCommand $command)
    {
        try{
            $extension = $this->extensionRepository->findOneBy(['idCategory' => $command->getIdCategory()]);
            if(!is_null($extension))
            {
                $this->entityManager->remove($extension);
                $this->entityManager->flush();
            }
        }catch(\Exception $e){
            throw new CannotDeleteExtensionException(
                sprintf('Failed to delete the extension')
            );
        }
    }
}