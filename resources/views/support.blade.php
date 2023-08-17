@extends('master')

@section('title', @trans('font.support.index.SUPPORT.title'))

@section('content')
<main>
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li id="linenext" class="breadcrumb-item"><a href="_home1.php">{{@trans('font.support.index.home')}}</a></li>
            <li id="linenext" class="breadcrumb-item active" aria-current="page">{{@trans('font.support.index.SUP')}}</li>
        </ol>
    </nav>
    <div class="accordion" id="accordionPanelsStayOpenExample" style="margin-bottom: 100px;">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button style="z-index: 0;" class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    <strong>{{@trans('font.support.index.wara')}}</strong>
                </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                <div class="accordion-body">
                    <p><strong>1.</strong> {{@trans('font.support.index.name')}}</p>
                    <p><strong>2.</strong> {{@trans('font.support.index.name1')}}</p>
                    <p><strong>3.</strong> {{@trans('font.support.index.name2')}}</p>
                    <p><strong>4.</strong> {{@trans('font.support.index.name3')}}</p>
                    <p><strong>5</strong> {{@trans('font.support.index.name4')}}</p>
                    <p><strong>*</strong> {{@trans('font.support.index.name5')}}</p>
                    <p><strong>Note:</strong>{{@trans('font.support.index.name6')}}</p>
                    <p><strong>{{@trans('font.support.index.name7')}}</strong></p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button style="z-index: 0;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                    <strong>{{@trans('font.support.index.name8')}}</strong>
                </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <p><strong>1.</strong> {{@trans('font.support.index.name9')}}</p>
                    <p><strong>2.</strong> {{@trans('font.support.index.name10')}}</p>
                    <p><strong>Note:</strong> {{@trans('font.support.index.name11')}}</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button style="z-index: 0;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    <strong>{{@trans('font.support.index.name12')}}</strong>
                </button>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <p><strong>1.{{@trans('font.support.index.name13')}}</strong><br> {{@trans('font.support.index.name14')}}</p>
                    <p><strong>2. {{@trans('font.support.index.name15')}}</strong><br> {{@trans('font.support.index.name16')}}<br>{{@trans('font.support.index.name17')}}</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button style="z-index: 0;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                    <strong>{{@trans('font.support.index.name18')}}</strong>
                </button>
            </h2>
            <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <p><strong>Step 1:</strong><br>{{@trans('font.support.index.name19')}}</p>
                    <p><strong>Step 2:</strong><br>{{@trans('font.support.index.name20')}}</p>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection