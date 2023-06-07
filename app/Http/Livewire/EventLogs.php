<?php

namespace App\Http\Livewire;

use App\Models\EventLog;
use Livewire\Component;

class EventLogs extends Component
{
    public $sys_events;

    public function updateTable(){
        $this->sys_events = null;
        $this->sys_events = EventLog::latest()->take(10)->get();
//        $this->dispatchBrowserEvent('update-line');
    }

    public function render()
    {
        $this->updateTable();
        return view('livewire.event-logs');
    }
}
