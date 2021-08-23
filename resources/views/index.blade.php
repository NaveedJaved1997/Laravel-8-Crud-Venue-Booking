<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('links')
    <title>Home</title>

</head>
<body>
{{-- navbar --}}
@include('nav')
    
<div class="container-fluid">
    <div class="row">
        @foreach ($venues as $v)
        <div class="card col-md-3 mt-2 mb-2 bg-light">
            <img class="card-img-top" src="Images/{{$v->image_address}}" alt="image of {{$v->name}}" height="150px;">
            <div class="card-body">
              <h4 class="card-title">{{$v->name}}</h4>
              <p class="card-text">Address: {{$v->address}}</p>
              <p class="card-text"><b>Contact: {{$v->contact}}</b></p>
            </div>
          </div>
      @endforeach
    </div>
<div class="mt-2 mb-5">
  {{$venues->links()}}
</div>
</div>
</body>
</html>