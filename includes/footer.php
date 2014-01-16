	</div><!-- end #middle -->
		
	<div id="footer">
		<div id="footer_links">
			<div><!-- start column1 -->
				<ul>
					<li <?php isInCategory('work')?>><a href="<?echo PATH;?>work/video.php">Animations</a></li>
					<li <?php isActive('the_nebbish.php')?>><a href="<?echo PATH;?>work/the_nebbish.php">The Nebbish</a></li>
					<li <?php isActive('toi_toi.php')?>><a href="<?echo PATH;?>work/toi_toi.php">Toi Toi</a></li>
					<li <?php isActive('a_very_little_warrior.php')?>><a href="<?echo PATH;?>work/a_very_little_warrior.php">A Very Little Warrior</a></li>
					<li <?php isActive('the_beast')?>><a href="<?echo PATH;?>work/the_beast.php">The Beast</a></li>
				</ul>
			</div><!-- end column1 -->
			
			<div><!-- start column2 -->
				<ul>
					<li><a href="#">Original music</a></li>
					<li><a href="#">music sample 1</a></li>
					<li><a href="#">music sample 2</a></li>
					<li><a href="#">music sample 3</a></li>
					<li><a href="#">music sample 4</a></li>
				</ul>
			</div><!-- end column2 -->
			
			<div><!-- start column3 -->
				<ul>
					<li <?php isInCategory('lyrics')?>><a href="<?echo PATH;?>lyrics/lyrics.php">Lyrics</a></li>
					<li <?php isActive('math_class_the_musical.php')?>><a href="<?echo PATH;?>lyrics/math_class_the_musical.php">Math Class: The Musical</a></li>
					<li <?php isActive('frat_the_musical.php')?>><a href="<?echo PATH;?>lyrics/frat_the_musical.php">Frat: The Musical</a></li>
				</ul>
			</div><!-- end column3 -->
			
			<div><!-- start column4 -->
				<ul>
					<li <?php isInCategory('about');?><?php isInCategory('contact');?>><a href="<?echo PATH;?>about/about.php">More</a></li>
					<li <?php isActive('about_me.php')?>><a href="<?echo PATH;?>about/about_me.php">About me</a></li>
					<li <?php isActive('my_process')?>><a href="<?echo PATH;?>about/my_process.php">My process</a></li>
					<li <?php isInCategory('contact')?>><a href="<?echo PATH;?>contact/contact.php">Contact</a></li>
				</ul>
			</div><!-- end column4 -->
		
		</div><!-- end #footer_links -->
		
		<div id="copyright">
			&copy;2012 Leeran Z Raphaely. All rights reserved.
		</div><!-- end #copyright -->
	
	</div><!-- end #footer -->
</div><!-- end #wrapper -->
</body>
</html>