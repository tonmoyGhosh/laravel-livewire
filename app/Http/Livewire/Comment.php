<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use App\Models\Comment as CommentModel;


class Comment extends Component
{    
    public $newComment = '';
    public $comments = [];

    protected $rules = [
        'newComment' => 'required'
    ];

    protected $messages = [
        'newComment.required' => 'The Comment Cannot Be Empty.'
    ];

    public function mount()
    {   
        $allComments = CommentModel::latest()->get();
        $this->comments = $allComments;
    }
   
    public function render()
    {   
        return view('livewire.comment');
    }

    public function addComments()
    {   
        $this->validate();

        $addComment = new CommentModel();
        $addComment->body = $this->newComment;
        $addComment->save();

        $this->comments->prepend($addComment);

        $this->newComment = '';
    }
}
