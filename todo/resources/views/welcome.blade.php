<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo</title>

    <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"rel="stylesheet"/>
   
        {{-- Mdb CSS --}}
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css" rel="stylesheet"/>

    {{--Mdb JS  --}}
        <script type="text/javascript"src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"></script>


    </head>
        <body class="bg-success">
                <div class="container w-25 mt-5">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h3>To-Do List</h3>
                            <form action="{{route('store')}}" method="POST">
                                @csrf
                                <div class="input-group">
                                    <input type="text" name="contenuto" class="form-control" placeholder="Aggiungi">
                                    <button type="submit" class="btn btn-danger btn-sm px-3"><i class="fas fa-plus"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </body>
    </html>