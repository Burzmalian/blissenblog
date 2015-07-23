</div> <!-- end .wrapper -->
<?php wp_footer(); ?>
<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-43355494-1']);
_gaq.push(['_trackPageview']);

(function () {
   var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
   ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
   var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>
 
 <?php if (is_single()): ?>
  <!-- Addthis.com scripts -->
<script type="text/javascript" src="https://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-556b47fa19c4acc1" async="async"></script>
<script>
  var addthis_config = {
    data_track_addressbar: false,
    data_track_clickback: false,
    ui_use_css : false,
  };
</script>
<?php endif; ?>
  <!--End Social Sharing Icons -->
</body>
</html>