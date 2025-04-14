<?php

namespace App\ClassHelpers;

class StudentHelpers
{
    public array $levelsFormation;
    public array $faculty;
    public array $schoolLevels;
    public array $choiceOptions;
    public array $formationPrices;
    public function __construct (){

        $this->levelsFormation = [
            1,2,3
        ];

        $this->faculty = [
            'FS','FASEG','FSJP','FALSH','IUT','EGCIM'
        ];

        $this->schoolLevels = [
            1,2,3,4,5
        ];

        $this->choiceOptions = [
            'Developpement', 'Reseau'
        ];

        $this->formationPrices = [
            "1" => 5000,"2" => 10000,"3" => 15000
        ];
    }
}
