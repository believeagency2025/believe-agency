<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

trait ImageUploadTrait
{
    /**
     * Upload an image and convert it to WebP.
     *
     * @param UploadedFile $file
     * @param string $folder
     * @return string|false
     */
    public function uploadImageWebp(UploadedFile $file, string $folder)
    {
        $filename = Str::random(20) . '.webp';
        $path = $folder . '/' . $filename;

        $image = @imagecreatefromstring($file->get());

        if (!$image || (PHP_VERSION_ID >= 80000 && !($image instanceof \GdImage)) || (PHP_VERSION_ID < 80000 && !is_resource($image))) {
            // Fallback to storing original file if GD cannot process it
            return $file->store($folder, 'public');
        }

        // Handle alpha transparency for PNGs we just converted from string
        imagepalettetotruecolor($image);
        imagealphablending($image, true);
        imagesavealpha($image, true);

        if ($image) {
            ob_start();
            imagewebp($image, null, 80);
            $content = ob_get_clean();
            imagedestroy($image);

            Storage::disk('public')->put($path, $content);
            return $path;
        }

        return false;
    }
}
