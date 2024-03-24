<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Export Data User</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap/dist/css/bootstrap.min.css') }}">
</head>

<body>
    <section>

        <h4 class="text-center m-3">Export Data All User</h4>
        <div class="table-responsive">
            <table class="table table-bordered ">
                <tr>
                    <th class="col">Name</th>
                    <th class="col">Email</th>
                    <th class="col">Email Verified</th>
                    <th class="col">Created At</th>
                    <th class="col">Created At</th>
                </tr>
                <tbody>

                    @isset($data)
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->email_verified_at }}</td>
                                <td>{{ $item->Date($item->created_at) }}</td>
                                <td>{{ $item->Date($item->update_at) }}</td>
                            </tr>
                        @endforeach
                    @endisset
                </tbody>
            </table>

        </div>
    </section>
    <script src="{{ asset('asset/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
