<?php

arch()->preset()->security();

arch()->preset()->php();

arch()->preset()->laravel()->ignoring('App\Providers\Filament\AdminPanelProvider');