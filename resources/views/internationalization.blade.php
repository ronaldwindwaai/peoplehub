@extends('layouts.simple.master')

@section('title', 'Internationalization')

@section('css')
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Internationalization</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Pages</li>
                        <li class="breadcrumb-item active">Internationalization</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="site">
                    <div class="site-bd">
                        <div class="wrapper">
                            <div class="card">
                                <div class="card-header language-header">
                                    <h5>Internationalization</h5>
                                    <div class="main" role="main">
                                        <select class="langChoice js-languageSelect">
                                            <option>English</option>
                                            <option>German</option>
                                            <option>Russian</option>
                                            <option>Arabic</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="card-body row">
                                    <div class="col-sm-6">
                                        <h5 class="hdg hdg_main js-languagePageHdg pb-2">Static Sub Nav</h5>
                                        <div class="masthead" role="banner">
                                            <ul
                                                class="icon-lists border navs-icon hList hList_loose masthead-nav js-languageList">
                                                <li><a href="#"><span> Base</span></a></li>
                                                <li><a href="#"><span> Advance</span></a>
                                                    <ul class="hList hList_loose masthead-nav js-languageList">
                                                        <li class="ps-4"><a href="#"><span>Scrollable</span></a>
                                                        </li>
                                                        <li class="ps-4"><a href="#"><span>Tree View</span></a></li>
                                                        <li class="ps-4"><a href="#"><span>Rating</span></a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#"><span data-mlr-text=""> Forms</span></a></li>
                                                <li><a href="#"><span data-mlr-text=""> Tables</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 language-xs">
                                        <h5 class="hdg hdg_main js-languagePageHdg pb-2">Static Sub Nav</h5>
                                        <div class="masthead" role="banner">
                                            <ul
                                                class="icon-lists border navs-icon hList hList_loose masthead-nav js-languageList">
                                                <li><a href="#"><span> Base</span></a></li>
                                                <li><a href="#"><span> Advance</span></a>
                                                    <ul class="hList hList_loose masthead-nav js-languageList">
                                                        <li class="ps-4"><a
                                                                href="#"><span>Scrollable</span></a><span
                                                                class="float-end badge badge-primary">New</span></li>
                                                        <li class="ps-4"><a href="#"><span>Tree View</span></a><span
                                                                class="float-end badge badge-primary">Find</span></li>
                                                        <li class="ps-4"><a href="#"><span>Rating</span></a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#"><span data-mlr-text=""> Forms</span></a></li>
                                                <li><a href="#"><span data-mlr-text=""> Tables</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5>How to use it</h5>
                        <p class="f-m-light mt-1">Add a class <code>.hdg, .hdg_main, .js-languagePageHdg, .hList,
                                .hList_loose, .masthead-nav., js-languageList, .langChoice, .js-languageSelect</code> class
                            to any tag for language translate.</p>
                    </div>
                    <div class="card-body">
                        <div class="language">
                            <p>Add a <b>language-picker </b>plugin js</p>
                            <p> <b>HTML Code</b></p>
                            <pre class="mb-0 custom-scrollbar"> &lt;div class="site"&gt;<br />  &lt;div class="site-bd"&gt;<br />    &lt;div class="wrapper"&gt;<br />      &lt;div class="card"&gt;<br />        &lt;div class="card-header"&gt;<br />          &lt;h5 class="hdg hdg_main js-languagePageHdg"&gt;Internationalization&lt;/h5&gt;<br />        &lt;/div&gt;<br />        &lt;div class="main" role="main"&gt;<br />          &lt;select class="langChoice js-languageSelect"&gt;<br />            &lt;option val="0"&gt;English&lt;/option&gt;<br />            &lt;option val="1"&gt;German&lt;/option&gt;<br />            &lt;option val="2"&gt;Russian&lt;/option&gt;<br />            &lt;option val="3"&gt;Arabic&lt;/option&gt;<br />          &lt;/select&gt;<br />        &lt;/div&gt;<br />        &lt;div class="card-body row"&gt;<br />          &lt;div class="col-lg-6"&gt;<br />            &lt;h5 class="hdg hdg_main js-languagePageHdg"&gt;Static Sub Nav&lt;/h5&gt;<br />            &lt;div class="masthead" role="banner"&gt;<br />              &lt;ul class="icon-lists border navs-icon hList hList_loose masthead-nav js-languageList"&gt;<br />                &lt;li&gt;<br />                  &lt;a href="#"&gt;&lt;span&gt; Base&lt;/span&gt;&lt;/a&gt;<br />                &lt;/li&gt;<br />                &lt;li&gt;<br />                  &lt;a href="#"&gt;&lt;span&gt; Advance&lt;/span&gt;&lt;/a&gt;<br />                  &lt;ul class="hList hList_loose masthead-nav js-languageList"&gt;<br />                    &lt;li class="ps-4"&gt;&lt;a href="#"&gt;&lt;span&gt;Scrollable&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;<br />                    &lt;li class="ps-4"&gt;&lt;a href="#"&gt;&lt;span&gt;Tree View&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;<br />                    &lt;li class="ps-4"&gt;&lt;a href="#"&gt;&lt;span&gt;Rating&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;<br />                  &lt;/ul&gt;<br />                &lt;/li&gt;<br />                &lt;li&gt;<br />                  &lt;a href="#"&gt;&lt;span data-mlr-text&gt; Forms&lt;/span&gt;&lt;/a&gt;<br />                &lt;/li&gt;<br />                &lt;li&gt;<br />                  &lt;a href="#"&gt;&lt;span data-mlr-text&gt; Tables&lt;/span&gt;&lt;/a&gt;<br />                &lt;/li&gt;<br />              &lt;/ul&gt;<br />            &lt;/div&gt;<br />          &lt;/div&gt;<br />        &lt;/div&gt;<br />      &lt;/div&gt;<br />    &lt;/div&gt;<br />  &lt;/div&gt;<br /> &lt;/div&gt;</pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5>How to add language</h5>
                        <p class="f-m-light mt-1">You can also add other language according to below in js and add language
                            type in langChoice.</p>
                    </div>
                    <div class="card-body">
                        <pre class="language px-4 custom-scrollbar"><span class="font-danger">var </span>LANGUAGES = {<br>"English": {<br>"columns": [<br>"Base",<br>"Advance",<br>"scrollable",<br>"Tree View",<br>"Rating",<br>"News",<br>"Tables",<br>"Base",<br>"Advance",<br>"scrollable",<br>"Tree View",<br>"Rating",<br>"News",<br>"Tables"<br>],<br>"heading": "Static Sub Nav",<br>},<br>"German": {<br>"columns": [<br>"Basis",<br>"Fortschritt",<br>"scrollable",<br>"Baumansicht",<br>"Die Einschaltquote",<br>"Nachrichten",<br>"Tische",<br>"Basis",<br>"Fortschritt",<br>"scrollable",<br>"Baumansicht",<br>"Die Einschaltquote",<br>"Nachrichten",<br>"Tische"<br>],<br>"heading": "Statisches U-Boot Nav",<br>},<br>"Russian": {<br>"columns": [<br>"Основа",<br>"Прогресс",<br>"прокручиваемый",<br>"Представление Дерева",<br>"Оценка",<br>"новости",<br>"Столы",<br>"Основа",<br>"Прогресс",<br>"прокручиваемый",<br>"Представление Дерева",<br>"Оценка",<br>"новости",<br>"Столы"<br>],<br>"heading": "Статический Sub Военно - морской",<br>},<br>"Arabic": {<br>"columns": [<br>"قاعدة",<br>"مقدما",<br>"التمرير",<br>"عرض الشجرة",<br>"تصنيف",<br>"أخبار",<br>"الجداول",<br>"قاعدة",<br>"مقدما",<br>"التمرير",<br>"عرض الشجرة",<br>"تصنيف",<br>"أخبار",<br>"الجداول"<br>],<br>"heading": "صافي قيمة الأصول شبه الثابتة",<br>}<br>};</pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/internationalization/language-picker.js') }}"></script>
@endsection
