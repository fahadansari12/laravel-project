
<table class="table table-bordered" id="result">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Edit</th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $value)
      <tr>
        <td>{{ $value->id }}</td>
        <td>{{ $value->name }}</td>
        <td>{{ $value->email }}</td>
        <td><a href="#" class="btn btn-info">Edit</a> <a href="#" class="btn btn-danger">Delete</a></td>
      </tr>
      @endforeach
    </tbody>
</table>