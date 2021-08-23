<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('links')
    <title>Manage Venues</title>
</head>
<body>
    @include('nav')

    <div class="container-fluid p-0 mt-3 ">
        <div class="card">
            <div class="card-header">
                Manage Venues
            </div>
            <div class="card-body">
                <button class="btn btn-outline-primary m-1 float-right"
                data-toggle="modal" data-target="#AddVenueModal">Add New</button>
                <table class="table border">
                    <thead class="bg-secondary text-white">
                        <th>
                            SR#
                        </th>
                        <th>
                            Venue Name
                        </th>
                        <th>
                            Address
                        </th>
                        <th>
                            Contact
                        </th>
                        <th>
                          Image
                        </th>
                        <th>
                            Actions
                        </th>
                    </thead>
                    <tbody>
                        @foreach ($venues as $v)
                        <td>{{$v->id}}</td>
                        <td>{{$v->name}}</td>
                        <td>{{$v->address}}</td>
                        <td>{{$v->contact}}</td>
                        <td><img src="/Images/{{$v->image_address}}" width="100px"></td>
                        <td>
                            <a id="btn_edit" class="text-warning" href="/editvenue/{{$v->id}}"
                            {{-- data-toggle="modal" data-target="#EditVenueModal" --}}
                             name='btn_edit'>
                                <i class="fas fa-edit fa-2x"></i>
                            </a>
                            &nbsp;
                            <a class="text-danger" href="/deletevenue/{{$v->id}}">
                                <i class="fa fa-trash fa-2x" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tbody>
                    @endforeach
                </table>
                
            </div>
    
        </div>
    </div>
    <div class="mt-2 mb-5">
      {{$venues->links()}}
    </div>
  
  <!-- Add Modal -->
  <div class="modal fade" id="AddVenueModal" tabindex="-1" role="dialog" aria-labelledby="AddVenueModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-light">
          <h5 class="modal-title" id="AddVenueModalLabel">Add New Venue</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="addvenue" method="POST" enctype="multipart/form-data">
            @csrf
            <input class="form-control mt-1" type="text" name="name" id="name" placeholder="Venue Name" required>
            <input class="form-control mt-1" type="text" name="address" id="address" placeholder="Venue Address" required>
            <input class="form-control mt-1" type="number" name="contact" id="contact" placeholder="Owner's Contact" required>
            <input class="form-control-file mt-2" type="file" name="image" id="image" required>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-outline-primary">Add</button>
        </form>
        </div>
      </div>
    </div>
  </div>

</body>
</html>