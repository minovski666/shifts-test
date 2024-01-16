<h1>Show Shift</h1>

<form action="{{ route('edit-shift', $shift->id) }}" method="POST" enctype="multipart/form-data"
      class="row g-3">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date</strong>
                <input type="date" name="date" class="form-control" value="{{$shift->date}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Worker</strong>
                <input type="text" name="worker" class="form-control" value="{{$shift->worker}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Company</strong>
                <input type="text" name="company" class="form-control" value="{{$shift->company}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Hours</strong>
                <input type="text" name="hours" class="form-control" value="{{$shift->hours}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Rate per hour</strong>
                <input type="text" name="rate_per_hour" class="form-control" value="{{$shift->rate_per_hour}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Taxable</strong>
                <input type="text" name="taxable" class="form-control" value="{{$shift->taxable}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status</strong>
                <select class="form-control" name="status" id="status">
                    <option value="">Select Status</option>
                    <option @selected($shift->status == 'Complete') value="Complete">Complete</option>
                    <option @selected($shift->status == 'Pending') value="Pending">Pending</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Shift Type</strong>
                <select class="form-control" name="shift_type" id="shift_type">
                    <option value="">Select Shift type</option>
                    <option @selected($shift->shift_type == 'Day') value="Day">Day</option>
                    <option @selected($shift->shift_type == 'Night') value="Night">Night</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Paid At</strong>
                <input type="datetime-local" name="paid_at" class="form-control" value="{{$shift->paid_at}}">
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
</form>
