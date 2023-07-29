<?php

namespace App\Helpers;

use Dotenv\Util\Str;
use GuzzleHttp\Psr7\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Nette\Utils\Strings;

class GHelper
{
    public static function shout(string $string)
    {
        return strtoupper($string);
    }

    public static function getFilesNameInDir(string $directory = null): array|bool
    {
        // Check if the directory exists
        if (is_dir($directory)) {
            // Get the list of files and directories in the specified directory
            $files = scandir($directory);

            // Remove "." and ".." entries from the array
            $files = array_diff($files, array('.', '..'));

            // Initialize the $nameOfFiles array
            $nameOfFiles = [];

            // Now $files contains an array of file names in the directory
            foreach ($files as $file) {
                $nameOfFiles[] = $directory . '/' . $file; // Removed PHP_EOL as it's not needed
            }
            return $nameOfFiles;
        }
        return 0;
    }

    public static function requireFilesInDir(array $routesFiles): void
    {
        foreach ($routesFiles as $file) {
            require_once $file; // Removed __DIR__ . $dir . $routesFiles[0] and just used $file
        }
    }

    public static function prfixLang(): string
    {
        return 'ar' === app()->getLocale() ? 'ar' : 'en';
    }

    public static function setLang($lang)
    {
        Session::forget('locale');
        app()->setLocale((string)$lang);
        session()->put('locale', (string)$lang);
    }


    public static function changeLang($lang)
    {
        // app()->setLocale($lang);
        // session()->put('locale', $lang);

        // // if ($lang !=  app()->getLocale()) {
        // self::setLang($lang);
        // // }
        // return redirect()->back();
    }
}
