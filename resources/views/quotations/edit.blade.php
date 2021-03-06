@extends('layouts.master')

@section('title', 'Quotations/Edit')

@section('page_heading', 'Quotations')

@section('content')
    <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
        <div class="mdl-card mdl-cell mdl-cell--12-col">
            <div class="mdl-card__supporting-text mdl-grid mdl-grid--no-spacing">
                <h4 class="mdl-cell mdl-cell--12-col">Editing: {{ $quote->id }}</h4>

                <form id="form_edit" method="POST" action="/quotations/{{ $quote->id }}">
                    {{ method_field('PATCH') }}
                    {{ csrf_field() }}

                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="text" id="quotationLabel" name="quotationLabel" value="{{ $quote->quotationLabel  }}" required>
                        <label class="mdl-textfield__label" for="quotationLabel">Label</label>
                    </div>
                </form>

                @if($errors->any())
                    <div>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>

            <div class="mdl-card__actions">
                <a href="#" class="mdl-button" onclick="document.getElementById('form_edit').submit();">
                    Submit
                </a>
            </div>

        </div>
    </section>
@endsection