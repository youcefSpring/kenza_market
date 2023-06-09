@if(Session::has('error'))
    <div class="row mr-2 ml-2" >
            <button type="text" class="btn btn-lg btn-block btn-danger mb-2"
                    id="type-error">{{Session::get('error')}}
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
