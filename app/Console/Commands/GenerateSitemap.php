<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate a sitemap from PHP files in the pages_portfolio directory';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Define the directory containing the PHP files
        $directory = resource_path('views/pages_protfolio');
        
        // Check if the directory exists
        if (!is_dir($directory)) {
            $this->error("The directory {$directory} does not exist.");
            return 1;
        }

        // Scan the directory for files
        $phpFiles = array_diff(scandir($directory), ['..', '.']);

        // Create a new Sitemap instance
        $sitemap = Sitemap::create();

        foreach ($phpFiles as $file) {
            // Process only PHP files and handle .blade.php separately
            if (str_ends_with($file, '.blade.php')) {
                $filename = substr($file, 0, -10); // Remove `.blade.php`
            } elseif (pathinfo($file, PATHINFO_EXTENSION) === 'php') {
                $filename = pathinfo($file, PATHINFO_FILENAME); // Remove `.php`
            } else {
                continue; // Skip non-PHP files
            }

            // Generate URL (update the logic to fit your routing if necessary)
            $url = url("/allopub-app/stand-portfolio/{$filename}");

            // Add URL to sitemap
            $sitemap->add(
                Url::create($url)
                    ->setPriority(0.9)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
            );
        }

        // Save the sitemap to the public directory
        $sitemapPath = public_path('sitemap.xml');
        $sitemap->writeToFile($sitemapPath);

        $this->info("Sitemap generated successfully at {$sitemapPath}");

        return 0;
    }
}
