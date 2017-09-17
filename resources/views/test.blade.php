<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Laravel Ajax</title>

    <!-- Load Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container-narrow">
    <div>

        <!-- Table-to-load-the-data Part -->
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
            </tr>
            </thead>
            <tbody id="user-list">

            </tbody>
        </table>

    </div>
</div>
<meta name="_token" content="{!! csrf_token() !!}" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script>

    $(document).ready(function(){

        $.ajax({

            url:"http://127.0.0.1:8000/users",
            success: function (data) {
                console.log(data);

                var str = "";

                for(var i in data)
                {
                    var id = data[i].user_id;
                    var name = data[i].user_full_name;
                    str += "<tr><td>" + id + "</td><td>"+ name + "</td></tr>";
                }

                $("#user-list").html(str);
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });

    });


</script>
</body>
</html>