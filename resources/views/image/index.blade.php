@extends('layout')

@section('content')

    <br>

    <!-- TOP AVATAR -->

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <img alt="Brand" src="{{\Session::get('avatar_path','http://placehold.it/20x20')}}">
                </a>
                <a class="navbar-brand" href="#">Hello, user!</a>
            </div>
        </div>
    </nav>


    <!-- CONTENT AVATAR -->

    <div class="media">
        <div class="media-left">
            <a href="#">
                <img class="media-object" src="{{\Session::get('avatar_path','http://placehold.it/120x120')}}">
            </a>
        </div>
        <div class="media-body">
            <h4 class="media-heading">Sir Anthony Hopkins</h4>

            <p>Sir Philip Anthony Hopkins, CBE (born 31 December 1937), is a Welsh actor of film, stage, and television, and
                a composer and painter.[1] After graduating from the Royal Welsh College of Music & Drama in 1957, he
                trained at the Royal Academy of Dramatic Art in London, and was then spotted by Laurence Olivier who invited
                him to join the Royal National Theatre. In 1968, he got his break in film in The Lion in Winter, playing
                Richard I.</p>
        </div>
    </div>

    <!-- FORM -->

    <hr>

    <h2>Upload user avatar</h2>

    <form method="post" action="" enctype="multipart/form-data">

        {{csrf_field()}}

        <div class="form-group">
            <label>Image avatar</label>
            <input type="file" name="avatar">
        </div>

        <button type="submit" class="btn btn-default">Upload</button>

    </form>

@stop