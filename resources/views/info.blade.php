<!--<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <h1>Info page</h1>

</body>
</html>-->
@extends('app')

@section('content')
    <h2>My Info</h2>
    <!--let laravel use the form builder-->
    {!!Form::model(null, ['url' => ['/'], 'class' => 'form-horizontal', 'id' => 'infoForm'])!!}
        <!--Creating an input field for name using bootstrap-->
        {!!Form::label('name', 'Name:')!!}
        {!!Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Student Miner'])!!}
        <br>
        <!--Creating an input field for language preference using bootstrap-->
        {!!Form::label('language', 'Preferred Language:')!!}
        <div class="row">
            {!! Form::label('first', 'First:', ['class' => 'col-sm-1']) !!}
            <div class="col-sm-3">
                {!!Form::text('first', null, ['class' => 'form-control', 'placeholder' => 'First'])!!}
            </div>
            {!! Form::label('second', 'Second:', ['class' => 'col-sm-1']) !!}
            <div class="col-sm-3">
                {!!Form::text('second', null, ['class' => 'form-control', 'placeholder' => 'Second'])!!}
            </div>
            {!! Form::label('third', 'Third:', ['class' => 'col-sm-1']) !!}
            <div class="col-sm-3">
                {!!Form::text('third', null, ['class' => 'form-control', 'placeholder' => 'Third'])!!}
            </div>
        </div>
        <br>
        <!--Creating an input field and add button for classes using bootstrap-->
        <div class="dropdown" id="classesDropdown">
            {!! Form::button('Classes Taken <span class="caret"></span>', ['class' => 'btn btn-primary dropdown-toggle', 'data-toggle' => 'dropdown']) !!}
            <ul class="dropdown-menu" id="classDropdown">
                <li><a href="#">CSCI261</a></li>
                <li><a href="#">CSCI262</a></li>
                <li><a href="#">CSCI306</a></li>
            </ul>
        </div>
        <br>
    <!--Creating a drop down box for team style using bootstrap-->
        <div class="dropdown" id="teamStyleDropdown">
            {!! Form::button('Team Style <span class="caret"></span>', ['class' => 'btn btn-primary dropdown-toggle', 'data-toggle' => 'dropdown']) !!}
            <ul class="dropdown-menu" id="styleDropdown">
                <li><a href="#">Social</a></li>
                <li><a href="#">Competitive</a></li>
                <li><a href="#">IDGAF</a></li>
            </ul>
        </div>
        <br>
        <!--Form submit-->
        {!!Form::submit('update info', ['class' => 'btn btn-primary form-control'])!!}
    {!!Form::close()!!}
    <!--jQuery logic for dynamic elements-->
    <script>
        //add button click handler
        $(document).ready(function()
        {
            //classes style selection method
            $('#classDropdown').on('click', 'li', function()
            {
                //get the selected text from dropdown
                var Value = $(this).text();

                //creating a new text field
                $('#classesDropdown').after('<div class="form-group" id="addedClass">' +
                        '<div class="col-xs-5">' +
                        '<input class="form-control" value=' + Value + ' name="class" id="class" type="text" disabled/>' +
                        '</div>' +
                        '<div class="col-xs-1">' +
                        '<button class="btn btn-danger" id="removeClass" type="button" >Remove</button>' +
                        '</div>' +
                        '</div>');
                //remove style from drop box
                $(this).remove();
            });
            //remove team style selection method
            $('div').on('click', '#removeClass', function()
            {
                //get value of the text box
                var Value = $('#class').val();
                //remove the text box
                $('#addedClass').remove();
                //return style to drop box
                $('#classDropdown').append('<li><a href="#">' + Value + '</a></li>');
            })
            //team style selection method
            $('#styleDropdown').on('click', 'li', function()
            {
                //get the selected text from dropdown
                var Value = $(this).text();

                //creating a new text field
                $('#teamStyleDropdown').after('<div class="form-group" id="addedStyle">' +
                '<div class="col-xs-5">' +
                        '<input class="form-control" value=' + Value + ' name="teamstyle" id="style" type="text" disabled/>' +
                    '</div>' +
                    '<div class="col-xs-1">' +
                        '<button class="btn btn-danger" id="removeTeamStyle" type="button" >Remove</button>' +
                    '</div>' +
                '</div>');
                //remove style from drop box
               $(this).remove();
            });
            //remove team style selection method
            $('div').on('click', '#removeTeamStyle', function()
            {
                //get value of the text box
                var Value = $('#style').val();
                //remove the text box
                $('#addedStyle').remove();
                //return style to drop box
                $('#styleDropdown').append('<li><a href="#">' + Value + '</a></li>');
            })
        });
    </script>
@stop