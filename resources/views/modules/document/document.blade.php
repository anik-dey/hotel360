@extends('layouts.master')
@section('title', 'Document')
@section('content')
<form action="{{route('document-add')}}" method="POST" enctype="multipart/form-data" id="div1" style="display: none;">
    @csrf
    <div class="row">
        <div class="col-lg-4 col-sm-12">
            <div class="form-group">
                <label for="profilePicture">Document</label>
                <input type="file" class="form-control date-mask" name="document[]" id="" multiple required>
                <br>
                <label>Allowed File: .pdf, .csv, .zip, .doc, .docx, .jpeg, .jpg, .png</label>
            </div>
        </div>
        <div class="col-lg-4 col-sm-12">
            <div class="form-group">
                <label for="staffAddress">Document Title</label>
                <input type="text" class="form-control date-mask" placeholder="Title" name="title" id="" required>
            </div>
        </div>
        <div class="col-lg-4 col-sm-12">
            <div class="form-group">
                <label for="fp-default">Expiry date</label>
                <input type="text" id="fp-default" class="form-control flatpickr-basic flatpickr-input"
                    name="expiry_date" placeholder="YYYY-MM-DD" readonly="readonly">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <div class="form-group">
                <label for="staffAddress">Description</label>
                <textarea name="description" id="description" cols="4" rows="3" class="form-control date-mask"
                    placeholder="Description"></textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-sm-12">
            <button type="button" class="btn btn-primary btn-block waves-effect waves-float waves-light"
                id="hide_btn">Hide</button>
        </div>
        <div class="col-lg-6 col-sm-12">
            <button type="submit" class="btn btn-success btn-block waves-effect waves-float waves-light">Submit</button>
        </div>
    </div>
</form>
<br>
<div class="row" id="table-bordered">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex flex-row justify-content-end">
                <div class="col-lg-3 col-sm-12 mt-1">
                    <h4 class="card-title">Documents List</h4>
                </div>
                <div class="col-lg-3 col-sm-12 mt-1 mobile_flex">
                    <label>Search :</label>
                    <input id="myInput" type="text" onkeyup="myFunction()" value="" class="form-control"
                        placeholder="Search Anythings...">
                </div>
                <div class="col-lg-3 col-sm-12 mt-1">
                    <button class="dt-button create-new btn btn-danger mt-2" tabindex="0"
                        onclick="window.location.href='document-expiry';" aria-controls="DataTables_Table_0"
                        type="button"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-plus mr-50 font-small-4">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>Expiry Document</span>
                    </button>
                </div>
                <div class="col-lg-3 col-sm-12 mt-1">
                    <button class="dt-button create-new btn btn-primary mt-2" tabindex="0"
                        aria-controls="DataTables_Table_0" type="button" id="document_add"><span><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-plus mr-50 font-small-4">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>Add Document</span>
                    </button>
                </div>
            </div>
            <!-- <div class="card-body">
                <p class="card-text">

                </p>
            </div> -->
            <div class="table-responsive">
                <table class="table table-bordered table-sm">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Document</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Upload Date</th>
                            <th>Expiry Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @if (isset($documents))
                        <?php $_SESSION['i'] = 0; ?>
                        @foreach ($documents as $item)
                        <?php $_SESSION['i'] = $_SESSION['i'] + 1; ?>
                        <tr>
                            <td>
                                <span class="font-weight-bold">{{ $_SESSION['i'] }}</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">{{$item->document}}</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">{{ $item->title }}</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">{{ $item->description }}</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">{{ $item->created_at }}</span>
                            </td>
                            @if ($item->expiry_date < Carbon\Carbon::now()) <td>
                                <span class="badge badge-pill badge-light-danger mr-1">{{ $item->expiry_date }}</span>
                                </td>
                                @else
                                <td>
                                    <span
                                        class="badge badge-pill badge-light-success mr-1">{{ $item->expiry_date }}</span>
                                </td>
                                @endif
                                <td>
                                    <div style="display: flex">
                                        <div style="margin-left: 7px;">
                                            <a href="{{ URL::to('/download/' . $item->document) }}"> <button
                                                    type="button" class="btn btn-primary btn-sm"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-download">
                                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                        <polyline points="7 10 12 15 17 10"></polyline>
                                                        <line x1="12" y1="15" x2="12" y2="3"></line>
                                                    </svg></button></a>
                                        </div>
                                        <div style="margin-left: 7px">
                                            <div style="display: none;">
                                                <input type="text"
                                                    value="http://127.0.0.1:8000/download/{{$item->document}}"
                                                    id="input">
                                            </div>
                                            <button type="button" class="btn btn-primary btn-sm"
                                                onclick="copyFunction()"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" class="feather feather-share-2">
                                                    <circle cx="18" cy="5" r="3"></circle>
                                                    <circle cx="6" cy="12" r="3"></circle>
                                                    <circle cx="18" cy="19" r="3"></circle>
                                                    <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                                                    <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                                                </svg></button>
                                        </div>
                                        {{-- <i>||||</i> --}}
                                        <div style="margin-left: 7px">
                                            <form
                                                action="{{ URL::to('/document-delete/' . $item->id . '/' . $item->document) }}"
                                                method="POST">
                                                @csrf
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button type="button" class="btn btn-primary btn-sm show_confirm"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-trash">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path
                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                        </path>
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    $("#document_add").click(function() {
        $("#div1").fadeIn("slow");
        // $("#income_list").hide();
    });
});
$(document).ready(function() {
    $("#hide_btn").click(function() {
        $("#div1").hide();
        // $("#income_list").hide();
    });
});
</script>
<script>
function copyFunction() {
    var copyText = document.getElementById("input");
    /* Select the text field */
    copyText.select();
    copyText.setSelectionRange(0, 99999); /* For mobile devices */

    /* Copy the text inside the text field */
    navigator.clipboard.writeText(copyText.value);
    /* Alert the copied text */
    alert("Copied the text: " + copyText.value);
}
</script>

@endsection
