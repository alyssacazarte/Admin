<style>
  form {
    display:flex;
    flex-direction: column;
    width: 500px;
  }
</style>
<body>
<form action="/admin/service/create/info" method="POST">
  @csrf <!-- Include this line if using Laravel's CSRF protection -->
  <h1>Create New Service</h1>
  <a href="/service-dashboard">Back</a>
  <label for="service_type">Type:</label>
  <input type="text" id="type" name="type" required>
  
  <label for="service_description">Description:</label>
  <textarea id="description" name="description" required></textarea>
  
  <label for="service_duration">Status:</label>
  <input type="text" id="status" name="status" required><br>
  
  <button type="submit">Submit</button>
</form>

</body>
