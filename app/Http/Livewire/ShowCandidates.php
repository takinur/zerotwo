<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Profile;
use App\Models\Skills;

class ShowCandidates extends Component
{
 
    public $keyword;


    public function render()
    {
        
        $reservedSymbols = ['-', '+', '<', '>', '@', '(', ')', '~'];
        $term = str_replace($reservedSymbols, '', $this->keyword);
        $words = explode(' ', $term);

        foreach($words as $idx => $word) {
            // fulltext indices.
            $words[$idx] =$word;
        }
        $keyword = implode(' ', $words);
  
        $keyword = '%' . $this->keyword . '%';

        $data = Profile::query()
            ->orWhereHas('skills',function($query) use ($keyword){
                return $query->where('name', 'LIKE',$keyword);                
            })        
            ->orWhere('username','LIKE',$keyword)
            ->orWhere('profession', 'LIKE', $keyword)
            ->orderByDesc('username')
            ->paginate(12);


        return view('livewire.show-candidates', compact('data'))
                ->extends('layouts.app')
                ->section('content');
 
    }

   
  


  
}
