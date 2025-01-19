
<div class="container">

    <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-md-6 ">
                <label>Title</label>
                <input type="text" name="title" class="form-control">

            </div>
            <div class="col-md-6">
            <label>Url</label>
            <input type="text" name="url" class="form-control">
        </div>
        </div>

        <div class="col-md-6">
            <label>Description</label>
            <input type="text" name="description" class="form-control">
        </div>

        <button type="submit">Submit</button>
    </form>
</div>
