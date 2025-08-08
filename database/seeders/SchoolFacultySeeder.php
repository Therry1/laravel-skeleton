<?php

namespace Database\Seeders;

use App\Models\SchoolFaculty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchoolFacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faculties = [
            ['faculty_name'=>'Faculté des sciences', 'code'=>'FS', 'state'=>1],
            ['faculty_name'=>'Faculté des sciences de l\'éducation', 'code'=>'FSE', 'state'=>1],
            ['faculty_name'=>'Faculté des science politiques et juridique', 'code'=>'FSJP', 'state'=>1],

            ['faculty_name'=>'Faculté des arts lingustiques et sciences humaines', 'code'=>'FASH', 'state'=>1],
            ['faculty_name'=>'Faculté de sciences economique et de gestion', 'code'=>'FASEG', 'state'=>1],
            ['faculty_name'=>'Institut universitaire de technologie', 'code'=>'IUT', 'state'=>1],

            ['faculty_name'=>'Ecole de genie chimique et industrie minérale', 'code'=>'EGCIM', 'state'=>1],
            ['faculty_name'=>'Ecole national des sciences agro-alimentaire', 'code'=>'ENSAI', 'state'=>1],
            ['faculty_name'=>'Institut universitaire de technologie', 'code'=>'IUT', 'state'=>1],
            ['faculty_name'=>'Ecole des science et médécine veterinaire', 'code'=>'ESMV', 'state'=>1],
            ['faculty_name'=>'Faculté de sciences biomédical', 'code'=>'FSBM', 'state'=>1],
            ['faculty_name'=>'Autre', 'code'=>'OTHER', 'state'=>1],
        ];

        SchoolFaculty::insert($faculties);
    }
}
