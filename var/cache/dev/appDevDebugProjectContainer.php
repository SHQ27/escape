<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXe7a9bp\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXe7a9bp/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerXe7a9bp.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerXe7a9bp\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerXe7a9bp\appDevDebugProjectContainer([
    'container.build_hash' => 'Xe7a9bp',
    'container.build_id' => '5ddbaf2c',
    'container.build_time' => 1556911435,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXe7a9bp');