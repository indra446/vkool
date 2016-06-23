		<?php

		echo $this -> Html -> script(array('lib/jquery', 'lib/jquery-migrate', 'lib/bootstrap', 'lib/jquery.ui', 'lib/jRespond', 'lib/nav.accordion', 'lib/hover.intent', 'lib/hammerjs', 'lib/jquery.hammer', 'lib/smoothscroll', 'lib/jquery.fitvids', 'lib/scrollup', 'lib/smoothscroll', 'lib/jquery.slimscroll', 'lib/jquery.syntaxhighlighter', 'lib/velocity', 'lib/smart-resize','lib/bootbox', 'lib/jquery.maskedinput','lib/jquery.validate', 'lib/jquery.form','lib/j-forms-validations','lib/additional-methods', 'lib/jquery-cloneya','lib/j-forms', 'lib/login-validation', 'apps'));
		echo $this -> Html -> script(array('lib/jquery.dataTables','lib/dataTables.responsive','lib/dataTables.tableTools','lib/dataTables.bootstrap','lib/select2.full','lib/jquery.mask','lib/footable.all','lib/jquery.noty'));
		echo $this -> fetch('script');
		?>
<!-- <br><div class="alert alert-success alert-dismissable">
	<i class="fa fa-check"></i>
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<?php echo $message ?>
</div><!-- .alert alert-success --> 
<script type="text/javascript">
var jq=jQuery.noConflict();

jq(document).ready(function() {    // "use strict";
 

    if (jq.noty) {
        var n_dom = [];
            n_dom[0] = '<div class="activity-item"> <i class="zmdi zmdi-notifications"></i> <div class="activity"> <?php echo $message ?> <span>Info</span> </div> </div>',
            // n_dom[1] = '<div class="activity-item"> <i class="zmdi zmdi-alert-polygon"></i> <div class="activity"> Mail server was updated. See <a href="#">changelog</a> <span>About 2 hours ago</span> </div> </div>',
            // n_dom[2] = '<div class="activity-item"> <i class="zmdi zmdi-email"></i> <div class="activity"> Your <a href="#">latest post</a> was liked by <a href="#">Audrey Mall</a> <span>35 minutes ago</span> </div> </div>',
            // n_dom[3] = '<div class="activity-item"> <i class="zmdi zmdi-shopping-cart-plus"></i> <div class="activity"> <a href="#">Eugene</a> ordered 2 copies of <a href="#">OEM license</a> <span>14 minutes ago</span> </div> </div>',
            // n_dom[4] = '<div class="activity-item"> <i class="zmdi zmdi-truck"></i> <div class="activity"> <a href="#">Amark</a> This is frienly notification example <a href="#">Here</a> <span>14 minutes ago</span> </div> </div>',
            // n_dom[5] = '<div class="activity-item"> <i class="zmdi zmdi-favorite-outline"></i> <div class="activity"> <a href="#">Amark</a> This is frienly notification example <a href="#">Here</a> <span>14 minutes ago</span> </div> </div>';

        window.anim = {};
        window.anim.open = 'flipInX';
        window.anim.close = 'flipOutX';
        jq('#anim-open').on('change', function (e) {
            window.anim.open = jq(this).val();
        });

        jq('#anim-close').on('change', function (e) {
            window.anim.close = jq(this).val();
        });

        var nGen = function nGen(type, text, layout) {

            var n = noty({
                text: text,
                type: type,
                dismissQueue: true,
                layout: layout,
                closeWith: ['click'],
                theme: 'ThemeNoty',
                maxVisible: 10,
                animation: {
                    open: 'noty_animated bounceInRight',
                    close: 'noty_animated bounceOutRight',
                    easing: 'swing',
                    speed: 500
                }

            });
                    setTimeout(function () {
                        n.close();
                    },5000);

        }


        var nGenAll = function nGenAll() {
            nGen('information', n_dom[0], 'topRight');
            // nGen('error', n_dom[1], 'topRight');
            // nGen('information', n_dom[2], 'topRight');
            // nGen('success', n_dom[3], 'topRight');
            // nGen('alert', n_dom[4], 'topRight');
        }

                setTimeout(function () {
                    nGenAll();
                }, 500);



        var PreviewGen = function PreviewGen(type, text, layout) {

            var n = noty({
                text: text,
                type: type,
                dismissQueue: true,
                layout: layout,
                closeWith: ['click'],
                theme: 'ThemeNoty',
                maxVisible: 10,
                animation: {
                    open: 'noty_animated bounceInDown',
                    close: 'noty_animated fadeOut',
                    easing: 'swing',
                    speed: 500
                }
            });
            setTimeout(function () {
                n.close();
            }, 5000);

        }
		jq(".widget-wrap").load(function () {
            var Dtype = jq(this).data("type"),
                Dlayout = jq(this).data("layout");
            PreviewGen(Dtype, n_dom[5], Dlayout);
        });


    }


   
});
</script>