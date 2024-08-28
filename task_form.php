<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Task</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e3f2fd;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .header {
            text-align: center;
            padding: 20px;
            background-color: #007bff;
            color: white;
        }
        .content {
            flex: 1;
        }
        .footer {
            text-align: center;
            padding: 10px;
            background-color: #007bff;
            color: white;
            position: relative;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
    <body>

<div class="header">
    <h1>Daily Task</h1>
</div>

<div class="content container">
<div class="container mt-5">
    <h2>Add New Task</h2>
    <form action="task_submit.php" method="POST">
        <div class="form-group">
            <label for="taskName">Task Name</label>
            <input type="text" class="form-control" id="taskName" name="taskName" required="">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required=""></textarea>
        </div>
        <div class="form-group">
            <label for="dueDate">Due Date</label>
            <input type="date" class="form-control" id="dueDate" name="dueDate" required="">
        </div>
        <button type="submit" class="btn btn-primary">Add Task</button>
    </form>
</div>
</div>

<div class="footer">
    <p>© 2024 Daily Task</p>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    </body>
</html>