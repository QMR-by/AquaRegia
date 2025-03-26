<?php

namespace App\Controllers;

class Media extends BaseController
{
    public function index()
    {
        // Define the folder path using FCPATH (which points to the public folder)
        $folderPath = FCPATH . 'img\gallery';
        
        // Get all files from the folder (excluding '.' and '..')
        $files = array_diff(scandir($folderPath), ['.', '..']);
        
        // Initialize an array for image paths
        $images = [];
        
        // Loop through each file and check its extension
        foreach ($files as $file) {
            $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
            if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif'])) {
                // Build the relative URL for the image (from the public folder)
                $images[] = 'img/gallery/' . $file;
            }
        }
        
        // Pass the images array to the view
        $data['images'] = $images;
        return view('media_gallery', $data);
    }
}
