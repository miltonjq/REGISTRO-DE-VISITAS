<?php

namespace App\Http\Livewire;

use Livewire\Component;
use voku\helper\StopWords;

class AddOffice extends Component
{
    public $office = '';
    public $abrevOffice = '';

    public function updatedOffice($name)
    {
        if (strlen($name) > 4) {
            $stopWords = new StopWords();

            $office = strtolower($name);
            $abreviatura = '';
            $explode = explode(' ', $office);

            $filteredWords = array_diff($explode, $stopWords->getStopWordsFromLanguage('es'));
            $filteredWordsEmpty = array_filter($filteredWords, fn($value) => !is_null($value) && $value !== '');

            foreach ($filteredWordsEmpty as $x) {
                    $abreviatura .=  $x[0];
            }

            $this->abrevOffice  =  $abreviatura;
        } else {
            $this->abrevOffice  =  $name;
        }
    }

    public function render()
    {

        return view('livewire.add-office');
    }
}
