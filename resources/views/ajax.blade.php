@foreach($list as $data)
<tr>
    <td>{{ $data->id }}</td>
    <td>{{ $data->name }}</td>
    <td>{{ $data->lname }}</td>
    <td>{{ $data->email }}</td>
    <td>{{ $data->password }}</td>
    <td>{{ $data->city }}</td>
    <td><button class="btnde" data-id="{{ $data->id }}">Delete</button></td>
    <td><button class="btnup" data-id="{{ $data->id }}">Update</button></td>

</tr>
@endforeach
