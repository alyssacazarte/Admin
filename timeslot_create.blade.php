<style>
  form {
    display:flex;
    flex-direction: column;
    width: 500px;
  }
</style>
<body>
<form action="/admin/timeslot/create/info" method="POST">
  @csrf <!-- Include this line if using Laravel's CSRF protection -->
  <h1>Create New Time Slot</h1>
  <a href="/timeslot-dashboard">Back</a>
  
  <label for="schedule_id">Schedule ID:</label>
  <input type="text" id="schedule_id" name="schedule_id" required>

  <label for="start_time">Start Time:</label>
  <input type="time" id="start_time" name="start_time" required>
  
  <label for="end_time">End Time:</label>
  <input type="time" id="end_time" name="end_time" required>

  <label for="status">Status:</label>
  <input type="text" id="status" name="status" required><br>
  
  <button type="submit">Submit</button>
</form>

</body>