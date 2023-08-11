<?php

declare(strict_types=1);

namespace Vendor\Example\Service;

class PdfService
{
    // $url = https://example.ddev.site/preview/of/mypage/
    private function genPdf(string $url): string
    {
        // Ensure to switch from ddev host with fake ssl certificate to docker host name without ssl
        $url = str_replace('https://', 'http://', str_replace('.ddev.site', '-web', $url));

        // Call puppeteer service
        $serviceUrl = 'http://aussicht-printpdf/?url=' . urlencode($url) . '&format=' . urlencode('A4') . '&filename=example.js';

        // Call the URL with Guzzle etc.
        $pdf = '...';

        return $pdf;
    }
}
