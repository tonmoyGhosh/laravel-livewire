<div class="col-sm-4 col-sm-offset-4">
    
    <form wire:submit.prevent="addComments">

      <div class="form-group">

        <br>

        @if (session()->has('message'))
          <div class="alert alert-success">
            {{ session('message') }}
          </div>
        @endif

        <label>Comment</label>
        <textarea type="text" class="form-control" placeholder="Hit Your Comment" wire:model.lazy="newComment"></textarea>
        @error('newComment') <span class="error" style="color: red">{{ $message }}</span><br> @enderror

        <br>
        <button class="btn btn-primary" type="submit">Submit</button>

      </div>

    </form>
    
    @foreach($comments as $comment)
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <a href="javascript:void(0)" class="pull-right" wire:click="removeComment({{ $comment['id'] }})">&times;</a>
            <div class="navbar-header">

              <p>{{ $comment['body'] }}</p>
              <span class="pull-right">{{ $comment['created_at']->diffForHumans() }}</span>
            </div>
        </div>
      </nav>
    @endforeach

    {{ $comments->links() }}
      
</div>