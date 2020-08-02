<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ImageUploadController extends Controller
{
    public function postImageUpload($imageFile)
    {
        /*
            image name: posts/stars.png
                        posts/l1/stars.png 750 439 (top post 1 image)
                        posts/l2/stars.png 380 220 (top post 1,2 image)
                        posts/l3/stars.png 263 180 (post listing image)
                        posts/l4/stars.png 380 180 (editor's pick top image)
                        posts/l5/stars.png 100 80 (editor's pick other image)
                        posts/l6/stars.png 690 300 (post image)
        */

        // get filename with extension
        $fileNameWithExtension = $imageFile->getClientOriginalName();
        // get filename without extension
        $fileName = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);
        //get file extension
        $extension = $imageFile->getClientOriginalExtension();
        //filename to store
        $fileNameToStore = $fileName.'_'.time().'.'.$extension;
        //Upload original image
        $imageFile->storeAs('public/posts', $fileNameToStore);
        $imageFile->storeAs('public/posts/l1', $fileNameToStore);
        $imageFile->storeAs('public/posts/l2', $fileNameToStore);
        $imageFile->storeAs('public/posts/l3', $fileNameToStore);
        $imageFile->storeAs('public/posts/l4', $fileNameToStore);
        $imageFile->storeAs('public/posts/l5', $fileNameToStore);
        $imageFile->storeAs('public/posts/l6', $fileNameToStore);

        // Resize images here
        $thumbNailL1Path = ('storage/posts/l1/'.$fileNameToStore);
        $img = Image::make($thumbNailL1Path)->resize(750, 439) -> save($thumbNailL1Path);
 
        $thumbNailL2Path = ('storage/posts/l2/'.$fileNameToStore);
        $img = Image::make($thumbNailL2Path)->resize(380, 220) -> save($thumbNailL2Path);
 
        $thumbNailL3Path = ('storage/posts/l3/'.$fileNameToStore);
        $img = Image::make($thumbNailL3Path)->resize(263, 180) -> save($thumbNailL3Path);
 
         $thumbNailL4Path = ('storage/posts/l4/'.$fileNameToStore);
         $img = Image::make($thumbNailL4Path)->resize(380, 180) -> save($thumbNailL4Path);
 
         $thumbNailL5Path = ('storage/posts/l5/'.$fileNameToStore);
         $img = Image::make($thumbNailL5Path)->resize(100, 80) -> save($thumbNailL5Path);
 
         $thumbNailL6Path = ('storage/posts/l6/'.$fileNameToStore);
         $img = Image::make($thumbNailL6Path)->resize(690, 300) -> save($thumbNailL6Path);
 
         // store the paths to the thumbnails
         $thumbNailL1PathToStore = 'posts/l1/'.$fileNameToStore;
         $thumbNailL2PathToStore = 'posts/l2/'.$fileNameToStore;
         $thumbNailL3PathToStore = 'posts/l3/'.$fileNameToStore;
         $thumbNailL4PathToStore = 'posts/l4/'.$fileNameToStore;
         $thumbNailL5PathToStore = 'posts/l5/'.$fileNameToStore;
         $thumbNailL6PathToStore = 'posts/l6/'.$fileNameToStore;
        
        $thumbNailPathsToStore = $thumbNailL1PathToStore.','.$thumbNailL2PathToStore.','.$thumbNailL3PathToStore.','.
                                    $thumbNailL4PathToStore.','.$thumbNailL5PathToStore.','.$thumbNailL6PathToStore;
      
        return $thumbNailPathsToStore;
    }
}
