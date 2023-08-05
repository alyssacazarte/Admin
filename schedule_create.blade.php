<style>
  form {
    display:flex;
    flex-direction: column;
    width: 500px;
  }
</style>
<body>
<form action="/admin/schedule/create/info" method="POST">
  @csrf <!-- Include this line if using Laravel's CSRF protection -->
  <h1>Create New Schedule</h1>
  <a href="/schedule-dashboard">Back</a>
  <label for="service_description">Service ID:</label>
  <input type="text" id="service_id" name="service_id" required>
  
  <label for="date">Date:</label>
  <input type="date" id="date" name="date" required>
  
  <label for="status">Status:</label>
  <input type="text" id="status" name="status" required><br>
  
  <button type="submit">Submit</button>
</form>

</body>