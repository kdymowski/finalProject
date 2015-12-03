@extends('app')

@section('content')
    <h2>My Info</h2>
    <!--let laravel use the form builder-->
    {!!Form::model(null, ['url' => ['/auth/update'], 'class' => 'form-horizontal', 'id' => 'infoForm'])!!}
        <!--Creating an input field for name using bootstrap-->
        <div class="row">
            <div class="col-xs-6">
                <div class="form-group">
                    <label class="col-md-4 control-label">First</label>
                </div>
                <input type="text" class="form-control" name="firstName" value="{{auth()->user()->firstName}}">
            </div>
            <div class="col-xs-6">
                <div class="form-group">
                    <label class="col-md-4 control-label">Last</label>
                </div>
                <input type="text" class="form-control" name="lastName" value="{{auth()->user()->lastName}}">
            </div>
        </div>
        <br>
        <!--Creating an input field for language preference using bootstrap-->
        <div class="dropdown" id="languagesDropdown">
            {!! Form::button('Preferred Language <span class="caret"></span>', ['class' => 'btn btn-primary dropdown-toggle', 'data-toggle' => 'dropdown']) !!}
            <div class="form-group" id="addedClass">
                <div class="col-xs-6">
                    <input class="form-control" value='{{auth()->user()->language}}' name="language" id="lang" type="text" disabled/>
                </div>
            </div>
            <ul class="dropdown-menu" id="languageDropdown">
                <!--<li class="disabled"><a href="#">top is most favored</a></li>-->
                <!--make the list of languages from the language table-->
                @foreach($languages as $language)
                    <li><a href="#">{{$language->language}}</a></li>
                @endforeach
            </ul>
        </div>
        <br>
        <!--Creating an input field and add button for classes using bootstrap-->
        <div class="dropdown" id="classesDropdown">
            {!! Form::button('Classes Taken <span class="caret"></span>', ['class' => 'btn btn-primary dropdown-toggle', 'data-toggle' => 'dropdown']) !!}
            <div class="form-group" id="addedlang">
                <div class="col-xs-6">
                    <input class="form-control" value='{{auth()->user()->class}}' name="classes" id="class" type="text" disabled/>
                </div>
            </div>
            <ul class="dropdown-menu" id="classDropdown">
                <!--make the list of languages from the language table-->
                @foreach($courses as $course)
                    <li><a href="#">{{$course->courseID}}</a></li>
                @endforeach
            </ul>
        </div>
        <br>
    <!--Creating a drop down box for team style using bootstrap-->
        <div class="dropdown" id="teamStyleDropdown">
            {!! Form::button('Team Style <span class="caret"></span>', ['class' => 'btn btn-primary dropdown-toggle', 'data-toggle' => 'dropdown']) !!}
            <div class="form-group" id="addedStyle">
                <div class="col-xs-6">
                    <input class="form-control" value='{{auth()->user()->teamStyle}}' name="teamstyle" id="style" type="text" disabled/>
                </div>
             </div>
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
            //language selection method
            $('#languageDropdown').on('click', 'li', function()
            {
                //get the selected text from dropdown
                var Value = $(this).text();

                //replace the text box
                $('#lang').attr('value',Value);
            });

            //classes selection method
            $('#classDropdown').on('click', 'li', function()
            {
                //get the selected text from dropdown
                var Value = $(this).text();

                //replace the text box
                $('#class').attr('value',Value);
            });

            //team style selection method
            $('#styleDropdown').on('click', 'li', function()
            {
                //get the selected text from dropdown
                var Value = $(this).text();

                //replace the text box
               $('#style').attr('value', Value);
            });
        });
    </script>
@stop