<?php

namespace App\Http\Livewire;

use App\Models\SensorData;
use Livewire\Component;

class LineChartVoltage extends Component
{
    public $sensor_data;

    public function updateGraph(){
        $this->sensor_data = null;
        $this->sensor_data = SensorData::latest()->take(10)->pluck('voltage')->toArray();
        $this->dispatchBrowserEvent('update-voltage');
    }

    public function render()
    {
        $this->updateGraph();
        return view('livewire.line-chart-voltage');
    }
}
