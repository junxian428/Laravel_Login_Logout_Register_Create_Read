<h1>Create Post</h1>
<form method="POST" action="/createPOST">
{{ csrf_field() }}
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="title" class="form-control" id="title" name="title">
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <input type="description" class="form-control" id="description" name="description">
        </div>

 
        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
        </div>
</form>
