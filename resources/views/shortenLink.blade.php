<!DOCTYPE html>
<html>
<head>
    <title>My Link | Short Link</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" />
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
*{
    font-family: 'Poppins',sans-serif; 
}
</style>
<body>

<div class="jumbotron jumbotron-fluid" style="height:20rem; background-color:#845ec2;">
  <div class="container text-center">
    <h1 class="display-5 text-white">Build Url Shortlink</h1>
    <p class="lead text-white">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
    <form method="POST" action="{{ route('generate.shorten.link.post') }}">
            @csrf
    <input type="text" class="form-control" name="link" placeholder="Enter URL" aria-label="Recipient's username" aria-describedby="basic-addon2">  
                <button class="btn btn-success mt-3" type="submit">Generate</button>

                </form>

                
</div>

</div>
<div class="container">
<div class="card shadow" style="border-radius:10px;">
<div class="card-body">

              @if (Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ Session::get('success') }}</p>
                </div>
            @endif
          
             <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th class="text-center">Short Link</th>
                        <th class="text-center">Link</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($shortLinks as $row)
                        <tr>
                            <td>{{ $row->id }}</td>
                            <td class="text-center"><a href="{{ route('shorten.link', $row->code) }}" target="_blank">{{ route('shorten.link', $row->code) }}</a></td>
                            <td class="text-center">{{ $row->link }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
      </div>
      </div>
      </div>

<!-- <div class="container">
   
    <div class="card">
      <div class="card-header">
        <form method="POST" action="{{ route('generate.shorten.link.post') }}">
            @csrf
            <div class="input-group mb-3">
              <input type="text" name="link" class="form-control" placeholder="Enter URL" aria-label="Recipient's username" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-success" type="submit">Generate Shorten Link</button>
              </div>
            </div>
        </form>
      </div>
      <div class="card-body">

              @if (Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ Session::get('success') }}</p>
                </div>
            @endif
             #ec2 
             <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Short Link</th>
                        <th>Link</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($shortLinks as $row)
                        <tr>
                            <td>{{ $row->id }}</td>
                            <td><a href="{{ route('shorten.link', $row->code) }}" target="_blank">{{ route('shorten.link', $row->code) }}</a></td>
                            <td>{{ $row->link }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
      </div>
    </div>
    
</div>  -->
 
</body>
</html>