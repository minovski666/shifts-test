<h1>Employee information</h1>


<h4>Employee name: {{$newData['name']}}</h4>
<h4>Average pay per hour: {{$newData['average_pay_per_hour']}}</h4>
<h4>Average total pay: {{$newData['average_total_pay']}}</h4>

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
    </tr>
    @foreach($newData['last_5'] as $record)
        <tr>
            <td>{{$record['date']}}</td>
            <td>{{$record['worker']}}</td>
            <td>{{$record['company']}}</td>
            <td>{{$record['hours']}}</td>
            <td>{{$record['rate_per_hour']}}</td>
            <td>{{$record['taxable']}}</td>
            <td>{{$record['status']}}</td>
            <td>{{$record['shift_type']}}</td>
            <td>{{$record['paid_at']}}</td>
        </tr>
    @endforeach

</table>
