<!DOCTYPE html>
<html>
<head>

    <style>
        body{
            text-align:center;
        }
        form{
            display: inline-block;
            margin-left: auto;
            margin-right: auto;
            text-align: left;
            margin-top: 150px;
        }
    </style>
	<title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	
</head>
<body>


	<form action="{{route('uploadDocument')}}" method="post" enctype="multipart/form-data">

		@csrf

	    <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Name</label>
                    <input type="name" class="form-control" id="name" name = "name" placeholder="Name">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Description</label>
                <input type="description" class="form-control" id="description" name = "description" placeholder="Description">
            </div>
        </div>

	    <div class = "form-group col-md-4"><input type="file" name="file"></div>
        <button type="submit" class="btn btn-primary">Submit</button>
	    


	</form>

</body>
</html>
