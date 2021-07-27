<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use App\Models\Comment as CommentModel;

class Comment extends Component
{    
    public $newComment = '';
    
    protected $rules = [
        'newComment' => 'required'
    ];

    protected $messages = [
        'newComment.required' => 'The Comment Cannot Be Empty.'
    ];

    public function render()
    {   
        $comments = CommentModel::latest()->paginate(2);
        return view('livewire.comment', compact('comments'));
    }

    public function addComments()
    {   
        $this->validate();

        $addComment = new CommentModel();
        $addComment->body = $this->newComment;
        $addComment->save();

        // $this->comments->prepend($addComment);

        $this->newComment = '';

        session()->flash('message', 'Comment successfully added');
    }

    public function removeComment($commentId)
    {   
        $commentDelete = CommentModel::find($commentId);
        $commentDelete->delete();

        // $this->comments = $this->comments->except($commentId);

        session()->flash('message', 'Comment successfully deleted');
    }
}
