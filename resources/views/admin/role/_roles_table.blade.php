<div>
  <h3 class="mt-4">Registered roles</h3>
  <div class="">
   <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
      new role
    </button>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
           
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <form action="/role" method="POST">
              @csrf 
              <div class="form-group mt-3">
                <h5 class="modal-title" id="staticBackdropLabel">New Admin Form</h5>
              </div>
              <div class="form-group mt-3">
                <label for="" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Admin Title or Name">
              </div>
              <div class="form-group mt-3">
                <label for="" class="form-label">Description</label>
                <textarea  id="" cols="30" name="description" rows="10" class="form-control"></textarea>
              </div>
              <div class="form-group mt-3">
                <button class="btn btn-primary">
                  Create Admin 
                </button>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Understood</button>
          </div>
        </div>
      </div>
    </div>
  </div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">description</th>
      <th scope="col">actions</th>
      <!-- <th scope="col">actions</th> -->
    </tr>
  </thead>
  <tbody>    
    @foreach($roles as $role)
      <tr>
       <td >{{$role->id}}</td>
        <td >{{$role->name}}</td>
        <td>{{$role->description}}</td>
        <td>
          <a href="" class="btn">delete</a> |
          <a href="" class="btn">edit</a>
        </td>
      </tr>
    @endforeach
    <div class="">
      
    </div>
  </tbody>
</table>
</div>

