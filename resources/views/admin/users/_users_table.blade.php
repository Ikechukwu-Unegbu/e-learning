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
        <a href="" class="btn">delete</a> |
        <a href="" class="btn">edit</a>
      </td>
    </tr>
    @endforeach
    <div class="">
      {{$users->links()}}
    </div>
  </tbody>
</table>
</div>