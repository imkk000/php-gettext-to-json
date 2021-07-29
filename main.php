<?php

use Gettext\Loader\PoLoader;
use Gettext\Loader\JsonLoader;
use Gettext\Generator\JsonGenerator;
use Gettext\Translations;

include 'vendor/autoload.php';

$translations = (new PoLoader())->loadFile('locales/en.po');
(new JsonGenerator())->generateFile($translations, 'locales/en_new.json');

$loadedTranslations = (new JsonLoader())->loadFile('locales/en_new.json');
print_r($loadedTranslations);
