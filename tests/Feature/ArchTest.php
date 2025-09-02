<?php

declare(strict_types=1);

arch()->preset()->security();

arch()->preset()->php();

arch()->preset()->laravel()->ignoring('App\Providers\Filament\AdminPanelProvider');
