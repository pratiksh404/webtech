<div class="row">
    <div class="col-lg-6">
        <label for="name">Movie Name <span class="text-danger">*</span></label>
        <div class="input-group">
            <input type="text" name="name" id="name" class="form-control" value="{{$movie->name ?? old('name')}}"
                placeholder="Movie Name">
        </div>
    </div>
    <div class="col-lg-2">
        <label for="duration">Movie Duration</label>
        <div class="input-group">
            <input type="number" name="duration" id="duration" class="form-control"
                value="{{$movie->duration ?? old('duration')}}" min="0" placeholder="Movie Duration">
            <span class="input-group-text">mins</span>
        </div>
    </div>
    <div class="col-lg-2">
        <label for="year">Year</label>
        <div class="input-group">
            <input type="number" name="year" id="year" class="form-control" value="{{$movie->year ?? old('year')}}"
                placeholder="Year">
        </div>
    </div>
    <div class="col-lg-2">
        <label for="country">Country</label>
        <div class="input-group">
            <input type="text" name="country" id="country" class="form-control"
                value="{{$movie->country ?? old('country')}}" placeholder="Country">
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col-lg-12">
        <label for="description">Movie Description</label>
        <textarea name="description" id="description" rows="10" cols="80">
            @if (isset($movie->description))
                {!! $movie->description !!}
            @endif
        </textarea>
    </div>
</div>
<br>
<div class="row">
    <div class="col-lg-4">
        <label for="trailer">Movie Trailer</label>
        <div class="input-group">
            <input type="text" name="trailer" id="trailer" class="form-control"
                value="{{$movie->trailer ?? old('trailer')}}">
        </div>
    </div>
    <div class="col-lg-4">
        <label for="source">Movie Source URL <span class="text-danger">*</span></label>
        <div class="input-group">
            <input type="text" name="source" id="source" class="form-control"
                value="{{$movie->source ?? old('source')}}">
        </div>
    </div>
    <div class="col-lg-4">
        <label for="category_id">Movie Category <span class="text-danger">*</span></label>
        <div class="input-group">
            <select name="category_id" id="category_id" class="form-control">
                <option disabled selected>Select Movie Category ... </option>
                @isset($categories)
                @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
                @endisset
            </select>
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col-lg-12">
        <label for="image">Image Thumbnail</label>
        <input type="file" name="image" id="image">
    </div>
</div>