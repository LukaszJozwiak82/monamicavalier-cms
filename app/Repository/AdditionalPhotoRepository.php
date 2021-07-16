<?php
declare(strict_types=1);

namespace App\Repository;

use App\Models\AdditionalPhoto;
use Illuminate\Support\Collection;

class AdditionalPhotoRepository
{

    public function getPhoto($id): Object {

        $photo = AdditionalPhoto::find($id);
        return $photo;
    }

}
