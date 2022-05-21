@extends('layouts.master')
@section('title', 'Send Single Email')
@push('css')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endpush
@section('content')
<div class="card">
    <br>
    <form>
    <div class="row">
        <div class="col-xl-3 col-md-3 col-12">
        </div>
        <div class="col-xl-6 col-md-6 col-12">
            <div class="form-group">
                <label for="helperText">Phone Number</label>
                <input type="text" id="helperText" class="form-control" placeholder="Phone Number">
                    <p><small class="text-muted">Send to (Mobile Number).</small></p>
            </div>
        </div>
        <div class="col-xl-3 col-md-3 col-12">
        </div>
   </div>
   <br>
   <div class="row">
     <div class="col-xl-3 col-md-3 col-12">
     </div>
     <div class="col-xl-6 col-md-6 col-12">
      <div class="form-label-group mb-0">
         <textarea data-length="160" class="form-control char-textarea active" id="textarea-counter" rows="10" placeholder="Message Body" style="color: rgb(78, 81, 84);"></textarea>
          <label for="textarea-counter">Message Body</label>
        </div>
           <small class="textarea-counter-value float-right" style="background-color: rgb(115, 103, 240);"><span class="char-count">0</span> / 160 <span> | </span> <span id="demo">1</span></small>
        </div>
        <div class="col-xl-3 col-md-3 col-12">
         </div>
    </div>
    <br>
    <div class="row">
        <div class="col-xl-3 col-md-3 col-12">
        </div>
        <div class="col-xl-6 col-md-6 col-12">
        <button type="submit" class="btn btn-primary btn-block waves-effect waves-float waves-light">Send
        Sms</button>
         </div>
        <div class="col-xl-3 col-md-3 col-12">
         </div>
    </div>
    </form>
    <br>
</div>
<script>
$(document).ready(function(){
  $("#textarea-counter").on("keyup", function() {
    var value = $("#textarea-counter").val();
    if(value.length==10000)
    {
        var x= value.length/160;
        document.getElementById("demo").innerHTML = x;
    }
    else{

        var x=value.length/160;
        document.getElementById("demo").innerHTML =Math.ceil(x);
    }
  });
});
</script>
@endsection
