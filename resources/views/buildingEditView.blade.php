@extends('layoutView')
@section('content')
    <form action="{{route('buildingCN.update' ,$buildings -> buildingId)}}" method="post">
        @method('PATCH')
        @csrf
        <div class="form-group row">
            <label for="buildingDesc" class="col-sm-2">Building Name:</label>
            <input type="text" name="buildingDesc" value="{{$buildings -> buildingDesc}}" class="form-control col-sm-6" required>
        </div>
        <div class="form-group form-check row">
            <label for="active" class="form-check-label col-sm-2">Active:</label>
            <input type="checkbox" name="active" value="{{$buildings -> active}}" class="form-check-input" id="active">
        </div>
        <div class="form-group row">
            <label for="remark" class="col-sm-2">Remark:</label>
            <textarea name="remark" value="{{$buildings -> remark}}" class="form-control col-sm-6"></textarea>
        </div>

        <div class="form-group row">
            <div class="col-sm-2"></div>
            <button type="submit" class="btn btn-info">Submit</button>
        </div>
    </form>
</div>
@endsection