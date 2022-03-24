<div class="leave_comment mb-5 mt-4">
    <form class="form" action="/comment" method="POST">
      @csrf
      <h4>Leave a Comment</h4>
      <textarea class="input textarea form-control comment" name="comment" id="" cols="30" rows="10"></textarea>
      <button type="submit" class="btn btn-primary">Send</button>
    </form>
    <div class="mt-4">
      <h5>Comments</h5>
      <div class="">
        @foreach($userComments as $userComment)
          <div class="mt-5">
            <p>{!!$userComment->comment!!}</p>
            <small class="">
              <span>By: </span> <span><b>{!!$userComment->user->name!!}</b></span> |
              <span>at: </span> <span><b>{!!$userComment->created_at!!}</b></span> |
              <span><a href="" class=""><b>Delete</b></a></span>
            </small> 
          </div>
        @endforeach 
      </div>
      <br>
      <br>
      <div class="">
        @foreach($publicComms as $publicComm)
          <div class="mt-5 mb-5">
            <p>{!!$publicComm->comment!!}</p>
            <small>
              <span>By: </span> <span><b>{!!$publicComm->user->name!!}</b></span> |
              <span>at: </span> <span><b>{!!$publicComm->created_at!!}</b></span> |
              @if($publicComm->user->id == @Auth::user()->id)
              <span><a href="" class="">Delete</a></span>
              @endif
            </small> 
          </div>
        @endforeach 
      </div>
      <div>

      </div>
    </div>
  </div>