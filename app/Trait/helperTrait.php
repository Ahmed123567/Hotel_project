<?php

namespace App\Trait;

use Yajra\DataTables\Facades\DataTables;

trait helperTrait
{

    public function imageUpload($data, $filename='image'){

        $imageName = time().'-'.$data->file($filename)->getClientOriginalName();
        // $data->file('image')->storeAs('docs', $imageName);
        $data->image->move(public_path('images') , $imageName);

        return $imageName;
    }

    

}