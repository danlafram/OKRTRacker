<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Create OKR</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">       
        <div>
            <form method="post" action="objectives/create">
                {{csrf_field()}}
                <label for="objective">Objective</label><br>
                <input type="text" id="objective" name="name"><br>

                <label for="key_result1">Key Result #1</label><br>
                <input type="text" id="key_result1" name="key_result[]">

                <label for="key_result2">Key Result #2</label><br>
                <input type="text" id="key_result2" name="key_result[]">

                <label for="key_result3">Key Result #3</label><br>
                <input type="text" id="key_result3" name="key_result[]">

                <label for="target_date">Target Date</label><br>
                <input type="date" id="target_date" name="target_date">

                <input type="submit" value="Create">
            </form>
        </div>
    </body>
</html>