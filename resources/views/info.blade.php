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
        {!!Form::label('classes', 'Classes Taken:')!!}
        <div class="form-group" id="classes">
            <div class="col-xs-5">
                {!!Form::text('class[0]', null, ['class' => 'form-control', 'placeholder' => 'CSCI445'])!!}
            </div>
            <div class="col-xs-1">
                {!! Form::button('+', ['class' => 'btn btn-default', 'id' => 'plusButton']) !!}
            </div>
        </div>
    <!--Creating a drop down box for team style using bootstrap-->
        <div class="dropdown">
            {!! Form::button('Team Style <span class="caret"></span>', ['class' => 'btn btn-primary dropdown-toggle', 'data-toggle' => 'dropdown']) !!}
            <ul class="dropdown-menu">
                <li><a>HTML</a></li>
                <li><a>CSS</a></li>
                <li><a>JavaScript</a></li>
            </ul>
        </div>

        {!!Form::label('team', 'Team Style:')!!}
        <select class="form-control">
            <option value="one">One</option>
            <option value="two">Two</option>
            <option value="three">Three</option>
            <option value="four">Four</option>
            <option value="five">Five</option>
        </select>
        <br>
        <!--Form submit-->
        {!!Form::submit('update info', ['class' => 'btn btn-primary form-control'])!!}
    {!!Form::close()!!}
    <!--jQuery logic for dynamic elements-->
    <script>
        //add button click handler
        $(document).ready(function()
        {
            // The maximum number of options
            var MAX_OPTIONS = 5;
            var count = 0;

            $('#plusButton').click(function()
            //$('infoForm').on('click', '.addButton', function()
            {
                //$('#classes').after('<p>wat</p>');
                if(count >= MAX_OPTIONS)
                    return;
                count++;
                //alert(count);
                $('#classes').after('<div class="form-group" id="newClass">' +
                    '<div class="col-xs-5">' +
                        '<input class="form-control" placeholder="CSCI" name="class['+ count +']" type="text">' +
                    '</div>' +
                    '<div class="col-xs-1">' +
                        '<button class="btn btn-default" id="minusButton" type="button">-</button>' +
                    '</div>' +
                '</div>');
            });
            //remove the class
            $('div').on('click','#minusButton', function()
            {
                count--;
                //alert(count);
                $('#newClass').remove();
            });
            $('.dropdown-menu').click(function()
            {

            });
        });
    </script>
@stop