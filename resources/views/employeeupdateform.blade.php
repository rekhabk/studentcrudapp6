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
            <h2>  Edit student Image</h2>

       <form action="/updateimage/{{$employees->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
 
       <input type="hidden" name="id" id="id" value="{{$employees->id}}">
    
                <div class="form-group">
                    <label> Name</label>
                <input type="text" name="name" class="form-control" value="{{$employees->name}}" placeholder="Enter Name">
                </div>
    

                <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" value="{{$employees->email}}"  placeholder="Enter Name">
                    </div>

                <div class="form-group">
                            <label>Post</label>
                            <input type="text" name="post" class="form-control" value="{{$employees->post}}"  placeholder="Enter Name">
                    </div>


                <div class="input-group">
                    <div class="custom-file">
                    <input type="file" name="image" class="custom-file-input" value="{{$employees->image}}" >
                        <label class="custom-file-label">Choose image</label>
                    
                    </div>
                    </div>
            <button type="submit" name="submit" class="btn-btn-primary">Update Data</button>
            </form>

       </div>

    </div>
</body>
</html>