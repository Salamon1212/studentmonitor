<div>
    <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
    @if(Session::has('Success'))
    <div class="alert alert-success" id="alert-message">
            {{Session::get('Success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
        @endif
</div>