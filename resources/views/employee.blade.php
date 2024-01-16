<h1>Employees</h1>


<table>
    <tr>
        <th>Worker name</th>
    </tr>
    @foreach($employees as $worker)
        <tr>
            <td>{{$worker['worker']}}</td>
            <td><a href="{{route('view-employee', ['employee' => $worker['worker']])}}">View</a></td>
        </tr>
    @endforeach

</table>
