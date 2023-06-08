<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\NecessaryDoc as ND;

class Necessary extends Component
{

    public $inputs = [];
    // public $doc_id='';

    public $editInputs = [];

    public $editing = false;

    public $editIndex = null;



    public function mount($doc_id)
    {

        if(isset($doc_id)){

            $this->inputs = ND::where('document_id',$doc_id)->pluck('name')->toArray();
        }
        else{
            $this->inputs = [''];
        }


    }

    public function addInput()
    {
        $this->inputs[] = '';
    }

    public function removeInput($index)
    {
        unset($this->inputs[$index]);
        $this->inputs = array_values($this->inputs);
    }

    public function editInput($index)
    {
        // $this->editing = true;
        // $this->editIndex = $index;
        // $this->editInputs = $this->inputs;
        // $this->editInputs[$index] = ND::where('name', $this->inputs[$index])->firstOrFail()->name;
    }

    public function cancelEdit()
    {
        // $this->editing = false;
        // $this->editIndex = null;
        // $this->editInputs = [];
    }

    public function save()
    {
        $this->validate();

        foreach ($this->inputs as $input) {
            ND::updateOrCreate(['name' => $input]);
        }
        session()->flash('success', 'Necessary documents have been saved.');
        $this->inputs = ND::pluck('name')->toArray();
    }

    public function update()
    {
        // $this->validate();

        // $doc = ND::where('name', $this->inputs[$this->editIndex])->firstOrFail();
        // $doc->name = $this->editInputs[$this->editIndex];
        // $doc->save();

        // $this->editing = false;
        // $this->editIndex = null;
        // $this->editInputs = [];
        // $this->inputs = ND::pluck('name')->toArray();

        session()->flash('success', 'Necessary document has been updated.');
    }


    public function render()
    {

        return view('livewire.necessary');
    }
}
