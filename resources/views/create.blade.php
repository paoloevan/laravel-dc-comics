<form action="{{route('store')}}" method="post" class="card p-3">
    @csrf

    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="la pasta piú buona" aria-describedby="titleHlper">
        <small id="titleHlper" class="text-muted">Add the post title here</small>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" name="description" id="description" class="form-control" placeholder="Linguine corte" aria-describedby="descriptionHlper">
        <small id="descriptionHlper" class="text-muted">Add the description here</small>
    </div>

    <div class="mb-3">
        <label for="thumb" class="form-label">Image</label>
        <input type="text" name="thumb" id="thumb" class="form-control" placeholder="Linguine corte" aria-describedby="thumbHlper">
        <small id="thumbHlper" class="text-muted">Add the image here</small>
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" name="price" id="price" class="form-control" placeholder="Linguine corte" aria-describedby="priceHlper">
        <small id="priceHlper" class="text-muted">Add the price here</small>
    </div>

    <div class="mb-3">
        <label for="series" class="form-label">Series</label>
        <input type="text" name="series" id="series" class="form-control" placeholder="Linguine corte" aria-describedby="seriesHlper">
        <small id="seriesHlper" class="text-muted">Add the series here</small>
    </div>

    <div class="mb-3">
        <label for="sale_date" class="form-label">Sale date</label>
        <input type="text" name="sale_date" id="sale_date" class="form-control" placeholder="Linguine corte" aria-describedby="sale_dateHlper">
        <small id="sale_dateHlper" class="text-muted">Add the sale date here</small>
    </div>

    <div class="mb-3">
        <label for="type" class="form-label">Type</label>
        <input type="text" name="type" id="type" class="form-control" placeholder="Linguine corte" aria-describedby="typeHlper">
        <small id="typeHlper" class="text-muted">Add the type here</small>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

</form>