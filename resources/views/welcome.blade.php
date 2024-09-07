<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
         
        <style>
            /* styles.css */
                .toggle-container {
                    display: flex;
                    align-items: center;
                }

                .toggle-input {
                    display: none;
                }

                .toggle-label {
                    width: 60px;
                    height: 34px;
                    background-color: #ccc;
                    border-radius: 50px;
                    position: relative;
                    cursor: pointer;
                    transition: background-color 0.3s;
                }

                .toggle-label::before {
                    content: "";
                    position: absolute;
                    width: 26px;
                    height: 26px;
                    border-radius: 50%;
                    background-color: white;
                    top: 4px;
                    left: 4px;
                    transition: transform 0.3s;
                }

                .toggle-input:checked + .toggle-label {
                    background-color: #007bff;
                }

                .toggle-input:checked + .toggle-label::before {
                    transform: translateX(26px);
                }
        </style>


    </head>
    <body class="antialiased">
        <!-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0"> -->

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 mt-5">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <h2>PHP - To Do List App</h2>
                </div>
                <hr>
                <div class="mt-2 row">
                    <div class="col-9">
                    <form id="task-form"  method="post">
                        @csrf
                        <div class="row">
                            <div class="col-9">
                                <input class="form-control" type="text" name="task" id="task-input">
                                <span id="error-message" class="text-danger"><span>
                            </div>
                            <div class="col-3">
                                <button class="form-control btn-primary" type="submit">Add Task</button>   
                            </div>
                        </div>
                    </form>
                    </div>
                    <div class="col-3">
                        <div class="toggle-container">
                            <input type="checkbox" id="toggle" class="toggle-input" value="true" onClick="toggleFunction(event)">
                            <label for="toggle" class="toggle-label"></label>
                            <label class="ml-2" style="font-size: 20px;" for="toggle">Show All Task</label>
                        </div>
                    </div>
                </div>
                <div>
                <table class="table table-striped mt-5">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Task</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="task-list">
                    </tbody>
                </table>
                </div>
                <div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="confirmDeleteModalLabel">Confirm Deletion</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <span id="delete-task-name"></span>
                            Are you sure you want to delete this task?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-danger" id="confirm-delete-btn">Delete</button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- </div> -->
    </body>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        
        <script type="text/javascript">
            $(document).ready(function() {
                getTasks();
            });

            $('#task-input').on('keydown', function(e) {
                if (e.key === 'Enter') {
                    e.preventDefault(); // Prevent the default Enter key action
                    $('#task-form').submit(); // Submit the form
                }
            });
            $("#task-form").on("submit", function(e){
                    e.preventDefault();
                    var formData = $(this).serialize();
                    
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: "{{ route('task.store') }}",
                        type: "POST",
                        data: formData,
                        success: function(response) {
                            // getTasks();
                            let checkbox = document.getElementById('toggle');
                    let filter = checkbox.checked ? 1 : 0;
                    getTasks(filter);
                            $('#error-message').hide();
                            $("#task-form").trigger("reset");
                        },
                        error: function(err) {
                            $('#error-message').text(err.responseJSON.errors.task);
                            $('#error-message').show();
                        }
                    });
                });
            function getTasks(filter = '') {
                    $.ajax({
                        url: "{{ route('task.index') }}",
                        type: "GET",
                        data: { filter: filter },
                        success: function(response) {
                            $("#task-list").html('')
                            if (response.tasks.length > 0) {
                                $.each(response.tasks, function(index, task) {
                                $("#task-list").append(`
                                   <tr>
                                        <td style="width: 10%">${++index}</td>
                                        <td style="width: 50%">${task.name}</td>
                                        <td style="width: 20%">${task.is_completed ? 'Completed' : 'Non Completed'}</td>
                                        <td style="width: 20%">
                                            ${!task.is_completed ? `<button class="btn btn-primary btn-sm task-edit" onClick="updateTask(${task.id})"><i class="fas fa-tasks"></i></button>` : ''}
                                            <button class="btn btn-danger btn-sm task-delete" onClick="confirmDeleteTask(${task.id}, '${task.name}')"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                `);
                            });  
                            } else {
                                $("#task-list").append(`
                                <tr>
                                    <td colspan="100%" class="text-center">
                                        <span>No Task Found</span>
                                    </td>
                                </tr>
                            `);  
                            }
                            
                        },
                        error: function(err) {
                            $('#error-message').text(err.responseJSON.errors.task);
                        }
                    });
                }

                function updateTask(id) {
                    $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            url: `{{ url('/task/update') }}/${id}`,
                            type: "PUT",
                            data: {
                                completed: 1
                            },
                            success: function(response) {
                                // getTasks();
                                let checkbox = document.getElementById('toggle');
                                let filter = checkbox.checked ? 1 : 0;
                                getTasks(filter);
                            },
                            error: function() {
                                console.log("Error updating task.");
                            }
                    });
                }

                let currentTaskId = null;

                function confirmDeleteTask(id, task) {
                    currentTaskId = id; // Store the task ID in a global variable
                    $('#delete-task-name').html(`<h2>${task}</h2>`);
                    $('#confirmDeleteModal').modal('show');
                }

                $('#confirm-delete-btn').on('click', function() {
                    if (currentTaskId !== null) {
                        deleteTask(currentTaskId);
                        $('#confirmDeleteModal').modal('hide');
                    }
                });

                function deleteTask(taskId) {
                    $.ajax({
                        url: `/task/${taskId}`,
                        type: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            let checkbox = document.getElementById('toggle');
                            let filter = checkbox.checked ? 1 : 0;
                            getTasks(filter);
                        },
                        error: function() {
                            alert("Error deleting task.");
                        }
                    });
                }

                function toggleFunction(e) {
                    let checkbox = document.getElementById('toggle');
                    let filter = checkbox.checked ? 1 : 0;
                    getTasks(filter);
                }
        </script>
</html>
