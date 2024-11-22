<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<table class="table table-striped">
    <tr>
        <th>states</th>
        <th>capital</th>
    </tr>
    <tr>
        <td>abia</td>
        <td>umuahia</td>
    </tr>

    <?php

    $statesAndCapitals = array(
        'abia'=>'umuahia',
        'adamawa'=>'yola',
        'akwa-ibom'=>'uyo',
        'anambra' =>'awka',
        'bauchi' => 'bauchi',
    );
        // echo    "<tr>
        //             <td>adamawa</td>
        //             <td>yola</td>
        //         </tr>";

    foreach ($statesAndCapitals as $key => $value) {
        echo "
        <tr>
            <td>$key</td>
            <td>$value</td>
    ";}
    ?>     
    
</table>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>