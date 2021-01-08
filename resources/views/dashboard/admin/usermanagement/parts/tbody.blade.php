@foreach($users as $user)
    <tr>
        <td>{{$user->id}}</td>
        <td class="with-img">
            <img src=" " class="img-rounded height-30" alt="img">
        </td>
        <td>{{$user->email}}</td>
        <td>{{$user->name}}</td>
        <td>SUPERADMIN{{$user->role}}</td>
        <td><a class="btn-yellow p-5" style="cursor: pointer;" onclick="customajax('edit','{{$user->id}}')">Edit </a></td>
        <td><a class="btn-red p-5" style="cursor: pointer;" onclick="customajax('delete','{{$user->id}}')"> Delete </a></td>
    </tr>
@endforeach