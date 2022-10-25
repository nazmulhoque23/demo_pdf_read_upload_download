<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<title></title>
</head>
<body>
    <a class ="btn btn-success" href = "{{route('createDoc')}}"> Upload new Document</a>
	<br/>
    <table class= "table table-bordered" style = "width:80%">

	    <tr>
		    <th>Name</th>
		    <th>Description</th>
		    <th>View</th>
		    <th>Download</th>
	    </tr>

	    @foreach($documents as $document)

	    <tr>
		    <td>{{$document->name}}</td>
		    <td>{{$document->description}}</td>
		    <td><a href="{{url('/view',$document->id)}}">View</a></td>
		    <td><a href="{{url('/download',$document->file)}}">Download</a></td>


	    </tr>
	    @endforeach

	</table>

</body>
</html>
