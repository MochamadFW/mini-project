<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Popup Form</title>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    .popup-container {
      display: none;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      padding: 20px;
      background-color: #fff;
      border: 1px solid #ccc;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
      z-index: 999;
    }

    .overlay {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      z-index: 998;
    }
  </style>
</head>
<body>

<div class="text-center">
    <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#AddModal">Add</button>
    @include('student.partials.addStudentPartials')
</div>

<table id="datatable" class="display">
    <thead>
      <tr>
        <th>Name</th>
        <th>Class</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>      
        @foreach ($data as $item)
            <tr>
                <td> {{ $item['name'] }} </td>
                <td> {{ $item['class'] }} </td>
                @if($item['status'] == 0)
                <td style="background-color:red">Inactive</td>
                @else
                <td>Active</td>
                @endif
                <td>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#MyModal{{$item['id']}}">Update</button>
                    @include('student.partials.updateStudentPartials')

                    <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#DeleteModal{{$item['id']}}">Delete</button>
                    @include('student.partials.deleteStudentPartials')
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>
  
<div id="overlay" class="overlay"></div>

<script>
  function togglePopup() {
    var popup = document.getElementById('popup');
    var overlay = document.getElementById('overlay');

    if (popup.style.display === 'none') {
      popup.style.display = 'block';
      overlay.style.display = 'block';
    } else {
      popup.style.display = 'none';
      overlay.style.display = 'none';
    }
  }
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
<script>
  $(document).ready(function() {
    $('#datatable').DataTable();
  });
</script>

</body>
</html>