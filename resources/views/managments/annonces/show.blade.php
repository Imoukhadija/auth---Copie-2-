@extends("addmin.base")
@section('title', 'garanties')
@section('content')
    <form>
        <div class="card-body">
            <div class="form-group">
                <label for="actor">actor</label>
                <input type="text" class="form-control" name="actor" id="actor" placeholder="Enter actor"
                    value=" {{ $annonce->actor }}" disabled>
            </div>
            
            
            <div class="form-group">
                <label for="actor">actor</label>
                
                    <input type="text" class="form-control" name="actor" id="actor" placeholder="Enter actor"
                    value="  {{ $annonce->actor}}" disabled>
            </div>
            <div class="form-group">
                <label for="anonce">anonce</label>
                <textarea class="form-control" name="anonce" id="anonce" cols="30" rows="10"
                    disabled> {{ substr($annonce->anonce,0,100)}}</textarea>
            </div>
              <div class="form-group">
                <label for="dates">date </label>
                <input type="text" class="form-control" name="dates" id="dates" placeholder=" "
                    value="{{ $annonce->dates }}" disabled>
            </div>
            
        </div>
    </form>
@endsection
