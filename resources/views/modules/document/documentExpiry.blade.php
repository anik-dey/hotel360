@extends('layouts.master')
@section('title', 'Document')
@section('content')
<div class="row" id="table-bordered">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex flex-row justify-content-end">
                <div class="col-lg-4 col-sm-12 mt-1 mobile_flex">
                    <label>Search :</label>
                    <input id="myInput" type="text" onkeyup="myFunction()" value="" class="form-control"
                        placeholder="Search Anythings...">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
$('.show_confirm').click(function(event) {
    var form = $(this).closest("form");
    var name = $(this).data("name");
    event.preventDefault();
    swal({
            title: `Are you sure you want to delete this record?`,
            text: "If you delete this, it will be gone forever.",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {

            if (willDelete) {
                form.submit();
            }
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