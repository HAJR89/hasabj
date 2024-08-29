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
    <h2>Task List</h2>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">Task Name</th>
                <th scope="col">Description</th>
                <th scope="col">Due Date</th>
                <th scope="col">Status</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
                                <tr>
                        <td>c v cgb</td>
                        <td>vcvszc</td>
                        <td>8477-09-07</td>
                        <td>To Do</td>
                        <td>
                            <a href="task_edit.php?index=0" class="btn btn-sm btn-warning">Edit</a>
                            <a href="task_delete.php?index=0" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                        </tbody>
    </table>
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