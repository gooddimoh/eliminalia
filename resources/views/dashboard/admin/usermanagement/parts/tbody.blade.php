@section('tbody')
    <div class="table-responsive height-600">
        <table class="table table-striped m-b-0 overflow-hidden">
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td class="with-img">
                        <img src="../assets/img/user/user-1.jpg" class="img-rounded height-30">
                    </td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->role}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection