<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>prueba de kimsa</title>
        {!! Html::style('assets/css/datatable-bootstrap.css') !!}
        <link rel="stylesheet" href="http://necolas.github.io/normalize.css/2.1.3/normalize.css">
        <link rel="stylesheet" href="css/jquery.idealforms.css">
        <link rel="stylesheet" href="css/estilo.css">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <style>
                body {
                    max-width: 980px;
                    margin: 2em auto;
                    font: normal 15px/1.5 Arial, sans-serif;
                    color: #353535;
                    overflow-y: scroll;
                }

                .content {
                    margin: 0 30px;
                }

                .field.buttons button {
                    margin-right: .5em;
                }

                #invalid {
                    display: none;
                    float: left;
                    width: 290px;
                    margin-left: 120px;
                    margin-top: .5em;
                    color: #CC2A18;
                    font-size: 130%;
                    font-weight: bold;
                }

                .idealforms.adaptive #invalid {
                    margin-left: 0 !important;
                }

                .idealforms.adaptive .field.buttons label {
                    height: 0;
                }
            </style>
    </head>
    <body>

    </body>
</html>