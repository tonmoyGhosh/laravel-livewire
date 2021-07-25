<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Carbon\Carbon;

class Comment extends Component
{    
    public $newComment = '';

    public $comments = [
        
        [
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan et sapien in dapibus. Etiam hendrerit sodales enim in facilisis. Proin aliquet luctus tortor, et blandit elit porta sed. Donec porttitor id est eu viverra. Donec eu laoreet nunc, ut vestibulum nunc. Sed faucibus sem ut eleifend ultrices. Nulla pellentesque, ligula sit amet hendrerit accumsan, nisl felis maximus risus, ac finibus libero urna eget elit. Proin a felis porta, varius ligula vel, consequat libero. Maecenas maximus turpis sed diam lacinia rhoncus.',
            'created_at' => '3 mins ago'
        ]

    ];

    public function render()
    {   
        return view('livewire.comment');
    }

    public function addComments()
    {
        array_unshift($this->comments,
           [
            'body' => $this->newComment,
            'created_at' => Carbon::now()->diffForHumans()
           ]
        );
    }
}
