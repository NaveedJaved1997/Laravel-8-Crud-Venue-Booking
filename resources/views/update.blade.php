<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('links')
    <title>Update Venue</title>
</head>
<body>
    @include('nav')
        <!-- Edit  -->
        <div class="container m-3">
<div class="card p-0 col-md-6 offset-md-3">
    <div class="card-header">
        Update Venue
    </div>
    <div class="card-body">
        <form action="/updatevenue" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$venue->id}}">
            <input class="form-control mt-1" type="text" name="name" id="name" placeholder="Venue Name" value="{{$venue->name}}">
            <input class="form-control mt-1" type="text" name="address" id="address" placeholder="Venue Address" value="{{$venue->address}}">
            <input class="form-control mt-1" type="number" name="contact" id="contact" placeholder="Owner's Contact" value="{{$venue->contact}}">
            <input class="form-control-file mt-2" type="file" name="image" id="image" value="{{$venue->image_address}}">
            <button type="submit" class="btn btn-outline-primary mt-2">Save Changes</button>
        </form>
    </div>
</div>

</div>

    
</body>
</html>