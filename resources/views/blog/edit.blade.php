
<div class="container">
    <form action="{{route('blog.update', $blog)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <label>title</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title', $blog->title) }}">

                </div>

                <div class="col-md-6 ">
                    <label>Url</label>
                    <input type="text" name="url" class="form-control" value="{{old('url', $blog->url)}}">
                </div>

                <div class="my-3">
                    <label>Description</label>
                    <input type="text" name="description" class="form-control" value="{{ old('description', $blog->description) }}">
                </div>
            </div>
            <button type="submit" class="btn btn-primary my-3">Submit</button>
        </div>
    </form>
</div>
