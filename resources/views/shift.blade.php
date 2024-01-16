<h1>Shifts</h1>


<button><a href="{{route('create-shift')}}">Add New Shift</a></button>
<button><a href="{{route('all-employees')}}">View Employees</a></button>
<button><a href="{{route('import-shift')}}">Import Shift</a></button>
<form action="{{ route('filter-shift') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <strong>Filter</strong>
    <input type="number" name="filter">

    <button type="submit" class="btn btn-primary ml-3">Submit</button>
</form>

<table>
    <tr>
        <th>Date</th>
        <th>Worker</th>
        <th>Company</th>
        <th>Hours</th>
        <th>Rate per hour</th>
        <th>Taxable</th>
        <th>Status</th>
        <th>Shift type</th>
        <th>Paid at</th>
        <th>Total Pay</th>
    </tr>
    @foreach($newData as $shift)
        <tr>
            <td>{{$shift['date']}}</td>
            <td>{{$shift['worker']}}</td>
            <td>{{$shift['company']}}</td>
            <td>{{$shift['hours']}}</td>
            <td>{{$shift['rate_per_hour']}}</td>
            <td>{{$shift['taxable']}}</td>
            <td>{{$shift['status']}}</td>
            <td>{{$shift['shift_type']}}</td>
            <td>{{$shift['paid_at']}}</td>
            <td>{{$shift['total_pay']}}</td>
            <td><a class="dropdown-item" href="{{ route('update-shift', $shift->id) }}">Edit</a></td>
            <td> <form action="{{ route('delete-shift', $shift->id) }}" method="Post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="dropdown-item btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach

</table>
