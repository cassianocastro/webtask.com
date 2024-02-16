<?php
declare(strict_types=1);

namespace App\view;

use Twig\{ Loader\FilesystemLoader, Environment };

/**
 *
 */
final class View
{

    private const TEMPLATES_PATH = "public/templates";

    public function render(string $html, array $context): void
    {
        $loader = new FilesystemLoader(self::TEMPLATES_PATH);

        $loader->addPath(self::TEMPLATES_PATH . "/includes", "inc");
        $loader->addPath(self::TEMPLATES_PATH . "/home/.components", "home");

        $env = (new Environment(
            $loader,
            [
                "cache" => false,
                "charset" => "utf8",
                "auto_reload" => true,
                "strict_variables" => true
            ]
        ));

        print $env->render($html, $context);
    }
}