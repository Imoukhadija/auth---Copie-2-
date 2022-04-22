@extends("addmin.base")
@section('title', 'garanties')
@section('content')
    <form>
        <div class="card-body">
            <div class="form-group">
                <label for="titre">titre</label>
                <input type="text" class="form-control" name="titre" id="titre" placeholder="Enter titre"
                    value=" {{ $garanty->titre }}" disabled>
            </div>
            <div class="form-group">
                <label for="prix">prix</label>
                <input type="number" class="form-control" name="prix" id="prix" placeholder="Enter prix"
                    value="{{ $garanty->prix}}" disabled>
            </div>
            <div class="form-group">
                <label for="image">image</label> <br>
                 <img  style="width:500px;height:500px"src="{{ asset("images/garantie/". $garanty->image) }}" alt="{{$garanty->titre}}"
                                                        class="fluid rounded" width="60" height="60"
                                                    >
            </div>
            <div class="form-group">
                <label for="titre">titre</label>
                
                    <input type="text" class="form-control" name="titre" id="titre" placeholder="Enter titre"
                    value="  {{ $garanty->category->titre}}" disabled>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description" cols="30" rows="10"
                    disabled> {{ substr($garanty->description,0,100)}}</textarea>
            </div>
        </div>
    </form>
@endsection
