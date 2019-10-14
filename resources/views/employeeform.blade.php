<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="jumbotron">

      <h2>Image Crud-in Laravel</h2><br>
<a href="/employee" class="btn btn-primary"> Add Image</a>
      <br>
      <br>
            
              
              <table class="table table-stripped table-bordered">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Post</th>
                    <th scope="col">Image</th>
                    <th >Edit</th>
                    <th >DELETE</th>



                  </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $employee )
                        
                    
                  <tr>
                  <th >{{$employee->id}}</th>
                  <th >{{$employee->name}}</th>
                  <th >{{$employee->email}}</th>
                  <th >{{$employee->post}}</th>
                  <th ><img src="{{asset('uploads/employee/'.$employee->image)}}" width="100px;" height="100px;" alt="Image"></th>
                  <th><a href="/editimage/{{$employee->id}}" class="btn btn-success"> EDIT</th> 
                  <th><a href="/deleteimage/{{$employee->id}}" class="btn btn-danger">DELETE</th>
                </tr>
                @endforeach
                </tbody>
              </table>
        </div>
    </div>
</body>
</html>