{{-- @if(count($errors)>0)
<div class="alert alert-danger" role="alert">
    <h4 class="alert-heading">Alert Heading</h4>
    <p>Opps! something went woring
    </p>
    <hr>
    @foreach ($errors->all() as $error)
    <p class="mb-0">{{ $error }}</p>
    @endforeach
  </div>
@endif --}}
@if (count($errors)>0)
<div class="alert alert-danger">
    @foreach ($errors->all() as $error)
        <ul>
            <li>
                {{ $error }}
            </li>
        </ul>
    @endforeach
</div>
@endif

