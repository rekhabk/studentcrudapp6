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
       <form action=" {{route('addimage')}}" method="POST" enctype="multipart/form-data">
        @csrf

               <h3> Please Add student Image</h3><br>
    
                <div class="form-group">
                    <label>Employee Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Name">
                </div>
    

                <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Enter Name">
                    </div>

                <div class="form-group">
                            <label>Post</label>
                            <input type="text" name="post" class="form-control" placeholder="Enter Name">
                    </div>


                <div class="input-group">
                    <div class="custom-file">
                    <input type="file" name="image" class="custom-file-input">
                        <label class="custom-file-label">Choose image</label>
                    
                    </div>
                    </div>
            <button type="submit" name="submit" class="btn-btn-primary"> Save Image</button>
            </form>

       </div>

    </div>
</body>
</html>