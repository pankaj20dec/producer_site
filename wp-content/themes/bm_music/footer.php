
		</div><!-- .site-content -->
<div class="scroll-top"><a href="javascript:void(0);">top</a></div>
		<footer id="footer">
			<div class="social-icons">
				<ul>
					<li><a href="#" class="facebook">facebook</a></li>
					<li><a href="#" class="twitter">twitter</a></li>
					<li><a href="#" class="instagram">instagram</a></li>
					<li><a href="#" class="youtube">youtube</a></li>
					<li><a href="#" class="spotify">spotify</a></li>
					<li><a href="#" class="apple">apple</a></li>
				</ul>	
			</div>
			<div class="mobile-social-icons">
				<ul>
					<li><a href="#" class="facebook">facebook</a></li>
					<li><a href="#" class="twitter">twitter</a></li>
					<li><a href="#" class="instagram">instagram</a></li>
					<li><a href="#" class="youtube">youtube</a></li>
				</ul>	
			</div>
			<div class="copyright">
				<p>© copyright 2016.</p>
			</div>
		</footer>
<?php wp_footer(); ?>
<script>
    (function() {
        var script = document.createElement("script");

        script.type = "text/javascript";
        script.async = true;
        script.src = "http://sd.toneden.io/production/v2/toneden.loader.js"

        var entry = document.getElementsByTagName("script")[0];
        entry.parentNode.insertBefore(script, entry);
    }());

    ToneDenReady = window.ToneDenReady || [];
    ToneDenReady.push(function() {
        ToneDen.configure({
            soundcloudConsumerKey: '76858166ad1f3fecc05a4bfb26ff0143'
        });
        // This is where all the action happens:
        ToneDen.player.create({
            dom: "#player",
            eq: "waves",
            skin: "night",
            tracksPerArtist: 10,
            urls: [
                "https://soundcloud.com/gelmania"
				
            ]
        });
    });
</script>
</body>
</html>
