<?php

namespace App\Export;

use App\Project;
use App\ProjectfanSelection;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;


class PostsQueryExport implements FromCollection
{

    public function collection()
    {
        //
      //  return ProjectfanSelection::all();

        return Project::find(23)->ProjectfanSelection;


    }

}
