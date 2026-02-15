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

        $image = null;
        $extension = strtolower($file->getClientOriginalExtension());

        switch ($extension) {
            case 'jpg':
            case 'jpeg':
                $image = imagecreatefromjpeg($file->getRealPath());
                break;
            case 'png':
                $image = imagecreatefrompng($file->getRealPath());
                imagepalettetotruecolor($image);
                imagealphablending($image, true);
                imagesavealpha($image, true);
                break;
            case 'webp':
                $image = imagecreatefromwebp($file->getRealPath());
                break;
            case 'gif':
                $image = imagecreatefromgif($file->getRealPath());
                break;
            default:
                return $file->store($folder, 'public');
        }

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
