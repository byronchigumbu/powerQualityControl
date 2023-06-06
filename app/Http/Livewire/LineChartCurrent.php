<?php

namespace App\Http\Livewire;

use App\Models\SensorData;
use Livewire\Component;

class LineChartCurrent extends Component
{
    public $sensor_data;

    public function updateGraph(){
        $this->sensor_data = null;
        $this->sensor_data = SensorData::latest()->take(10)->pluck('current')->toArray();
        $this->dispatchBrowserEvent('update-current');
    }

    public function render()
    {
        $this->updateGraph();
        return view('livewire.line-chart-current');
    }
}
