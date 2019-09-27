<?php

namespace App;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class ContactService
{
    private $urlGenerator;

    public function __construct(UrlGeneratorInterface $urlGenerator)
    {
        $this->urlGenerator = $urlGenerator;

    }

    public function testMyService(): RedirectResponse
    {
        return new RedirectResponse(
            $this->urlGenerator->generate('contact')
        );
    }
}
