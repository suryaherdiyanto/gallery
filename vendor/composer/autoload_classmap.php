<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Modules\\Gallery\\Database\\Seeders\\GalleryDatabaseSeeder' => $baseDir . '/Database/Seeders/GalleryDatabaseSeeder.php',
    'Modules\\Gallery\\Entities\\Gallery' => $baseDir . '/Entities/Gallery.php',
    'Modules\\Gallery\\Entities\\GalleryTranslation' => $baseDir . '/Entities/GalleryTranslation.php',
    'Modules\\Gallery\\Events\\GalleryWasCreated' => $baseDir . '/Events/GalleryWasCreated.php',
    'Modules\\Gallery\\Events\\GalleryWasDeleted' => $baseDir . '/Events/GalleryWasDeleted.php',
    'Modules\\Gallery\\Events\\GalleryWasUpdated' => $baseDir . '/Events/GalleryWasUpdated.php',
    'Modules\\Gallery\\Http\\Controllers\\Admin\\GalleryController' => $baseDir . '/Http/Controllers/Admin/GalleryController.php',
    'Modules\\Gallery\\Http\\Requests\\StoreGallery' => $baseDir . '/Http/Requests/StoreGallery.php',
    'Modules\\Gallery\\Http\\Requests\\UpdateGallery' => $baseDir . '/Http/Requests/UpdateGallery.php',
    'Modules\\Gallery\\Providers\\GalleryServiceProvider' => $baseDir . '/Providers/GalleryServiceProvider.php',
    'Modules\\Gallery\\Providers\\RouteServiceProvider' => $baseDir . '/Providers/RouteServiceProvider.php',
    'Modules\\Gallery\\Repositories\\Cache\\CacheGalleryDecorator' => $baseDir . '/Repositories/Cache/CacheGalleryDecorator.php',
    'Modules\\Gallery\\Repositories\\Eloquent\\EloquentGalleryRepository' => $baseDir . '/Repositories/Eloquent/EloquentGalleryRepository.php',
    'Modules\\Gallery\\Repositories\\GalleryRepository' => $baseDir . '/Repositories/GalleryRepository.php',
    'Modules\\Gallery\\Sidebar\\SidebarExtender' => $baseDir . '/Sidebar/SidebarExtender.php',
    'Modules\\Gallery\\Tests\\BaseGalleryTest' => $baseDir . '/Tests/BaseGalleryTest.php',
    'Modules\\Gallery\\Tests\\GalleryRepositoryTest' => $baseDir . '/Tests/GalleryRepositoryTest.php',
);
