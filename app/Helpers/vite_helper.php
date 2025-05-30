<?php

function vite(string $entry): string
{
    $devServer = 'http://localhost:5173';
    $isDev = isViteDevServerRunning($devServer);

    if ($isDev) {
        return <<<HTML
            <script type="module" src="{$devServer}/@vite/client"></script>
            <script type="module" src="{$devServer}/src/{$entry}"></script>
        HTML;
    }

    $manifestPath = FCPATH . 'build/.vite/manifest.json';
    if (!file_exists($manifestPath)) {
        return "<script type=\"module\" src=\"/build/{$entry}\"></script>";
    }

    $manifest = json_decode(file_get_contents($manifestPath), true);
    $path = $manifest["src/{$entry}"]['file'] ?? null;

    if (!$path) {
        return "<script type=\"module\" src=\"/build/{$entry}\"></script>";
    }

    $css = $manifest["src/{$entry}"]['css'][0] ?? [];

    return <<<HTML
        <script type="module" src="/build/{$path}"></script>
        <link rel="stylesheet" href=/build/{$css}>
    HTML;
}

function isViteDevServerRunning(string $url): bool
{
    try {
        $context = stream_context_create(['http' => ['timeout' => 0.5]]);
        $contents = @file_get_contents($url, false, $context);
        return $contents !== false;
    } catch (\Throwable $e) {
        return false;
    }
}
