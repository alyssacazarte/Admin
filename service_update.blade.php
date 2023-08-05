<style>
  form {
    display:flex;
    flex-direction: column;
    width: 500px;
  }
</style>
<body>
<form action="/admin/service/update/" method="POST">
  @csrf <!-- Include this line if using Laravel's CSRF protection -->
  <h1>Update Service</h1>
  <a href="/service-dashboard">Back</a>
  <input type="hidden" name="id" value="{{ $data['id'] }}">
  <label for="type">Type:</label>
  <input type="text" id="type" value="{{ $data['type'] }}" name="type" required>
  
  <label for="description">Description:</label>
  <textarea type="text" id="description" value="" name="description" required>{{ $data['description'] }}</textarea>
  
  <label for="status">Status:</label>
  <input type="text" value="{{ $data['status'] }}" id="status" name="status" required><br>
  
  <button type="submit">Submit</button>
</form>

</body>