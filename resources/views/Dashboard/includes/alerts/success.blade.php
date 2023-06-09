@if(Session::has('success'))
    <div class="row mr-2 ml-2">
            <button type="text" class="btn btn-lg btn-block btn-success mb-2"
                    id="type-error">{{Session::get('success')}}
            </button>
    </div>

    <script>
        // Hide the success message after 2 seconds
        $(document).ready(function() {
            setTimeout(function() {
                $(".btn-success").fadeOut("slow", function() {
                    $(this).remove();
                });
            }, 500);
        });
    </script>
@endif
