<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header Example</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
         .header {
            position: fixed; /* Add this line to make the header fixed */
            top: 0; /* Ensures the header stays at the top */
            width: 100%; /* Full width of the viewport */
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            border-bottom: 1px solid #dee2e6;
            background-color: #007bff; /* Add a background color for the header */
            z-index: 1000; /* Ensures the header is above other content */
        }
        .header .center {
            flex-grow: 1;
            text-align: center;
        }
        .header .right {
            position: relative;
            display: flex;
            align-items: center;
        }
        .header .right a {
            margin-left: 15px;
        }
        .cardprofile {
            display: none;
            position: absolute;
            top: 100%;
            right: 0;
            width: 200px;
            border-radius: 2rem;
            background-color: #007bff;
            border: 1px solid #dee2e6;
            padding: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            z-index: 10;
        }
        .cardprofile img {
            width: 100%;
        }
        .header .right:hover .cardprofile {
            display: block;
        }
        .cardprofile span {
            font-weight: 600;
            color: white;
            text-align: center;
            display: block;
            padding-top: 10px;
            font-size: 1.3em;
        }
        .cardprofile .job {
            font-weight: 400;
            color: white;
            display: block;
            text-align: center;
            font-size: 1em;
        }
        .cardprofile .img {
            width: 70px;
            height: 70px;
            border-radius: 100%;
            margin: auto;
            margin-top: 4px;
        }
    </style>
</head>
<body>
    <div class="header bg-primary text-white">
        <div class="left bg-danger">
            <span id="current-time"></span>
        </div>
        <div class="center">
            <h4>HIIT Wits Welcome to: {{ $authUser->name }}</h4>  
        </div>
        
        <button type="button" class="btn btn-outline-danger text-white bg-success" data-toggle="modal" data-target="#exampleModalCenter">
            <i class="fas fa-user"></i> Profile
          </button>
            <a href="/logout" class="btn btn-outline-danger bg-white">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        <div class="center">
            {{-- <h5>Welcome to: {{ $authUser->name }}</h5> --}}
            
            {{-- <a href="/logout" class="btn btn-outline-danger bg-white">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a> --}}
        </div>
    </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @if ($student)
        <div class="cardprofile">
            <div class="card-border-top"></div>
            <div class="img">
                <img src="{{ asset('storage/' . $student->photo) }}" style="width: 30%;" />
            </div>
            <span>Name: {{ $student->name }}</span>  
            <p class="job">Post: SDE</p>
            
            <p class="job">Address: {{ $student->address }}</p>
            <p class="job">Mob: {{ $student->phone }}</p>
        </div>
    @endif
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

    <script>
        function updateTime() {
            const currentTime = new Date().toLocaleTimeString();
            document.getElementById('current-time').textContent = currentTime;
        }
        setInterval(updateTime, 1000);
        updateTime(); // initial call to set the time immediately
    </script>
</body>
</html>
