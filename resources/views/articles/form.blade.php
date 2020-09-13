@csrf
<div class="form-group">
  <label for="title">Title</label>
  <input type="text"
    class="form-control" name="title" id="title" aria-describedby="help" placeholder="Enter the title">
  <small id="help" class="form-text text-muted">Please enter the text</small>
</div>
<div class="form-group">
  <label for="body">Content</label>
  <textarea class="form-control" name="body" id="body" rows="3"></textarea>
</div>
<button type="submit" class="btn btn-primary">Submit</button>

{{-- @include ('errors') --}}