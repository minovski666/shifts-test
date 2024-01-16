<h1>Create Shift</h1>


<form action="{{ route('store-shift') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date</strong>
                <input type="date" name="date" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Worker</strong>
                <input type="text" name="worker" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Company</strong>
                <input type="text" name="company" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Hours</strong>
                <input type="number" name="hours" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Rate per hour</strong>
                <input type="text" name="rate_per_hour" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Taxable</strong>
                <input type="text" name="taxable" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status</strong>
                <select class="form-control" name="status" id="status">
                    <option value="">Select Status</option>
                    <option value="Complete">Complete</option>
                    <option value="Pending">Pending</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Shift Type</strong>
                <select class="form-control" name="shift_type" id="shift_type">
                    <option value="">Select Shift type</option>
                    <option value="Day">Day</option>
                    <option value="Night">Night</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Paid At</strong>
                <input type="datetime-local" name="paid_at" class="form-control">
            </div>
        </div>
        <button type="submit" class="btn btn-primary ml-3">Submit</button>
    </div>
</form>
