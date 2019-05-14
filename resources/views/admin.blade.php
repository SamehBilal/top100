<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Panel</title>

    <link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.2.0/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin-panel.css')}}" />
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

</head>
<body>
    <div class="container">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#movies" role="tab">
                    <i class="fa fa-film" aria-hidden="true"></i> Movies
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#music" role="tab">
                    <i class="fa fa-music " aria-hidden="true"></i> Music
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#series" role="tab">
                    <i class="fa fa-tv " aria-hidden="true"></i> Series
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#books" role="tab">
                    <i class="fa fa-book" aria-hidden="true"></i> Books
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#places" role="tab">
                    <i class="fa fa-map-marker" aria-hidden="true"></i> Places
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#mobiles" role="tab">
                    <i class="fa fa-mobile" aria-hidden="true"></i> Mobiles
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#apps" role="tab">
                    <i class="fa fa-th-large" aria-hidden="true"></i> Applications
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#restaurants" role="tab">
                    <i class="fa fa-cutlery" aria-hidden="true"></i> Restaurants
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#cafes" role="tab">
                    <i class="fa fa-coffee" aria-hidden="true"></i> Cafés
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#drinks" role="tab">
                    <i class="fa fa-beer" aria-hidden="true"></i> Drinks
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/" >
                    <i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i>
                </a>
            </li>
        </ul>

    <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="movies" role="tabpanel">
                <br>
                <h1><i class="fa fa-film" aria-hidden="true"></i> Movies</h1>
                <br>
                <form action="/movies" method="post">
                    {{csrf_field()}}
                    <div class="row">

                        <div class="form-group col-2">
                            <label for="input" class=" col-form-label">Name</label>
                            <input class="form-control" type="text"  id="input" name="name">
                        </div>
                        <div class="form-group col-3">
                            <label for="description" class=" col-form-label">Description</label>
                            <input class="form-control" type="text"  id="description" name="description">
                        </div>

                        <div class="form-group col-1">
                            <label for="position" class=" col-form-label">Position</label>
                            <input class="form-control" type="number"  id="position" name="position">
                        </div>
                        <div class="form-group col-1">
                            <label for="rate" class=" col-form-label">Rate</label>
                            <input class="form-control" type="number" value="0" id="rate" name="rate">
                        </div>
                        <div class="form-group col-2">
                            <label for="number of rates" class=" col-form-label">Number Of Rates</label>
                            <input class="form-control" type="number" value="0"  id="number of rates" name="numofrates">
                        </div>
                        <div class="form-group col-1">
                            <label for="average" class=" col-form-label">Average</label>
                            <input class="form-control" type="text"  id="average" name="average">
                        </div>
                        <div class="form-group col-2">
                            <label for="description" class=" col-form-label">Image_path</label>
                            <input class="form-control" type="text"  id="description" name="image_path">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success" name="button">Submit</button>

                </form>
                <br>
            </div>

            <div class="tab-pane" id="music" role="tabpanel">
                <br>
                <h1><i class="fa fa-music" aria-hidden="true"></i> Music</h1>
                <br>
                <form action="/music" method="post">
                    {{csrf_field()}}
                    <div class="row">

                        <div class="form-group col-2">
                            <label for="input" class=" col-form-label">Name</label>
                            <input class="form-control" type="text"  id="input" name="name">
                        </div>
                        <div class="form-group col-3">
                            <label for="description" class=" col-form-label">Description</label>
                            <input class="form-control" type="text"  id="description" name="description">
                        </div>
                        <div class="form-group col-1">
                            <label for="position" class=" col-form-label">Position</label>
                            <input class="form-control" type="number"  id="position" name="position">
                        </div>
                        <div class="form-group col-1">
                            <label for="rate" class=" col-form-label">Rate</label>
                            <input class="form-control" type="number" value="0" id="rate" name="rate">
                        </div>
                        <div class="form-group col-2">
                            <label for="number of rates" class=" col-form-label">Number Of Rates</label>
                            <input class="form-control" type="number" value="0"  id="number of rates" name="numofrates">
                        </div>
                        <div class="form-group col-1">
                            <label for="average" class=" col-form-label">Average</label>
                            <input class="form-control" type="text"  id="average" name="average">
                        </div>
                        <div class="form-group col-2">
                            <label for="description" class=" col-form-label">Image_path</label>
                            <input class="form-control" type="text"  id="description" name="image_path">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success" name="button">Submit</button>
                </form>
                <br>
            </div>

            <div class="tab-pane" id="series" role="tabpanel">
                <br>
                <h1><i class="fa fa-tv" aria-hidden="true"></i> Series</h1>
                <br>
                <form action="/series" method="post">
                    {{csrf_field()}}
                        <div class="row">
                            <div class="form-group col-2">
                                <label for="input" class=" col-form-label">Name</label>
                                <input class="form-control" type="text"  id="input" name="name">
                            </div>
                            <div class="form-group col-3">
                                <label for="description" class=" col-form-label">Description</label>
                                <input class="form-control" type="text"  id="description" name="description">
                            </div>
                            <div class="form-group col-1">
                                <label for="position" class=" col-form-label">Position</label>
                                <input class="form-control" type="number"  id="position" name="position">
                            </div>
                            <div class="form-group col-1">
                                <label for="rate" class=" col-form-label">Rate</label>
                                <input class="form-control" type="number" value="0" id="rate" name="rate">
                            </div>
                            <div class="form-group col-2">
                                <label for="number of rates" class=" col-form-label">Number Of Rates</label>
                                <input class="form-control" type="number" value="0"  id="number of rates" name="numofrates">
                            </div>
                            <div class="form-group col-1">
                                <label for="average" class=" col-form-label">Average</label>
                                <input class="form-control" type="text"  id="average" name="average">
                            </div>
                            <div class="form-group col-2">
                                <label for="description" class=" col-form-label">Image_path</label>
                                <input class="form-control" type="text"  id="description" name="image_path">
                            </div>
                        </div>
                    <button type="submit" class="btn btn-success" name="button">Submit</button>
                </form>
                <br>
            </div>

            <div class="tab-pane" id="books" role="tabpanel">
                <br>
                <h1><i class="fa fa-book" aria-hidden="true"></i> Books</h1>
                <br>
                <form action="/books" method="post">
                    {{csrf_field()}}
                    <div class="row">

                        <div class="form-group col-2">
                            <label for="input" class=" col-form-label">Name</label>
                            <input class="form-control" type="text"  id="input" name="name">
                        </div>
                        <div class="form-group col-3">
                            <label for="description" class=" col-form-label">Description</label>
                            <input class="form-control" type="text"  id="description" name="description">
                        </div>
                        <div class="form-group col-1">
                            <label for="position" class=" col-form-label">Position</label>
                            <input class="form-control" type="number"  id="position" name="position">
                        </div>
                        <div class="form-group col-1">
                            <label for="rate" class=" col-form-label">Rate</label>
                            <input class="form-control" type="number" value="0" id="rate" name="rate">
                        </div>
                        <div class="form-group col-2">
                            <label for="number of rates" class=" col-form-label">Number Of Rates</label>
                            <input class="form-control" type="number" value="0"  id="number of rates" name="numofrates">
                        </div>
                        <div class="form-group col-1">
                            <label for="average" class=" col-form-label">Average</label>
                            <input class="form-control" type="text"  id="average" name="average">
                        </div>
                        <div class="form-group col-2">
                            <label for="description" class=" col-form-label">Image_path</label>
                            <input class="form-control" type="text"  id="description" name="image_path">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success" name="button">Submit</button>
                </form>
                <br>
            </div>

            <div class="tab-pane" id="places" role="tabpanel">
                <br>
                <h1><i class="fa fa-map-marker" aria-hidden="true"></i> Places</h1>
                <br>
                <form action="/places" method="post">
                    {{csrf_field()}}
                    <div class="row">

                        <div class="form-group col-3">
                            <label for="input" class=" col-form-label">Name</label>
                            <input class="form-control" type="text"  id="input" name="name">
                        </div>
                        <div class="form-group col-4">
                            <label for="description" class=" col-form-label">Description</label>
                            <input class="form-control" type="text"  id="description" name="description">
                        </div>
                        <div class="form-group col-1">
                            <label for="position" class=" col-form-label">Position</label>
                            <input class="form-control" type="number"  id="position" name="position">
                        </div>
                        <div class="form-group col-1">
                            <label for="rate" class=" col-form-label">Rate</label>
                            <input class="form-control" type="number" value="0" id="rate" name="rate">
                        </div>
                        <div class="form-group col-2">
                            <label for="number of rates" class=" col-form-label">Number Of Rates</label>
                            <input class="form-control" type="number" value="0"  id="number of rates" name="numofrates">
                        </div>
                        <div class="form-group col-1">
                            <label for="average" class=" col-form-label">Average</label>
                            <input class="form-control" type="text"  id="average" name="average">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success" name="button">Submit</button>
                </form>
                <br>
            </div>

            <div class="tab-pane" id="mobiles" role="tabpanel">
                <br>
                <h1><i class="fa fa-mobile" aria-hidden="true"></i> Mobiles</h1>
                <br>
                <form action="/mobiles" method="post">
                    {{csrf_field()}}
                    <div class="row">

                        <div class="form-group col-3">
                            <label for="input" class=" col-form-label">Name</label>
                            <input class="form-control" type="text"  id="input" name="name">
                        </div>
                        <div class="form-group col-4">
                            <label for="description" class=" col-form-label">Description</label>
                            <input class="form-control" type="text"  id="description" name="description">
                        </div>
                        <div class="form-group col-1">
                            <label for="position" class=" col-form-label">Position</label>
                            <input class="form-control" type="number"  id="position" name="position">
                        </div>
                        <div class="form-group col-1">
                            <label for="rate" class=" col-form-label">Rate</label>
                            <input class="form-control" type="number" value="0" id="rate" name="rate">
                        </div>
                        <div class="form-group col-2">
                            <label for="number of rates" class=" col-form-label">Number Of Rates</label>
                            <input class="form-control" type="number" value="0"  id="number of rates" name="numofrates">
                        </div>
                        <div class="form-group col-1">
                            <label for="average" class=" col-form-label">Average</label>
                            <input class="form-control" type="text"  id="average" name="average">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success" name="button">Submit</button>
                </form>
                <br>
            </div>

            <div class="tab-pane" id="apps" role="tabpanel">
                <br>
                <h1><i class="fa fa-th-large" aria-hidden="true"></i> applications</h1>
                <br>
                <form action="/apps" method="post">
                    {{csrf_field()}}
                    <div class="row">

                        <div class="form-group col-3">
                            <label for="input" class=" col-form-label">Name</label>
                            <input class="form-control" type="text"  id="input" name="name">
                        </div>
                        <div class="form-group col-4">
                            <label for="description" class=" col-form-label">Description</label>
                            <input class="form-control" type="text"  id="description" name="description">
                        </div>
                        <div class="form-group col-1">
                            <label for="position" class=" col-form-label">Position</label>
                            <input class="form-control" type="number"  id="position" name="position">
                        </div>
                        <div class="form-group col-1">
                            <label for="rate" class=" col-form-label">Rate</label>
                            <input class="form-control" type="number" value="0" id="rate" name="rate">
                        </div>
                        <div class="form-group col-2">
                            <label for="number of rates" class=" col-form-label">Number Of Rates</label>
                            <input class="form-control" type="number" value="0"  id="number of rates" name="numofrates">
                        </div>
                        <div class="form-group col-1">
                            <label for="average" class=" col-form-label">Average</label>
                            <input class="form-control" type="text"  id="average" name="average">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success" name="button">Submit</button>
                </form>
                <br>
            </div>

            <div class="tab-pane" id="restaurants" role="tabpanel">
                <br>
                <h1><i class="fa fa-cutlery" aria-hidden="true"></i> Restaurants</h1>
                <br>
                <form action="/restaurants" method="post">
                    {{csrf_field()}}
                    <div class="row">

                        <div class="form-group col-3">
                            <label for="input" class=" col-form-label">Name</label>
                            <input class="form-control" type="text"  id="input" name="name">
                        </div>
                        <div class="form-group col-4">
                            <label for="description" class=" col-form-label">Description</label>
                            <input class="form-control" type="text"  id="description" name="description">
                        </div>
                        <div class="form-group col-1">
                            <label for="position" class=" col-form-label">Position</label>
                            <input class="form-control" type="number"  id="position" name="position">
                        </div>
                        <div class="form-group col-1">
                            <label for="rate" class=" col-form-label">Rate</label>
                            <input class="form-control" type="number" value="0" id="rate" name="rate">
                        </div>
                        <div class="form-group col-2">
                            <label for="number of rates" class=" col-form-label">Number Of Rates</label>
                            <input class="form-control" type="number" value="0"  id="number of rates" name="numofrates">
                        </div>
                        <div class="form-group col-1">
                            <label for="average" class=" col-form-label">Average</label>
                            <input class="form-control" type="text"  id="average" name="average">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success" name="button">Submit</button>
                </form>
                <br>
            </div>

            <div class="tab-pane" id="cafes" role="tabpanel">
                <br>
                <h1><i class="fa fa-coffee" aria-hidden="true"></i> Cafés</h1>
                <br>
                <form action="/cafes" method="post">
                    {{csrf_field()}}
                    <div class="row">

                        <div class="form-group col-3">
                            <label for="input" class=" col-form-label">Name</label>
                            <input class="form-control" type="text"  id="input" name="name">
                        </div>
                        <div class="form-group col-4">
                            <label for="description" class=" col-form-label">Description</label>
                            <input class="form-control" type="text"  id="description" name="description">
                        </div>
                        <div class="form-group col-1">
                            <label for="position" class=" col-form-label">Position</label>
                            <input class="form-control" type="number"  id="position" name="position">
                        </div>
                        <div class="form-group col-1">
                            <label for="rate" class=" col-form-label">Rate</label>
                            <input class="form-control" type="number" value="0" id="rate" name="rate">
                        </div>
                        <div class="form-group col-2">
                            <label for="number of rates" class=" col-form-label">Number Of Rates</label>
                            <input class="form-control" type="number" value="0"  id="number of rates" name="numofrates">
                        </div>
                        <div class="form-group col-1">
                            <label for="average" class=" col-form-label">Average</label>
                            <input class="form-control" type="text"  id="average" name="average">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success" name="button">Submit</button>
                </form>
                <br>
            </div>

            <div class="tab-pane" id="drinks" role="tabpanel">
                <br>
                <h1><i class="fa fa-beer" aria-hidden="true"></i> Drinks</h1>
                <br>
                <form action="/drinks" method="post">
                    {{csrf_field()}}
                    <div class="row">

                        <div class="form-group col-3">
                            <label for="input" class=" col-form-label">Name</label>
                            <input class="form-control" type="text"  id="input" name="name">
                        </div>
                        <div class="form-group col-4">
                            <label for="description" class=" col-form-label">Description</label>
                            <input class="form-control" type="text"  id="description" name="description">
                        </div>
                        <div class="form-group col-1">
                            <label for="position" class=" col-form-label">Position</label>
                            <input class="form-control" type="number"  id="position" name="position">
                        </div>
                        <div class="form-group col-1">
                            <label for="rate" class=" col-form-label">Rate</label>
                            <input class="form-control" type="number" value="0" id="rate" name="rate">
                        </div>
                        <div class="form-group col-2">
                            <label for="number of rates" class=" col-form-label">Number Of Rates</label>
                            <input class="form-control" type="number" value="0"  id="number of rates" name="numofrates">
                        </div>
                        <div class="form-group col-1">
                            <label for="average" class=" col-form-label">Average</label>
                            <input class="form-control" type="text"  id="average" name="average">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success" name="button">Submit</button>
                </form>
                <br>
            </div>

        </div>
    </div>
</body>
</html>