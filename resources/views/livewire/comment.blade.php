<div class="col-sm-4 col-sm-offset-4">
   
      
      <div class="form-group">

        <br>
        <label>Comment</label>
        <input type="text" class="form-control" placeholder="Hit Your Comment" wire:model="newComment">

        <br>
        <button class="btn btn-primary" wire:click="addComments">Submit</button>

      </div>

    
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