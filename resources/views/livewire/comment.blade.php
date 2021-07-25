<div class="col-sm-4 col-sm-offset-4">
    
    
    <form wire:submit.prevent="addComments">

      <div class="form-group">

        <br>
        <label>Comment</label>
        <input type="text" class="form-control" placeholder="Hit Your Comment" wire:model.lazy="newComment">
        @error('newComment') <span class="error" style="color: red">{{ $message }}</span><br> @enderror

        <br>
        <button class="btn btn-primary" type="submit">Submit</button>

      </div>

    </form>
    
    @foreach($comments as $comment)
      <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
              <p>{{ $comment['body'] }}</p>
              <span class="pull-right">{{ $comment['created_at'] }}</span>
            </div>
        </div>
      </nav>
    @endforeach
      
</div>