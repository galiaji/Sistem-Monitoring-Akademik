<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Internship Progress Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3>Internship Progress Form</h3>
            </div>
            <div class="card-body">
                <!-- Display success message if any -->
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                <!-- Form for Internship Progress -->
                <form method="POST" action="{{ route('internship.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="semester">Semester</label>
                        <input type="text" class="form-control" id="semester" name="semester" required>
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="text" class="form-control" id="status" name="status" required>
                    </div>

                    <div class="form-group">
                        <label for="seminar_date">Seminar Date</label>
                        <input type="date" class="form-control" id="seminar_date" name="seminar_date" required>
                    </div>

                    <div class="form-group">
                        <label for="grade">Grade</label>
                        <input type="number" step="0.01" class="form-control" id="grade" name="grade" required>
                    </div>

                    <div class="form-group">
                        <label for="pdf">PDF Report</label>
                        <input type="file" class="form-control-file" id="pdf" name="pdf" accept=".pdf" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>