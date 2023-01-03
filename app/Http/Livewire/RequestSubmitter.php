<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Request;


class RequestSubmitter extends Component
{
    public $email,$link,$description;
    public function render()
    {
        return view('livewire.request-submitter');
        
    }

    public function addRequestToTheTable(){
        $request = new Request;
        $request->email = $this->email;
        $request->song_link = $this->link;
        $request->descirption = $this->description;
        $request->payment_status = 'pending';
        $request->save();
        return redirect()->to('https://buy.stripe.com/eVabJ8eTzgQ25Da7st');
    }
}
