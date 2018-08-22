$(document).ready(function(){

	pizzas = ["Cheese and Tomato", "Cheesy Onion","Spicy Veggie","Devilled Chicken","Veggie With Paneer","Cheese Lovers","Tandoori Chicken","Sausage Delight","Sausage Supreme","Tropical Hawaiian","Margeherita","Fiery Chicken","Hot Garlic Prawn","Italiano Supreme","Veggie Supreme","Butter Cheese Masala","Devilled Fish","Spicy Chicken & Paneer","Teriyaki Fiesta"];

	$(".add_to_cart_btn").click(function(){
		//$(this).animate({width: "200px"});
		//$(this).delay(1000).animate({width: "110px"}, "slow");

		id = $(this).attr('id');

		cropped_id = id.substr(9);

		//alert(pizzas[cropped_id - 1] + " pizza added to your cart successfully");
		//$("#msg"+cropped_id).fadeIn('slow');
		//$("#msg"+cropped_id).delay(1500).fadeOut('slow');

		//$("html, body").animate({scroll: 5},"slow");
	});
});