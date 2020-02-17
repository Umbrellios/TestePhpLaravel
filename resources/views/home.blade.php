@extends('welcome')
@section('content')

        <div class="links">
            <a href="<?php echo action("UsuarioLoginController@login"); ?>">Login</a>
        </div>

    </div>
</div>

@stop
