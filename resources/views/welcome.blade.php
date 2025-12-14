<form id="formdata">
    @csrf
    <table border="1">
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" value="{{ isset($upda) ? $upda->name : '' }}"></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type="text" name="lname" value="{{ isset($upda) ? $upda->lname : '' }}"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" value="{{ isset($upda) ? $upda->email : '' }}"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td>City</td>
            <td>
                <select name="city">
                    <option value="surat" {{ isset($upda) && $upda->city == 'surat' ? 'selected' : '' }}>Surat</option>
                    <option value="ahemdabad" {{ isset($upda) && $upda->city == 'ahemdabad' ? 'selected' : '' }}>Ahemdabad</option>
                    <option value="pune" {{ isset($upda) && $upda->city == 'pune' ? 'selected' : '' }}>Pune</option>
                </select>
            </td>
        </tr>
        <tr style="display:none;">
            <td colspan="2">
                <input type="hidden" name="id" value="{{ isset($upda) ? $upda->id : '' }}">
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Save"></td>
        </tr>
    </table>
</form>

<br><br>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>City</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
    </thead>
    <tbody id="disp">
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

    </tbody>
</table>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(document).on('submit', '#formdata', function(e) {
        e.preventDefault();
        var data = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "{{ url('/ajax') }}",
            data: data,
            success: function(res) {
                $('#disp').html(res);
                $('#formdata')[0].reset();
            }
        });
    });

    $(document).on('click', '.btnde', function(e) {
        var uid = $(this).data('id');
        $.ajax({
            url: "{{ url('/delet') }}",
            type: "POST",
            data: {
                id: uid,
                _token: '{{ csrf_token() }}'
            },
            success: function(res) {
                $('#disp').html(res);
            }
        });
    });

    $(document).on('click', '.btnup', function () {
    var uid = $(this).data('id');

    $.ajax({
        url: "{{ url('/update') }}/" + uid,
        type: "GET",
        success: function (res) {
            $('input[name="name"]').val(res.name);
            $('input[name="lname"]').val(res.lname);
            $('input[name="email"]').val(res.email);
            $('select[name="city"]').val(res.city);
            $('input[name="id"]').val(res.id);
            $('input[name="password"]').val(res.password);
        }
    });
});

</script>
