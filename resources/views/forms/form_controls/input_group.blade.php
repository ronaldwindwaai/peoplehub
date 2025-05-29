@extends('layouts.simple.master')

@section('title', 'Input Groups')

@section('css')
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Input Groups</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Form Controls</li>
                        <li class="breadcrumb-item active"> Input groups</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid main-input-group">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Button Addons </h5>
                        <p class="f-m-light mt-1">
                            Multiple add-ons are supported and can be mixed with buttons input versions.</p>
                    </div>
                    <div class="card-body card-wrapper input-group-wrapper btn-addon">
                        <div class="input-group">
                            <button class="btn btn-outline-secondary" id="button-addon1" type="button">$ 25</button>
                            <input class="form-control" type="text" placeholder=""
                                aria-label="Example text with button addon" aria-describedby="button-addon1">
                        </div>
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Recipient's username"
                                aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-outline-primary" id="button-addon2" type="button">Submit</button>
                        </div>
                        <div class="input-group">
                            <button class="btn btn-secondary" type="button"><span>&#8364; </span></button>
                            <button class="btn btn-primary" type="button">0.0114419</button>
                            <input class="form-control" type="text" placeholder=""
                                aria-label="Example text with two button addons">
                        </div>
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Recipient's username"
                                aria-label="Recipient's username with two button addons">
                            <button class="btn btn-secondary" type="button"> <span>&#8377;</span></button>
                            <button class="btn btn-primary" type="button">500</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Custom Forms </h5>
                        <p class="f-m-light mt-1">
                            Input groups include support for <code>custom selects and custom file inputs</code>. Browser
                            default versions of these are not supported.</p>
                    </div>
                    <div class="card-body common-flex main-custom-form">
                        <div class="input-group">
                            <label class="input-group-text" for="inputGroupSelect01">Options</label>
                            <select class="form-select" id="inputGroupSelect01">
                                <option selected="">Select Your Favorite Pixelstrap theme</option>
                                <option value="1">Tivo</option>
                                <option value="2">Mofi</option>
                                <option value="3">Roxo</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <select class="form-select" id="inputGroupSelect02">
                                <option selected="">Select Your Favorite Colors</option>
                                <option value="1">Yellow</option>
                                <option value="2">Red</option>
                                <option value="3">Orange</option>
                            </select>
                            <label class="input-group-text" for="inputGroupSelect02">Options</label>
                        </div>
                        <div class="input-group">
                            <button class="btn btn-outline-secondary" type="button"> <i
                                    class="icofont icofont-credit-card"></i></button>
                            <select class="form-select" id="inputGroupSelect03"
                                aria-label="Example select with button addon">
                                <option selected="">Select Your Favorite Chocolates</option>
                                <option value="1">Dark Chocolates</option>
                                <option value="2">Dairy Milk</option>
                                <option value="3">Kitkat</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <select class="form-select" id="inputGroupSelect04"
                                aria-label="Example select with button addon">
                                <option selected="">Select Your Favorite Theme</option>
                                <option value="1">Oslo</option>
                                <option value="2">Koho</option>
                                <option value="3">Voxo</option>
                            </select>
                            <button class="btn btn-outline-secondary" type="button">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Custom File Input </h5>
                        <p class="f-m-light mt-1">
                            Input groups include support for custom selects and custom <code>file uploads</code>. Browser
                            default versions of these are not supported.</p>
                    </div>
                    <div class="card-body main-custom-form input-group-wrapper">
                        <div class="input-group">
                            <label class="input-group-text" for="inputGroupFile01">Upload</label>
                            <input class="form-control" id="inputGroupFile01" type="file">
                        </div>
                        <div class="input-group">
                            <input class="form-control" id="inputGroupFile02" type="file">
                            <label class="input-group-text" for="inputGroupFile02">Verify</label>
                        </div>
                        <div class="input-group">
                            <button class="btn btn-outline-secondary" id="inputGroupFileAddon03" type="button"><i
                                    class="icofont icofont-ui-copy"></i></button>
                            <input class="form-control" id="inputGroupFile03" type="file"
                                aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                        </div>
                        <div class="input-group">
                            <input class="form-control" id="inputGroupFile04" type="file"
                                aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                            <button class="btn btn-outline-secondary" id="inputGroupFileAddon04"
                                type="button">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Buttons with Dropdowns </h5>
                        <p class="f-m-light mt-1">
                            Use <code>input-group </code>and <code>[aria-label='']</code> through buttons with dropdowns.
                        </p>
                    </div>
                    <div class="card-body main-custom-form card-wrapper input-group-wrapper">
                        <div class="input-group">
                            <button class="btn btn-outline-primary dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                            <ul class="dropdown-menu dropdown-block">
                                <li><a class="dropdown-item" href="#!">Ecommerce</a></li>
                                <li><a class="dropdown-item" href="#!">Email</a></li>
                                <li><a class="dropdown-item" href="#!">Users</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#!">Bookmarks</a></li>
                            </ul>
                            <input class="form-control" type="text" aria-label="Text input with dropdown button">
                        </div>
                        <div class="input-group">
                            <input class="form-control" type="text" aria-label="Text input with dropdown button">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-block">
                                <li><a class="dropdown-item" href="#!">Starter kit</a></li>
                                <li><a class="dropdown-item" href="#!">Gallery</a></li>
                                <li><a class="dropdown-item" href="#!">Blog</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#!">Maps</a></li>
                            </ul>
                        </div>
                        <div class="input-group">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">Dropdown</button>
                            <ul class="dropdown-menu dropdown-block">
                                <li><a class="dropdown-item" href="#!">Widgets</a></li>
                                <li><a class="dropdown-item" href="#!">Project</a></li>
                                <li><a class="dropdown-item" href="#!">Contacts</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#!">Tasks</a></li>
                            </ul>
                            <input class="form-control" type="text" aria-label="Text input with 2 dropdown buttons">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">Dropdown</button>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-block">
                                <li><a class="dropdown-item" href="#!">To-Do</a></li>
                                <li><a class="dropdown-item" href="#!">FAQ</a></li>
                                <li><a class="dropdown-item" href="#!">Knowledgebase</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#!">Support Ticket</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Segmented Buttons </h5>
                        <p class="f-m-light mt-1">
                            Multiple add-ons are supported and can be mixed with<code> dropdowns</code> versions.</p>
                    </div>
                    <div class="card-body main-segment-btn card-wrapper input-group-wrapper">
                        <div class="input-group">
                            <button class="btn btn-outline-primary" type="button">Primary</button>
                            <button class="btn btn-primary dropdown-toggle dropdown-toggle-split" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false"><span class="visually-hidden">Toggle
                                    Dropdown</span></button>
                            <ul class="dropdown-menu dropdown-block">
                                <li><a class="dropdown-item" href="#">Learning</a></li>
                                <li><a class="dropdown-item" href="#">Editors</a></li>
                                <li><a class="dropdown-item" href="#">Users</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Social App</a></li>
                            </ul>
                            <input class="form-control" type="text"
                                aria-label="Text input with segmented dropdown button">
                        </div>
                        <div class="input-group">
                            <input class="form-control" type="text"
                                aria-label="Text input with segmented dropdown button">
                            <button class="btn btn-outline-secondary" type="button">Secondary</button>
                            <button class="btn btn-secondary dropdown-toggle dropdown-toggle-split" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false"><span class="visually-hidden">Toggle
                                    Dropdown</span></button>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-block">
                                <li><a class="dropdown-item" href="#">Search Result</a></li>
                                <li><a class="dropdown-item" href="#">Tasks</a></li>
                                <li><a class="dropdown-item" href="#">Projects</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Animation</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card height-equal">
                    <div class="card-header">
                        <h5>Checkboxes and Radios</h5>
                        <p class="f-m-light mt-1">
                            Place any checkbox or radio option within an input group's addon instead of text. We recommend
                            adding <code>mt-0</code> to the <code>form-check-input</code> when there's no visible text next
                            to the input.</p>
                    </div>
                    <div class="card-body checkbox-checked card-wrapper input-group-wrapper">
                        <div class="input-group">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" value=""
                                    aria-label="Checkbox for following text input">
                            </div>
                            <input class="form-control" type="text" aria-label="Text input with checkbox">
                        </div>
                        <div class="input-group">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="radio" value=""
                                    aria-label="Radio button for following text input" checked="">
                            </div>
                            <input class="form-control" type="text" aria-label="Text input with radio button">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Sizing</h5>
                        <p class="f-m-light mt-1">
                            Add the relative form sizing classes to the<code> input-group</code> itself and contents within
                            will automatically resize—no need for repeating the form control size classes on each element.
                        </p>
                    </div>
                    <div class="card-body card-wrapper input-group-wrapper">
                        <div class="input-group input-group-sm"><span class="input-group-text"
                                id="inputGroup-sizing-sm">Small</span>
                            <input class="form-control" type="text" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="input-group"><span class="input-group-text"
                                id="inputGroup-sizing-default">Default</span>
                            <input class="form-control" type="text" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="input-group input-group-lg"><span class="input-group-text"
                                id="inputGroup-sizing-lg">Large</span>
                            <input class="form-control" type="text" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-lg">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Multiple Inputs</h5>
                        <p class="f-m-light mt-1">
                            While multiple <code>&lt;input&gt;</code>s are supported visually, validation styles are only
                            available for input groups with a single <code>&lt;input&gt;</code>.</p>
                    </div>
                    <div class="card-body common-flex main-custom-form card-wrapper">
                        <div class="input-group"><span class="input-group-text">First and Last Name</span>
                            <input class="form-control" type="text" aria-label="First name">
                            <input class="form-control" type="text" aria-label="Last name">
                        </div>
                        <div class="input-group"><span class="input-group-text">$</span><span
                                class="input-group-text">0.00</span>
                            <input class="form-control" type="text"
                                aria-label="Dollar amount (with dot and two decimal places)">
                        </div>
                        <div class="input-group">
                            <input class="form-control" type="text"
                                aria-label="Dollar amount (with dot and two decimal places)"><span
                                class="input-group-text">$</span><span class="input-group-text">0.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Basic Input Groups</h5>
                        <p class="f-m-light mt-1">
                            Place one add-on or button on either side of an input. You may also place one on both sides of
                            an input. Remember to place <code>&lt;label&gt;</code>s outside the input group.</p>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="card-wrapper border rounded-3 main-custom-form input-group-wrapper">
                                    <h6 class="sub-title">Basic</h6>
                                    <div class="input-group"><span class="input-group-text" id="basic-addon1">@</span>
                                        <input class="form-control" type="text" placeholder="Username"
                                            aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="input-group">
                                        <input class="form-control" type="text" placeholder="Recipient's username"
                                            aria-label="Recipient's username" aria-describedby="basic-addon2"><span
                                            class="input-group-text" id="basic-addon2">@example.com</span>
                                    </div>
                                    <label class="form-label" for="basic-url">Your Vanity URL</label>
                                    <div class="input-group"><span class="input-group-text"
                                            id="basic-addon3">https://example.com/</span>
                                        <input class="form-control" id="basic-url" type="text"
                                            aria-describedby="basic-addon3">
                                    </div>
                                    <div class="input-group"><span class="input-group-text">$</span>
                                        <input class="form-control" type="text"
                                            aria-label="Amount (to the nearest dollar)"><span
                                            class="input-group-text">.00</span>
                                    </div>
                                    <div class="input-group">
                                        <input class="form-control" type="text" placeholder="Username"
                                            aria-label="Username"><span class="input-group-text">@</span>
                                        <input class="form-control" type="text" placeholder="Server"
                                            aria-label="Server">
                                    </div>
                                    <div class="input-group"><span class="input-group-text">With Textarea</span>
                                        <textarea class="form-control" aria-label="With textarea"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card-wrapper border rounded-3 input-radius">
                                    <h6 class="sub-title">Wrapping </h6>
                                    <p class="f-m-light mb-1">Input groups wrap by default via flex-wrap: wrap in order to
                                        accommodate custom form field validation within an input group. You may disable this
                                        with <code>flex-nowrap</code>.</p>
                                    <div class="input-group flex-nowrap"><span class="input-group-text"
                                            id="addon-wrapping">@</span>
                                        <input class="form-control" type="text" placeholder="Username"
                                            aria-label="Username" aria-describedby="addon-wrapping">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary m-r-15" type="submit">Submit</button>
                        <button class="btn btn-light" type="submit">Cancel </button>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Variation of Addons</h5>
                        <p class="f-m-light mt-1">
                            Place one add-on or button on either side of an input. You may also place one on both sides of
                            an input. Remember to place <code>&lt;label&gt;</code>s outside the input group.</p>
                    </div>
                    <div class="card-body card-wrapper input-radius">
                        <div class="row">
                            <div class="col">
                                <form>
                                    <div class="mb-3 m-form__group">
                                        <label class="form-label">Left Addon</label>
                                        <div class="input-group"><span class="input-group-text bg-light-primary"><i
                                                    class="icofont icofont-pencil-alt-5 txt-primary"></i></span>
                                            <input class="form-control" type="text" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Right Addon</label>
                                        <div class="input-group">
                                            <input class="form-control" type="text" placeholder="Recipient's username"
                                                aria-label="Recipient's username"><span
                                                class="input-group-text bg-light-secondary"><i
                                                    class="icofont icofont-ui-dial-phone txt-secondary"> </i></span>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Joint Addon</label>
                                        <div class="input-group"><span class="input-group-text bg-light-primary"><i
                                                    class="icofont icofont-unlink txt-primary"></i></span><span
                                                class="input-group-text">0.00 </span>
                                            <input class="form-control" type="text"
                                                aria-label="Amount (to the nearest dollar)">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Left & Right Addon</label>
                                        <div class="input-group mb-3"><span class="input-group-text bg-light-secondary"><i
                                                    class="icofont icofont-ui-zoom-out txt-secondary"></i></span>
                                            <input class="form-control" type="text"
                                                aria-label="Amount (to the nearest dollar)"><span
                                                class="input-group-text bg-light-secondary"><i
                                                    class="icofont icofont-ui-zoom-in txt-secondary"></i></span>
                                        </div>
                                    </div>
                                    <div class="mb-3 input-group-solid">
                                        <label class="form-label">Solid Style</label>
                                        <div class="input-group"><span class="input-group-text bg-light-primary"><i
                                                    class="icofont icofont-users txt-primary"></i></span>
                                            <input class="form-control" type="text" placeholder="999999">
                                        </div>
                                    </div>
                                    <div class="mb-3 input-group-square">
                                        <label class="form-label">Flat Style</label>
                                        <div class="input-group"><span class="input-group-text bg-light-secondary"><i
                                                    class="icofont icofont-credit-card txt-secondary"></i></span>
                                            <input class="form-control" type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="mb-3 input-group-square">
                                        <label class="form-label">Raise Style</label>
                                        <div class="input-group"><span class="input-group-text bg-light-primary"><i
                                                    class="icofont icofont-download txt-primary"></i></span>
                                            <input class="form-control input-group-air" type="text"
                                                placeholder="https://www.example.com">
                                        </div>
                                    </div>
                                    <div>
                                        <label class="form-label">Left & Right Addon</label>
                                        <div class="input-group pill-input-group"><span
                                                class="input-group-text bg-light-secondary"><i
                                                    class="icofont icofont-ui-copy txt-secondary"></i></span>
                                            <input class="form-control" type="text"
                                                aria-label="Amount (to the nearest dollar)"><span
                                                class="input-group-text bg-light-secondary"><i
                                                    class="icofont icofont-stock-search txt-secondary"></i></span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary m-r-15" type="submit">Submit</button>
                        <button class="btn btn-light" type="submit">Cancel </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@section('scripts')    
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection
