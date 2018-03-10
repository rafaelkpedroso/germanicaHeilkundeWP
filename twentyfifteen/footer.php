<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info" style="text-align: center">
            <a href="http://www.marinabernardi.com.br">
                <img src="<?php echo home_url(); ?>/wp-content/uploads/2018/02/marinabernardi.png" style="height: 80px;" alt="Marina Bernardi">
            </a>
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

<script>
    jQuery(".dropdown-toggle").click();
</script>
<script>

    if(!(window.matchMedia('(display-mode: fullscreen)').matches)) {

        //addToHomescreen.removeSession();     // use this to remove the localStorage variable
        var ath = addToHomescreen({
            skipFirstVisit: false,	// show at first access
            startDelay: 0,          // display the message right away
            lifespan: 0,            // do not automatically kill the call out
            displayPace: 1440,         // do not obey the display pace TIRAR
            maxDisplayCount: 0,      // do not obey the max display count
            detectHomescreen: true,
            modal: true,
            //logging:true
        });
        // ath.clearSession();      // reset the user session
    }
</script>
<script>
    (function(document,navigator,standalone) {
        // prevents links from apps from oppening in mobile safari
        // this javascript must be the first script in your <head>
        if ((standalone in navigator) && navigator[standalone]) {
            var curnode, location=document.location, stop=/^(a|html)$/i;
            document.addEventListener('click', function(e) {
                curnode=e.target;
                while (!(stop).test(curnode.nodeName)) {
                    curnode=curnode.parentNode;
                }
                // Condidions to do this only on links to your own app
                // if you want all links, use if('href' in curnode) instead.
                if(
                    'href' in curnode && // is a link
                    (chref=curnode.href).replace(location.href,'').indexOf('#') && // is not an anchor
                    (   !(/^[a-z\+\.\-]+:/i).test(chref) ||                       // either does not have a proper scheme (relative links)
                        chref.indexOf(location.protocol+'//'+location.host)===0 ) // or is in the same protocol and domain
                ) {
                    e.preventDefault();
                    location.href = curnode.href;
                }
            },false);
        }
    })(document,window.navigator,'standalone');
</script>

    <!-- Begin Inspectlet JS Code -->
    <script type="text/javascript" id="inspectletjs">
        (function() {
            var insp_ab_loader = true; // set this boolean to false to disable the A/B testing loader
            window.__insp = window.__insp || [];
            __insp.push(['wid', 956960288]);
            var ldinsp = function(){
                if(typeof window.__inspld != "undefined") return; window.__inspld = 1; var insp = document.createElement('script'); insp.type = 'text/javascript'; insp.async = true; insp.id = "inspsync"; insp.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://cdn.inspectlet.com/inspectlet.js?wid=956960288&r=' + Math.floor(new Date().getTime()/3600000); var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(insp, x);if(typeof insp_ab_loader != "undefined" && insp_ab_loader){ var adlt = function(){ var e = document.getElementById('insp_abl'); if(e){ e.parentNode.removeChild(e); __insp.push(['ab_timeout']); }}; var adlc = "body{ visibility: hidden !important; }"; var adln = typeof insp_ab_loader_t != "undefined" ? insp_ab_loader_t : 1200; insp.onerror = adlt; var abti = setTimeout(adlt, adln); window.__insp_abt = abti; var abl = document.createElement('style'); abl.id = "insp_abl"; abl.type = "text/css"; if(abl.styleSheet) abl.styleSheet.cssText = adlc; else abl.appendChild(document.createTextNode(adlc)); document.head.appendChild(abl); } };
            setTimeout(ldinsp, 0);
        })();
    </script>
    <!-- End Inspectlet JS Code -->
</body>
</html>
