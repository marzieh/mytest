<?php get_header(); ?>
<?php get_sidebar(); ?>
<div class="content">
	<div class="midhead">
		<h3 class="center">find a chocolate gift</h3>
			<form method="get" action="http://www.chocolate.com">
			<select name="price">
				<option value="under $30">under $30</option>
				<option value="under $60">under $60</option>
				<option value="under $90">under $90</option>
			</select>
			<select name="category">
				<option value="any category">any category</option>
				<option value="truffles">truffles</option>
				<option value="cakes">cakes</option>
				<option value="fudge">fudge</option>
				<option value="kosher">kosher</option>
			</select>
			<input type="radio" name="flexible" value="flexible"/>flexible
			<input type="radio" name="asap" value="asap"/>asap<br/><br/>
			nuts:<input type="checkbox" name="nuts" value="nuts"/>
			suger:<input type="checkbox" name="suger" value="suger"/>	
			eggs:<input type="checkbox" name="eggs" value="eggs"/>	
			trace of nuts:<input type="checkbox" name="trace of nuts" value="trace of nuts"/>	
			gluten:<input type="checkbox" name="gluten" value="gluten"/>	
			alcholo:<input type="checkbox" name="alcholo" value="alcholo"/>	
			soy:<input type="checkbox" name="soy" value="soy"/>	
			all vegan:<input type="checkbox" name="all vegan" value="all vegan"/><br/>	
			all kosher:<input type="checkbox" name="all kosher" value="all kosher"/>	
			all fire trade:<input type="checkbox" name="all fire trade" value="all fire trade"/>	
			dairy:<input type="checkbox" name="dairy" value="dairy"/><br/><br/>	
			<input type="submit" value="GO STEP 2"/>
		</form>
	</div>
   
</div>
<?php get_footer(); ?>