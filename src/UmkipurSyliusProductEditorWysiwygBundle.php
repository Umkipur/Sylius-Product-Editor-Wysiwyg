<?php

declare(strict_types=1);

namespace Umkipur\SyliusProductEditorWysiwyg;

use FOS\CKEditorBundle\FOSCKEditorBundle;
use Sylius\Bundle\CoreBundle\Application\SyliusPluginTrait;
use Symfony\Component\HttpKernel\Bundle\Bundle;

final class UmkipurSyliusProductEditorWysiwygBundle extends Bundle
{
    use SyliusPluginTrait;

    public function getContainerExtensions(): array
    {
        return [
            new FOSCKEditorBundle(),
        ];
    }
}
