<form action="{{route('card.search', $pointOfSale->id)}}" method="get">
    @csrf
    <div class="form-group">
        <label for="phone_number">Phone No.</label>
        <input type="number" class="form-control" id="phone_number" name="phone_number">
    </div>
    <div class="form-group">
        <label for="serial">Serial No.</label>
        <input type="number" class="form-control" id="serial" name="serial" value="{{old('serial')}}">
    </div>
    <div class="form-group">
        <label for="id_number">ID No.</label>
        <input type="number" class="form-control" id="id_number" name="id_number">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@if(!empty($card))

    <div class="form-group">
        <label>مكان البيع</label>
        <span>{{$card->PointOfSale->name}}</span>
    </div>
    <div class="form-group">
        <label>تاريخ الشراء</label>
        <span>{{$card->created_at}}</span>
    </div>
    <div class="form-group">
        <label>نسبة المشاهدة</label>
        <span>20%</span>
    </div>
@endif
