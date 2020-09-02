<?php
declare(strict_types=1);
/**
 * Copyright FraJa WeB - DEFBU (c) 2019
 */
namespace FraJaWeB\FwAuthenticator\Controller;

/**
 * Controller Abstract
 *
 * @author Frank Buijze - User Sense <frank@usersense.nl>
 *
 * All rights reserved
 */
class AuthenticatorController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

    /**
     * 
     * @var \FraJaWeB\FwAuthenticator\Domain\Repository\Backen
     */
    private $backendUserRepository;

    public function indexAction() {
        
    }
    
}