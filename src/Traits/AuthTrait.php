<?php

namespace App\Traits;

use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Contracts\Service\Attribute\Required;

trait AuthTrait 
{
    private Security $security;
    
    public function getAuth(): ?UserInterface
    {
        return $this->security->getUser();
    }

    #[Required]
    public function setSecurity(Security $security)
    {
        $this->security = $security;
    }
    
}