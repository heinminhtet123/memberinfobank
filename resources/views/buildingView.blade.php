@extends('layoutView')
@section('content')
                <h1 class="text-center display-4 font-weight-normal m-5">Building Form</h1>
                <div class="d-flex justify-content-center align-items-center">
                    <form action="{{route('buildingCN.store')}}" method="post" class="col-6">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control col-md-12" placeholder="Building Name"
                                   id="buildingDesc" name="buildingDesc" required>
                        </div>
                        <div class="form-group form-check">
                            <label for="active" class="form-check-label">
                                <input type="checkbox" class="custom-checkbox" name="active" id="active">Active
                            </label>
                        </div>
                        <div class="form-group">
                            <textarea name="remark" id="" cols="30" rows="10" class="form-control" placeholder="Remark"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-info col-6">Submit</button>
                        </div>
                    </form>
                </div>

@endsection
