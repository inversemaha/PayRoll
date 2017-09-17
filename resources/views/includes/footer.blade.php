
<script src="/js/jquery.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="/js/jquery.scrollTo.min.js"></script>
<script src="/js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="/js/respond.min.js" ></script>

<!--this page plugins-->

<script type="text/javascript" src="/assets/fuelux/js/spinner.min.js"></script>
<script type="text/javascript" src="/assets/bootstrap-fileupload/bootstrap-fileupload.js"></script>
<script type="text/javascript" src="/assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
<script type="text/javascript" src="/assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="/assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="/assets/bootstrap-daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="/assets/bootstrap-daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="/assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="/assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
<script type="text/javascript" src="/assets/jquery-multi-select/js/jquery.multi-select.js"></script>
<script type="text/javascript" src="/assets/jquery-multi-select/js/jquery.quicksearch.js"></script>

<!--select2-->
<script type="text/javascript" src="/assets/select2/js/select2.min.js"></script>

<!--summernote-->
<script src="/assets/summernote/dist/summernote.min.js"></script>

<!--right slidebar-->
<script src="/js/slidebars.min.js"></script>


<!--this page  script only-->
<script src="/js/advanced-form-components.js"></script>

<!--bootstrap-switch-->
<script src="/assets/bootstrap-switch/static/js/bootstrap-switch.js"></script>

<!--bootstrap-switch-->
<script src="/assets/switchery/switchery.js"></script>

<!--common script for all pages-->
<script src="/js/common-scripts.js"></script>

<script>

    jQuery(document).ready(function(){

        $('.summernote').summernote({
            height: 200,                 // set editor height

            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor

            focus: true                 // set focus to editable area after initializing summernote
        });
    });

</script>

<!--select2-->
<script type="text/javascript">

    $(document).ready(function () {
        $(".js-example-basic-single").select2();

        $(".js-example-basic-multiple").select2();
    });
</script>

<!--bootstrap swither-->
<script type="text/javascript">
    $(document).ready(function () {
        // Resets to the regular style
        $('#dimension-switch').bootstrapSwitch('setSizeClass', '');
        // Sets a mini switch
        $('#dimension-switch').bootstrapSwitch('setSizeClass', 'switch-mini');
        // Sets a small switch
        $('#dimension-switch').bootstrapSwitch('setSizeClass', 'switch-small');
        // Sets a large switch
        $('#dimension-switch').bootstrapSwitch('setSizeClass', 'switch-large');


        $('#change-color-switch').bootstrapSwitch('setOnClass', 'success');
        $('#change-color-switch').bootstrapSwitch('setOffClass', 'danger');
    });
</script>

<!-- swithery-->
<script type="text/javascript">
    $(document).ready(function () {
        //default
        var elem = document.querySelector('.js-switch');
        var init = new Switchery(elem);


        //small
        var elem = document.querySelector('.js-switch-small');
        var switchery = new Switchery(elem, { size: 'small' });

        //large
        var elem = document.querySelector('.js-switch-large');
        var switchery = new Switchery(elem, { size: 'large' });


        //blue color
        var elem = document.querySelector('.js-switch-blue');
        var switchery = new Switchery(elem, { color: '#7c8bc7', jackColor: '#9decff' });

        //green color
        var elem = document.querySelector('.js-switch-yellow');
        var switchery = new Switchery(elem, { color: '#FFA400', jackColor: '#ffffff' });

        //red color
        var elem = document.querySelector('.js-switch-red');
        var switchery = new Switchery(elem, { color: '#ff6c60', jackColor: '#ffffff' });


    });
</script>