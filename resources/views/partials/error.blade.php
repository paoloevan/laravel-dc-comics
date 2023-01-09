@if ($errors->any())
<div class="alert alert-danger align-self-start">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif