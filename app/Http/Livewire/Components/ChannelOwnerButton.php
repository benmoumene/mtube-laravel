<?php

namespace App\Http\Livewire\Components;

use App\Models\Channel\Channel;
use Livewire\Component;

class ChannelOwnerButton extends Component
{
    public $channel_id;
    public $channel;

    public function mount()
    {
        $this->getData();
    }

    public function getData()
    {
        $this->channel = Channel::find($this->channel_id);
    }

    public function render()
    {
        return view('livewire.components.channel-owner-button');
    }
}