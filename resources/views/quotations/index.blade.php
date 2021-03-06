@extends('layouts.main')

@section('title', 'Quotations')

@section('sub_css_imports')
    <script src="{{ mix('/js/sorttable.js') }}"></script>
    <link rel="stylesheet" href="{{ mix('/css/quotations.css') }}" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
@endsection

@section('sub_content')

    @include('quotations.quote-nav-buttons')

    <div class="quote-list-container">
        <div class="card">
            <ul>
                @foreach($quotes as $quote)
                    <li class="quote-list-item">
                        <span>{{ $quote->quotationLabel }}, {{ substr($quote->created_at, 0, 10) }}</span>
                        <span>
                            <a href="/quotations/{{ $quote->id }}">
                                <i class="fas fa-cloud-download-alt"></i>
                            </a>
                            <a target="_blank" rel="noopener noreferrer" href="/quotations/{{ $quote->id }}/view">
                                <i class="fas fa-eye"></i>
                            </a>
                        </span>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection