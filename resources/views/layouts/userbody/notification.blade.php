@if(session('success'))

<script type="text/javascript">
            "use strict"; // Start of use strict
                // notification
                var bool = "<?php echo session('success') ?>"; 
                setTimeout(function () {
                    toastr.options = {
                        closeButton: true,
                        progressBar: true,
                        showMethod: 'slideDown',
                        timeOut: 2000
                    };
                    toastr.success(bool,'PFE 2021');

                }, 1300);

</script>
@endif