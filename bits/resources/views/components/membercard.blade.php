<div class="container-fluid">
    <div class="container">
        <div class="px-4 pt-3">
            <h4>Admins</h4>
            <div class="col my-2">
                @include('components.memberlayout')
            </div>
        </div>
    </div>
    <hr style="border-top: 2px solid;">
    <div class="container">
        <div class="px-4 pt-3">
            <h4>Members</h4>
            @for($i = 0; $i < 3; $i++)
                <div class="col my-2">
                    @include('components.memberlayout')
                </div>
            @endfor
        </div>
    </div>
</div>