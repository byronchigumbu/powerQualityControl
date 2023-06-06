<?php

namespace App\Http\Livewire;

use App\Models\SensorData;
use Livewire\Component;

class LineChartFrequency extends Component
{
    public $sensor_data;

    public function updateGraph(){
        $this->sensor_data = null;
        $this->sensor_data = SensorData::latest()->take(10)->pluck('frequency')->toArray();
        $this->dispatchBrowserEvent('update-frequency');
    }

    public function render()
    {
        $this->updateGraph();
        return view('livewire.line-chart-frequency');
    }
}
