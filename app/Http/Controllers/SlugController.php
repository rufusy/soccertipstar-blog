<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class SlugController extends Controller
{
     /**
     * @param $title
     * @param int $id
     * @return string
     * @throws \Exception
     */

    public function createSlug($title, $id=0)
    {
        // Normalize the title
        $slug = str_slug($title);

        // get any that could be possibly related.
        // This cuts the queries down by doing it once 
        $allSlugs = $this->getRelatedSlugs($slug, $id);
        
        // if we haven't used it before then we are all good
        if(!$allSlugs->contains('slug', $slug))
        {
            return $slug;
        }

         // Just append numbers like a savage until we find not used.
         for ($i = 1; $i <= 10; $i++) 
         {
            $newSlug = $slug.'-'.$i;
            if (! $allSlugs->contains('slug', $newSlug)) 
            {
                return $newSlug;
            }
        }
        throw new \Exception('Can not create a unique slug');
    }

    protected function getRelatedSlugs($slug, $id=0)
    {
        return Post::select('slug')->where('slug', 'like', $slug.'%')
                    ->where('id', '<>', $id)
                    ->get();
    }
}
