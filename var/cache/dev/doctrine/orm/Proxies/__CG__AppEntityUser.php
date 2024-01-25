<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \App\Entity\User implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'applications' => [parent::class, 'applications', null],
        "\0".parent::class."\0".'createdAt' => [parent::class, 'createdAt', null],
        "\0".parent::class."\0".'email' => [parent::class, 'email', null],
        "\0".parent::class."\0".'entrepriseProfil' => [parent::class, 'entrepriseProfil', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'isVerified' => [parent::class, 'isVerified', null],
        "\0".parent::class."\0".'password' => [parent::class, 'password', null],
        "\0".parent::class."\0".'roles' => [parent::class, 'roles', null],
        "\0".parent::class."\0".'status' => [parent::class, 'status', null],
        "\0".parent::class."\0".'userProfil' => [parent::class, 'userProfil', null],
        "\0".parent::class."\0".'username' => [parent::class, 'username', null],
        'applications' => [parent::class, 'applications', null],
        'createdAt' => [parent::class, 'createdAt', null],
        'email' => [parent::class, 'email', null],
        'entrepriseProfil' => [parent::class, 'entrepriseProfil', null],
        'id' => [parent::class, 'id', null],
        'isVerified' => [parent::class, 'isVerified', null],
        'password' => [parent::class, 'password', null],
        'roles' => [parent::class, 'roles', null],
        'status' => [parent::class, 'status', null],
        'userProfil' => [parent::class, 'userProfil', null],
        'username' => [parent::class, 'username', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}