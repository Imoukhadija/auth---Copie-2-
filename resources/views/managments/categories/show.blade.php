@extends("addmin.base")
@section('title', 'CATEGORIES')
@section('content')
    <form>
        <div class="card-body">
            <div class="form-group">
                <label for="titre">titre </label>
                <input type="text" class="form-control" name="titre" id="titre" placeholder=""
                    value="{{ $category->titre }}" disabled>
            </div>
           
            
            
            
           
        </div>
    </form>
@endsection
