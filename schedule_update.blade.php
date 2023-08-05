<style>
  form {
    display:flex;
    flex-direction: column;
    width: 500px;
  }
</style>
<body>
<form action="/admin/schedule/update" method="POST">
  @csrf <!-- Include this line if using Laravel's CSRF protection -->
  <h1>Update Schedule</h1>
  <a href="/schedule-dashboard">Back</a>
  <input type="hidden" name="id" value="{{ $data['id'] }}">

  <label for="description">Service ID:</label>
  <input type="text" id="service_id" value="{{ $data['service_id'] }}" name="service_id" required>
  
  <label for="type">Date:</label>
  <input type="date" id="date" value="{{ $data['date'] }}" name="date" required>
  
  <label for="status">Status:</label>
  <input type="text" value="{{ $data['status'] }}" id="status" name="status" required><br>
  
  <button type="submit">Submit</button>
</form>

</body>