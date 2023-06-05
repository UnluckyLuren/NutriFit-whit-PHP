function filterRestaurants(city) {
  var restaurants = document.getElementsByClassName("restaurant");
  var specialRestaurants = document.getElementsByClassName("special");

  for (var i = 0; i < restaurants.length; i++) {
    if (restaurants[i].classList.contains(city)) {
      restaurants[i].style.display = "block";
    } 
    else 
    {
      restaurants[i].style.display = "none";
    }
  }

  for (var i = 0; i < specialRestaurants.length; i++) {
    if (specialRestaurants[i].classList.contains(city)) {
      specialRestaurants[i].style.display = "block";
    } else {
      specialRestaurants[i].style.display = "none";
    }
  }
}

function showAllRestaurants() {
  var restaurants = document.getElementsByClassName("restaurant");
  var specialRestaurants = document.getElementsByClassName("special");

  for (var i = 0; i < restaurants.length; i++) {
    restaurants[i].style.display = "block";
  }

  for (var i = 0; i < specialRestaurants.length; i++) {
    specialRestaurants[i].style.display = "block";
  }
}