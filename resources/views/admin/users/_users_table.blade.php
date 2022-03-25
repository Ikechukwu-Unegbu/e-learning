<div>
  <h3 class="mt-4">Registered Users</h3>
  <div class="">
    <a href="/panel/users/comments" style="float: right;" class="btn btn-primary">Comments</a>
  </div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">telegram</th>
      <th scope="col">actions</th>
      <!-- <th scope="col">actions</th> -->
    </tr>
  </thead>
  <tbody>    
    @foreach($users as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td >{{$user->name}}</td>
      <td>{{$user->telegram}}</td>
      <td>
        <a href="" class="btn btn-danger btn-sm">delete</a> |
        <a href="" class="btn btn-info btn-sm">edit</a>
        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">>make admin</button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
      </td>
    </tr>
    @endforeach
    <div class="">
      {{$users->links()}}
    </div>
  </tbody>
</table>
</div>