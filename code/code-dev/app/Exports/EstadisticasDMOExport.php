<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithDrawings;
use Maatwebsite\Excel\Concerns\WithTitle;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use Maatwebsite\Excel\Facades\Excel;
use PhpOffice\PhpSpreadsheet\Style\Protection;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

use App\Appointment;

class EstadisticasDMOExport implements WithMultipleSheets
{
    

    /**
    * @return \Illuminate\Support\Collection
    */
    public $mes;
    public $year;

    function __construct($data){ 
        $this->mes = $data['mes'];    
        $this->year = $data['year']; 
    }

    public function sheets(): array
    {
        return [
            new PapelXServicioDMOExport($this->mes, $this->year),
            new EstudiosXServicioDMOExport($this->mes, $this->year),
            new PacientesXServicioDMOExport($this->mes, $this->year),
        ];
    }

}
